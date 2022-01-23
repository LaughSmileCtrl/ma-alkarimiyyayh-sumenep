<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            Dashboard
        </template>

        <div class="grid grid-cols-1 gap-5">
            <div class="border shadow-inner shadow-gray-700/60 rounded-3xl w-4/5 h-fit p-7">
                <h2 class="text-xl mb-5 font-semibold">Umum</h2>
                <div class="grid grid-cols-2 gap-3 content-center">
                    <label for="" class="text-lg mr-3">Jumlah Guru </label>
                    <input v-model="form.total_graduate" type="text" class="input input-primary bg-gray-100 focus:bg-white w-full" />
                    <label for="" class="text-lg mr-3">Jumlah Siswa </label>
                    <input v-model="form.total_teacher" type="text" class="input input-primary bg-gray-100 focus:bg-white w-full" />
                    <label for="" class="text-lg mr-3">Jumlah Alumni </label>
                    <input v-model="form.total_student" type="text" class="input input-primary bg-gray-100 focus:bg-white w-full" />
                    <label for="" class="text-lg mr-3 mt-7">Nomor Whatsapp</label>
                    <input v-model="form.whatsapp" type="text" class="input input-primary bg-gray-100 focus:bg-white w-full mt-7" />
                    <button @click="saveGeneral" class="btn btn-primary w-fit col-span-2 ml-auto mr-0 mt-5">Simpan</button>
                    
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'

export default {
    components: {
        AuthenticatedLayout,
        Head,
    },
    data() {
        return {
            form: this.$inertia.form(this.general),
        }
    },
    props: {
        general: Object,
    },
    methods: {
        saveGeneral() {
            this.form.post(route('dashboard.index'), {
                onSuccess: (page) => {
                    this.$swal('Berhasil Menyimpan', page.props.flash.message, 'success');
                },
                onError: (message) => {
                    this.$swal('Gagal menyimpan pengaturan','silahkan cek kembali form pengaturan yang anda isi','error');
                }
            });
        },
    }
}
</script>

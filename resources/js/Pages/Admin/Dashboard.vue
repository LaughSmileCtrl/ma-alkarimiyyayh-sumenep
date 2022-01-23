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
                    <input type="text" class="input input-primary bg-gray-100 focus:bg-white w-full" />
                    <label for="" class="text-lg mr-3">Jumlah Siswa </label>
                    <input type="text" class="input input-primary bg-gray-100 focus:bg-white w-full" />
                    <label for="" class="text-lg mr-3">Jumlah Alumni </label>
                    <input type="text" class="input input-primary bg-gray-100 focus:bg-white w-full" />
                    <label for="" class="text-lg mr-3 mt-7">Nomor Whatsapp</label>
                    <input type="text" class="input input-primary bg-gray-100 focus:bg-white w-full mt-7" />
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
    methods: {
        saveGeneral() {
            this.$swal({
                text: 'Pengaturan tersimpan', 
                icon: 'success',
                showCloseButton: true,
            });
        },
        destroyTeachers() {
            this.$swal({
                title: "Anda yakin?",
                text: "Anda akan menghapus semua guru?",
                icon: "warning",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                confirmButtonColor: '#ef4444',
                cancelButtonText: "Tidak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    this.$swal({
                        title: "Anda yakin?",
                        text: "Apakah anda benar-benar yakin akan menghapus semua guru?",
                        icon: "question",
                        showCloseButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Ya, hapus",
                        confirmButtonColor: '#ef4444',
                        cancelButtonText: "Tidak",
                        reverseButtons: true,
                    }).then((result) => {
                        if (result.isConfirmed) {                            
                            this.$swal({
                                text: 'Tersimpan', 
                                icon: 'success',
                                showCloseButton: true,
                            });
                        }
                    });
                }
            });
        },
        uploadTeacherList() {
            this.$swal({
                title: 'Pilih File CSV',
                input: 'file',
                inputAttributes: {
                    'accept': 'text/csv',
                    'aria-label': 'Unggah file CSV guru'
                },
                confirmButtonText: 'Simpan',
                showCloseButton: true,
            }).then(result => {
                if(result.value != null) {
                    // this.$inertia.post(route('voters.get-csv'), {
                    //     voters: result.value,
                    // }, {
                    //     onError: errors => {
                    //         this.$swal(errors.voters, '', 'error');
                    //     },
                    //     onSuccess: page => {
                    //         this.$swal(page.props.flash.message, '', 'success');
                    //         this.$inertia.reload({ only: ['voters'] })
                    //     }
                    // });
                }
            });
        }
    }
}
</script>

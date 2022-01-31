<template>
    <Head title="Pengaturan PPDB" />

    <AuthenticatedLayout>
        <template #header>
            Pengaturan PPDB
        </template>

        <div class="w-full flex flex-col justify-end gap-10 xl:w-1/2">
            <div class="border shadow-inner shadow-gray-700/60 rounded-3xl w-full h-fit p-7">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tanggal Buka</span>
                    </label> 
                    <input v-model="form.open" type="date" class="input input-primary input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tanggal Tutup</span>
                    </label> 
                    <input v-model="form.close" type="date" class="input input-primary input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tanggal Pengumuman</span>
                    </label> 
                    <input v-model="form.announcement" type="date" class="input input-primary input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">URL pengumuman</span>
                    </label> 
                    <input v-model="form.announcement_url" type="text" class="input input-primary input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Brosur</span>
                    </label> 
                    <input @input="form.image = $event.target.files[0]" type="file" accept="image/*" class="">
                </div>
                <div class="ml-auto mr-0 mt-3 w-fit">
                    <button @click="saveSetting" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <div class="border shadow-inner shadow-gray-700/60 rounded-3xl w-full h-fit p-7">
                <div class="grid grid-cols-2 gap-y-3 gap-x-1">
                    <p class="text-gray-600">Expor ke CSV</p>
                    <a :href="route('ppdb-admin.export-all')" target="_blank" class="btn btn-primary"><i class="fas fa-cloud-download-alt"></i> &nbsp; Unduh File</a>
                    <p class="text-gray-600">Hapus Semua Pendaftar</p>
                    <button @click="deleteAll" class="btn btn-error btn-outline"><i class="fas fa-trash"></i> &nbsp; Hapus Semua</button>
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
            form: this.$inertia.form(this.setting),
        }
    },
    props: {
        setting: Object,
    },
    methods: {
        saveSetting() {
            this.form.post(route('ppdb-setting.index'), {
                onSuccess: (page) => {
                    this.$swal('Berhasil Menyimpan', page.props.flash.message, 'success');
                },
                onError: (message) => {
                    this.$swal('Gagal menyimpan pengaturan','silahkan cek kembali form pengaturan yang anda isi','error');
                }
            })
        },
        deleteAll() {
            this.$swal({
                title: "Peringatan",
                text: `Anda akan menghapus semua data pendaftar`,
                icon: "warning",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Lanjut",
                confirmButtonColor: '#fbbf24',
                cancelButtonText: "Tidak",
            }).then((result) => {
                if (result.isConfirmed) { 
                    this.$swal({
                        title: "Anda yakin?",
                        text: `Apakah anda yakin akan menghapus semua data pendaftar?`,
                        icon: "question",
                        showCloseButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Ya, hapus",
                        confirmButtonColor: '#ef4444',
                        cancelButtonText: "Tidak",
                    }).then((result) => {
                        if (result.isConfirmed) { 
                            this.$inertia.delete(route('ppdb-admin.destroy-all'), {
                                onSuccess: (page) => {
                                    this.$swal('Berhasil Terhapus', page.props.flash.message, 'success');
                                },
                                onError: (message) => {
                                    this.$swal('Gagal Menghapus', message, 'error')

                                }
                            });
                        }
                    });
                }
            });
        }
    }

}
</script>

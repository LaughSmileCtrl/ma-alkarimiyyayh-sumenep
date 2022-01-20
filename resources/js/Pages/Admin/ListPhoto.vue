<template>
    <Head :title="title" />

    <AuthenticatedLayout>
        <template #header>
            {{ title }}
        </template>

        <div class="w-full ">
            <div class="mb-3 flex flex-col jastify-end gap-x-5 gap-y-1">
                <div class="flex flex-wrap gap-x-5">
                    <button @click="addData" class="btn btn-primary">Tambah</button>
                    <select @change="query(photos.path)" v-model="yearSelected" class="select select-bordered select-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0">
                        <option value="" disabled="disabled" selected="selected">Pilih Tahun</option>
                        <option v-for="year in years" :key="year">{{ year }}</option>
                    </select>
                    <input @keyup="query(photos.path)" v-model="searchQuery" type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full" placeholder="Cari" />
                </div>
                <div class="flex justify-end gap-x-3 ml-auto mr-0">
                    <div class="w-36 md:w-56">
                        <div v-if="yearSelected" class="badge text-xs">
                        {{ yearSelected }} <button @click="removeYearSelected" class="btn-ghost btn-xs"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="w-36 md:w-56">
                        <div v-if="searchQuery" class="badge text-xs">
                        {{ searchQuery }} <button @click="removeSearchQuery" class="btn-ghost btn-xs"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-x-scroll h-fit overflow-y-hidden">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th></th> 
                            <th></th> 
                            <th>Tanggal Unggah</th> 
                            <th>Nama Dokumen</th> 
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="(photo, i) in photos.data" :key="i">
                            <th>{{ photos.from + i }}</th> 
                            <td>
                                <div class="w-16 h-16 rounded">
                                    <img :src="'/images/photo/'+photo.file" :alt="photo.title">
                                </div>
                            </td>
                            <td>
                                {{
                                    new Date(photo.created_at).toLocaleString("ID-id", {
                                        timezone: "Asia/Jakarta",
                                        weekday: 'long', 
                                        year: 'numeric', 
                                        month: 'long', 
                                        day: 'numeric',
                                        hour12: false,
                                        hour: 'numeric',
                                        minute: 'numeric',
                                        second: 'numeric',
                                    })
                                }}
                            </td>
                            <td>{{ photo.title }}</td>
                            <td>
                                <div class="flex flex-row gap-2">
                                    <div data-tip="lihat detail" class="tooltip tooltip-bottom">
                                        <button class="btn btn-accent btn-sm" @click="showDetail(photo)"><i class="fas fa-info"></i></button>
                                    </div>
                                    <div data-tip="edit" class="tooltip tooltip-bottom">
                                        <button @click="editData(photo)" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <div data-tip="hapus" class="tooltip tooltip-bottom">
                                        <button @click="deleteData(photo)" class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <Pagination :links="photos.links" @changePage="query" />
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import Pagination from '@/Components/Pagination.vue'

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Link,
        Pagination
    },
    props: {
        title: '',
        fileFormat: '',
        photos: Object,
        years: Array,
        errors: Object,
    },
    data() {
        return {
            yearSelected: '',
            searchQuery: '',
        }
    },
    methods: {
        removeYearSelected() {
            this.yearSelected = ''
            this.query(this.photos.path);
        },
        removeSearchQuery() {
            this.searchQuery = ''
            this.query(this.photos.path);
        },
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery, year: this.yearSelected}, {only: ['photos'], preserveState: true,});
        },
        addData() {
            this.$swal({
                title: 'Tambah File Baru',
                html: this.formHtml(),
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                showCloseButton: true,
                showCancelButton: true,
                reverseButtons: true,
                confirmButtonColor: '#2ECC71',
                preConfirm: () => {
                    return [
                        document.getElementById('name').value,
                        document.getElementById('file').files[0],
                    ]
                }
            }).then(value => {
                this.$inertia.post(this.photos.path, {
                    title: value.value[0],
                    file: value.value[1],
                }, {
                    onSuccess: (page) => {
                        this.$swal('Berhasil Menyimpan', page.props.flash.message, 'success');
                    },
                    onError: (message) => {
                        this.$swal('Gagal menyimpan', this.errors, 'error')

                    }
                });
            });
        },
        editData(photo) {
            this.$swal({
                title: 'Ubah Data',
                html: this.formHtml(photo),
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                showCloseButton: true,
                showCancelButton: true,
                reverseButtons: true,
                confirmButtonColor: '#2ECC71',
                preConfirm: () => {
                    return [
                        document.getElementById('name').value,
                        document.getElementById('file').files[0],
                    ]
                }
            }).then(value => {
                this.$inertia.post(this.photos.path+'/' + photo.id, {
                    '_method': 'patch',
                    title: value.value[0],
                    file: value.value[1],
                }, {
                    onSuccess: (page) => {
                        this.$swal('Berhasil mengubah', page.props.flash.message, 'success');
                    },
                    onError: (message) => {
                        this.$swal('Gagal mengubah', this.errors, 'error')

                    }
                });
            });
        },
        showDetail(photo) {
            this.$swal({
                title: 'Nama file',
                html: `
                    <img class="w-60 rounded-md mx-auto" src="/images/photo/${photo.file}" alt="${photo.title}">
                    <div class="text-center mt-3">
                        Tanggal upload: ${ new Date(photo.created_at).toLocaleString("ID-id", {
                                        timezone: "Asia/Jakarta",
                                        weekday: 'long', 
                                        year: 'numeric', 
                                        month: 'long', 
                                        day: 'numeric',
                                        hour12: false,
                                        hour: 'numeric',
                                        minute: 'numeric',
                                        second: 'numeric',
                                    })}
                    </div>
                `,
                confirmButtonText: 'Tutup',
                showCloseButton: true,
            });
        },
        deleteData(photo) {
            this.$swal({
                title: "Anda yakin?",
                text: `Apakah anda benar-benar yakin akan ${photo.title} ini?`,
                icon: "question",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                confirmButtonColor: '#ef4444',
                cancelButtonText: "Tidak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {    
                    this.$inertia.delete(this.photos.path+'/' + photo.id, {
                        onSuccess: (page) => {
                            this.$swal('Berhasil Terhapus', page.props.flash.message, 'success');
                        },
                        onError: (message) => {
                            this.$swal('Gagal Menghapus', this.errors, 'error')

                        }
                    }); 
                }
            });
        },
        formHtml(photo = null) {
            var title = (photo) ? photo.title : '';

            var name = `
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Nama File</span>
                    </label> 
                    <input id="name" value="${title}" type="text" placeholder="(default nama asli file)" class="input input-primary input-bordered w-full">
                </div>`
                
            var file = `
                <div class="form-control mx-1 mb-1">
                    <label for="file" class="label">
                        <span class="label-text md:text-lg">File</span>
                    </label>
                    <input id="file" type="file" accept="${this.fileFormat}" class="">
                </div>`

            return name + file;
        }
    }
}
</script>

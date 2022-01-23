<template>
    <Head :title="title" />

    <AuthenticatedLayout>
        <template #header>
            {{ title }}
        </template>

        <div class="w-full flex flex-col jastify-end gap-5">
            <div class="mb-3 flex flex-col jastify-end gap-x-5 gap-y-1">
                <div class="flex flex-wrap gap-x-5">
                    <button @click="addData" class="btn btn-primary">Tambah</button>
                    <input @keyup="query(files.path)" v-model="searchQuery" type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0" placeholder="Cari" />
                </div>
                <div class="flex justify-end gap-x-3 ml-auto mr-0">
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
                            <th>Tanggal Unggah</th> 
                            <th>Nama Dokumen</th> 
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="(file, i) in files.data" :key="i">
                            <th>{{ files.from + i }}</th> 
                            <td>
                                {{
                                    new Date(file.created_at).toLocaleString("ID-id", {
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
                            <td>{{ file.title }}</td>
                            <td>
                                <div class="flex flex-row gap-2">
                                    <div data-tip="unduh" class="tooltip tooltip-bottom">
                                        <a :href="files.path+'/' + file.id" target="_blank" class="btn btn-accent btn-sm"><i class="fas fa-cloud-download-alt"></i></a>
                                    </div>
                                    <div data-tip="edit" class="tooltip tooltip-bottom">
                                        <button @click="editData(file)" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <div data-tip="hapus" class="tooltip tooltip-bottom">
                                        <button @click="deleteData(file)" class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <Pagination :links="files.links" @changePage="query" />
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
        nameOption: {
            default: true,
            type: Boolean,
        },
        fileFormat: '',
        files: Object,
        years: Array,
        errors: Object,
    },
    data() {
        return {
            searchQuery: '',
        }
    },
    methods: {
        removeSearchQuery() {
            this.searchQuery = ''
            this.query(this.files.path);
        },
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery}, {only: ['files'], preserveState: true,});
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
                preConfirm: () => {
                    return [
                        document.getElementById('name').value,
                        document.getElementById('file').files[0],
                    ]
                }
            }).then(value => {
                this.$inertia.post(this.files.path, {
                    title: (value.value[0] != '') ? value.value[0] : document.getElementById('file').value.split('\\')[2],
                    file: value.value[1],
                    isPublic: value.value[2],
                }, {
                    onSuccess: (page) => {
                        this.$swal('Berhasil Menyimpan', page.props.flash.message, 'success');
                    },
                    onError: (message) => {
                        this.$swal('Gagal mengubah data',
                                `<ul class="text-red-500 ">
                                    <li>${(this.errors.title) ? this.errors.title : '' }</li>
                                    <li>${(this.errors.file) ? this.errors.file : '' }</li>
                                </ul>`,
                                'error'
                            )

                    }
                });
            });
        },
        editData(file) {
            this.$swal({
                title: 'Ubah Data',
                html: this.formHtml(file),
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                showCloseButton: true,
                showCancelButton: true,
                reverseButtons: true,
                confirmButtonColor: '#2ECC71',
                preConfirm: () => {
                    var visibility = (this.visibilityOption)
                        ? document.getElementById('visibility').value
                        : null;

                    return [
                        document.getElementById('name').value,
                        document.getElementById('file').files[0],
                        visibility,
                    ]
                }
            }).then(value => {
                this.$inertia.post(this.files.path+'/' + file.id, {
                    '_method': 'patch',
                    title: value.value[0],
                    file: value.value[1],
                    isPublic: value.value[2],
                }, {
                    onSuccess: (page) => {
                        this.$swal('Berhasil mengubah', page.props.flash.message, 'success');
                    },
                    onError: (message) => {
                        this.$swal('Gagal mengubah data',
                                `<ul class="text-red-500 ">
                                    <li>${(this.errors.title) ? this.errors.title : '' }</li>
                                    <li>${(this.errors.file) ? this.errors.file : '' }</li>
                                </ul>`,
                                'error'
                            )

                    }
                });
            });
        },
        deleteData(file) {
            this.$swal({
                title: "Anda yakin?",
                text: `Apakah anda benar-benar yakin akan menghapus ${file.title}?`,
                icon: "question",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                confirmButtonColor: '#ef4444',
                cancelButtonText: "Tidak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {                            
                    this.$inertia.delete(this.files.path+'/' + file.id, {
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
        formHtml(file = null) {
            var nameHtml = `
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Nama File</span>
                    </label> 
                    <input id="name" value="${(file) ? file.title : ''}" type="text" placeholder="(default nama asli file)" class="input input-primary input-bordered w-full">
                </div>`
                
            var fileHtml = `
                <div class="form-control mx-1 mb-1">
                    <label for="file" class="label">
                        <span class="label-text md:text-lg">File</span>
                    </label>
                    <input id="file" type="file" accept="${this.fileFormat}" class="">
                </div>`

            var result = (this.nameOption) ? nameHtml : ''
            result += fileHtml

            return result;
        }
    }
}
</script>

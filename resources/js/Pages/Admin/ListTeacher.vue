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
                    <input @keyup="query(teachers.path)" v-model="searchQuery" type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0" placeholder="Cari" />
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
                            <th></th> 
                            <th>Nama</th> 
                            <th>Mata Pelajaran</th> 
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="(teacher, i) in teachers.data" :key="i">
                            <th>{{ teachers.from + i }}</th> 
                            <td>
                                <div class="w-16 h-16 rounded">
                                    <img :src="'/images/teacher/'+teacher.photo" :alt="teacher.name" class="w-16 h-16 object-contain">
                                </div>
                            </td>
                            <td>{{ teacher.name }}</td>
                            <td>{{ teacher.subject }}</td>
                            <td>
                                <div class="flex flex-row gap-2">
                                    <div data-tip="edit" class="tooltip tooltip-bottom">
                                        <button @click="editData(teacher)" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <div data-tip="hapus" class="tooltip tooltip-bottom">
                                        <button @click="deleteData(teacher)" class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <Pagination :links="teachers.links" @changePage="query" />
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
        teachers: Object,
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
            this.query(this.teachers.path);
        },
        removeSearchQuery() {
            this.searchQuery = ''
            this.query(this.teachers.path);
        },
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery, year: this.yearSelected}, {only: ['teachers'], preserveState: true,});
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
                        document.getElementById('subject').value,
                        document.getElementById('file').files[0],
                    ]
                }
            }).then(value => {
                this.$inertia.post(this.teachers.path, {
                    name: value.value[0],
                    subject: value.value[1],
                    photo: value.value[2],
                }, {
                    onSuccess: (page) => {
                        this.$swal('Berhasil Menyimpan', page.props.flash.message, 'success');
                    },
                    onError: (message) => {
                        this.$swal('Gagal mengubah data',
                                `<ul class="text-red-500 ">
                                    <li>${(this.errors.name) ? this.errors.name : '' }</li>
                                    <li>${(this.errors.subject) ? this.errors.subject : '' }</li>
                                    <li>${(this.errors.file) ? this.errors.file : '' }</li>
                                </ul>`,
                                'error'
                            )
                    }
                });
            });
        },
        editData(teacher) {
            this.$swal({
                title: 'Ubah Data',
                html: this.formHtml(teacher),
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                showCloseButton: true,
                showCancelButton: true,
                reverseButtons: true,
                confirmButtonColor: '#2ECC71',
                preConfirm: () => {
                    return [
                        document.getElementById('name').value,
                        document.getElementById('subject').value,
                        document.getElementById('file').files[0],
                    ]
                }
            }).then(value => {
                this.$inertia.post(this.teachers.path+'/' + teacher.id, {
                    '_method': 'patch',
                    name: value.value[0],
                    subject: value.value[1],
                    photo: value.value[2],
                }, {
                    onSuccess: (page) => {
                        this.$swal('Berhasil mengubah', page.props.flash.message, 'success');
                    },
                    onError: (message) => {
                        this.$swal('Gagal mengubah data',
                                `<ul class="text-red-500 ">
                                    <li>${(this.errors.name) ? this.errors.name : '' }</li>
                                    <li>${(this.errors.subject) ? this.errors.subject : '' }</li>
                                    <li>${(this.errors.file) ? this.errors.file : '' }</li>
                                </ul>`,
                                'error'
                            )

                    }
                });
            });
        },
        showDetail(teacher) {
            this.$swal({
                title: 'Nama file',
                html: `
                    <img class="w-60 rounded-md mx-auto" src="/images/teacher/${teacher.file}" alt="${teacher.title}">
                    <div class="text-center mt-3">
                        Tanggal upload: ${ new Date(teacher.created_at).toLocaleString("ID-id", {
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
        deleteData(teacher) {
            this.$swal({
                title: "Anda yakin?",
                text: `Apakah anda benar-benar yakin akan ${teacher.title} ini?`,
                icon: "question",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                confirmButtonColor: '#ef4444',
                cancelButtonText: "Tidak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {    
                    this.$inertia.delete(this.teachers.path+'/' + teacher.id, {
                        onSuccess: (page) => {
                            this.$swal('Berhasil Terhapus', page.props.flash.message, 'success');
                        },
                        onError: (message) => {
                            this.$swal('Gagal Menghapus', message, 'error')

                        }
                    }); 
                }
            });
        },
        formHtml(teacher = null) {
            var name = (teacher) ? teacher.name : '';
            var subject = (teacher) ? teacher.subject : '';

            return `
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Nama</span>
                    </label> 
                    <input id="name" value="${name}" type="text" placeholder="nama" class="input input-primary input-bordered w-full">
                </div>
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Pelajaran</span>
                    </label> 
                    <input id="subject" value="${subject}" type="text" placeholder="mata pelajaran" class="input input-primary input-bordered w-full">
                </div>
                <div class="form-control mx-1 mb-1">
                    <label for="file" class="label">
                        <span class="label-text md:text-lg">File</span>
                    </label>
                    <input id="file" type="file" accept="${this.fileFormat}" class="">
                </div>`
        }
    }
}
</script>

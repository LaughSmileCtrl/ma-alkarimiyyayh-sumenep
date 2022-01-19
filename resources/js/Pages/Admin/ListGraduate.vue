<template>
    <Head :title="title" />

    <AuthenticatedLayout>
        <template #header>
            {{ title }}
        </template>

        <div class="w-full">
            <div class="mb-3 flex flex-col jastify-end gap-x-5 gap-y-1">
                <div class="flex flex-wrap gap-x-5">
                    <button @click="addData" class="btn btn-primary">Tambah</button>
                    <select @change="query(graduates.path)" v-model="yearSelected" class="select select-bordered select-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0">
                        <option value="" disabled="disabled" selected="selected">Pilih Tahun</option>
                        <option v-for="year in years" :key="year">{{ year }}</option>
                    </select>
                    <input @keyup="query(graduates.path)" v-model="searchQuery" type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full" placeholder="Cari" />
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
                            <th>Tahun Lulus</th> 
                            <th>NISN</th> 
                            <th>Nama</th> 
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="(graduate, i) in graduates.data" :key="i">
                            <th>{{ graduates.from + i }}</th> 
                            <td>{{ graduate.year}}</td>
                            <td>{{ graduate.nisn }}</td>
                            <td>{{ graduate.name }}</td>
                            <td>
                                <div class="flex flex-row gap-2">
                                    <div data-tip="edit" class="tooltip tooltip-bottom">
                                        <button @click="editData(graduate)" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <div data-tip="hapus" class="tooltip tooltip-bottom">
                                        <button @click="deleteData(graduate)" class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
             <Pagination :links="graduates.links" @changePage="query" />
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3'
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import Pagination from '@/Components/Pagination.vue'

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Pagination,
    },
    data() {
        return {
            searchQuery: '',
            yearSelected: '',
        }
    },
    props: {
        title: {
            default: ''
        },
        fileFormat: {
            default: ''
        },
        years:  Array,
        graduates: Object,
        errors: Object,
    },
    methods: {
        removeYearSelected() {
            this.yearSelected = ''
            this.query(this.graduates.path);
        },
        removeSearchQuery() {
            this.searchQuery = ''
            this.query(this.graduates.path);
        },
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery, year: this.yearSelected}, {only: ['graduates'], preserveState: true,});
        },
        addData() {
            this.$swal({
                title: 'Tambah File Baru',
                input: 'file',
                inputAttributes: {
                    'accept': 'text/csv',
                    'aria-label': 'Unggah file CSV Alumni'
                },
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                showCancelButton: true,
                reverseButtons: true,
            }).then(result => {
                if(result.value != null) {
                    this.$inertia.post(this.graduates.path, {file: result.value}, {
                        onSuccess: (page) => {
                            this.$swal('Berhasil Menambah Alumni', page.props.flash.message, 'success');
                        },
                        onError: () => {
                            var message = '<ul class="list-disc text-red-500 text-sm">'
                            Object.values(this.errors).forEach(value => {
                                message += '<li>'+value+'</li>';
                            });

                            message += '</ul>'

                            this.$swal({
                                title: 'Gagal Menambah Alumni',
                                icon: 'error',
                                html: message,
                            })
                        }
                    })
                }
            });
        },
        editData(graduate) {
            this.$swal({
                title: 'Ubah Data Alumni',
                html:
                `<div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">NISN</span>
                    </label> 
                    <input id="nisn" type="text" value="${graduate.nisn}" placeholder="NISN" class="input input-primary input-bordered w-full">
                </div>
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Nama</span>
                    </label> 
                    <input id="name" type="text" value="${graduate.name}" placeholder="nama" class="input input-primary input-bordered w-full">
                </div>
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Tahun Lulus</span>
                    </label> 
                    <input id="year" type="text" value="${graduate.year}" placeholder="Lulus" class="input input-primary input-bordered w-full">
                </div>
                `,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                showCloseButton: true,
                showCancelButton: true,
                reverseButtons: true,
                confirmButtonColor: '#2ECC71',
            }).then((value) => {
                if (value.isConfirmed) {
                    this.$inertia.patch(this.graduates.path+'/'+graduate.id, {
                        name: document.getElementById('name').value,
                        nisn: document.getElementById('nisn').value,
                        year: document.getElementById('year').value,
                    }, {
                        onSuccess: (page) => {
                            this.$swal('Berhasil Mengubah', page.props.flash.message, 'success');
                        },
                        onError: () => {
                            this.$swal('Gagal mengubah data',
                                `<ul class="text-red-500 ">
                                    <li>${(this.errors.nisn) ? this.errors.nisn : '' }</li>
                                    <li>${(this.errors.name) ? this.errors.name : '' }</li>
                                    <li>${(this.errors.year) ? this.errors.year : '' }</li>
                                </ul>`,
                                'error'
                            )
                        }
                    })
                }
            })
        },
        deleteData(graduate) {
            this.$swal({
                title: "Anda yakin?",
                text: `Apakah anda benar-benar yakin akan menghapus ${graduate.name}?`,
                icon: "question",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                confirmButtonColor: '#ef4444',
                cancelButtonText: "Tidak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {                            
                    this.$inertia.delete(this.graduates.path+'/'+graduate.id, {
                        onSuccess: (page) => {
                            this.$swal('Berhasil Menghapus', page.props.flash.message, 'success');
                        },
                        onError: () => {
                            this.$swal('Gagal menghapus data','','error'
                            )
                        }
                    })
                }
            });
        }
    },
}
</script>

<template>
    <Head :title="title" />

    <AuthenticatedLayout>
        <template #header>
            {{ title }}
        </template>

        <div class="w-full flex flex-col jastify-end gap-5">
            <div class="flex flex-wrap gap-5">
                <button @click="addData" class="btn btn-primary">Tambah</button>
                <select class="select select-bordered select-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0">
                    <option disabled="disabled" selected="selected">Pilih Tahun</option> 
                    <option>2020</option> 
                    <option>2019</option> 
                    <option>2018</option>
                </select>
                <input type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full" placeholder="Cari">

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
                        <tr v-for="i in 10" :key="i">
                            <th>{{ i }}</th> 
                            <td>2022</td>
                            <td>00000000</td>
                            <td>Quality Control Specialist</td>
                            <td>
                                <div class="flex flex-row gap-2">
                                    <div data-tip="edit" class="tooltip tooltip-bottom">
                                        <button @click="editData" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></button>
                                    </div>
                                    <div data-tip="hapus" class="tooltip tooltip-bottom">
                                        <button @click="deleteData" class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Link,
    },
    props: {
        title: '',
        nameOption: {
            default: true,
            type: Boolean,
        },
        visibilityOption: {
            default: true,
            type: Boolean,
        },
        fileFormat: '',
    },
    methods: {
        addData() {
            this.$swal({
                title: 'Tambah File Baru',
                html: this.formHtml,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                
                showCancelButton: true,
                reverseButtons: true,
                preConfirm: () => {
                    var visibility = (this.visibilityOption)
                        ? document.getElementById('visibility').value
                        : null;

                    return [
                        document.getElementById('name').value,
                        document.getElementById('file').value,
                        visibility,
                    ]
                }
            }).then(value => {
                console.log(value.value);
            });
        },
        editData() {
            this.$swal({
                title: 'Ubah Data Alumni',
                html:
                `<div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">NISN</span>
                    </label> 
                    <input id="nisn" type="text" value=" + student.nisn + " placeholder="NISN" class="input input-primary input-bordered w-full">
                </div>
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Nama</span>
                    </label> 
                    <input id="name" type="text" value=" + student.name + " placeholder="nama" class="input input-primary input-bordered w-full">
                </div>
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Tahun Lulus</span>
                    </label> 
                    <input id="year" type="text" value=" + student.year + " placeholder="Lulus" class="input input-primary input-bordered w-full">
                </div>
                `,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
                showCloseButton: true,
                showCancelButton: true,
                reverseButtons: true,
                confirmButtonColor: '#2ECC71',
                preConfirm: () => {
                    return [
                        document.getElementById('name').value,
                        document.getElementById('nisn').value,
                        document.getElementById('year').value,
                    ]
                }
            }).then(value => {
                console.log(value.value);
            });
        },
        deleteData() {
            this.$swal({
                title: "Anda yakin?",
                text: "Apakah anda benar-benar yakin akan menghapus data ini?",
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
                        text: 'data terhapus', 
                        icon: 'success',
                        showCloseButton: true,
                    });
                }
            });
        }
    },
    computed: {
        formHtml() {
            var name = `
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Nama File</span>
                    </label> 
                    <input id="name" type="text" placeholder="(default nama asli file)" class="input input-primary input-bordered w-full">
                </div>`
                
            var file = `
                <div class="form-control mx-1 mb-1">
                    <label for="file" class="label">
                        <span class="label-text md:text-lg">File</span>
                    </label>
                    <input id="file" type="file" accept="` + this.fileFormat + `" class="">
                </div>`
            
            var option = `
                <div class="form-control mx-1 mb-1">
                    <label class="label">
                        <span class="label-text md:text-lg">Visibilitas</span>
                    </label> 
                    <select id="visibility" class="select select-bordered select-primary w-full">
                        <option disabled="disabled" selected="selected">Pilih Visibilitas</option> 
                        <option value="1">Publik</option> 
                        <option value="0">Privat</option> 
                    </select>
                </div>
            `

            var result = (this.nameOption) ? name : ''
            result += file
            result += (this.visibilityOption) ? option : ''

            return result;
        }
    }
}
</script>

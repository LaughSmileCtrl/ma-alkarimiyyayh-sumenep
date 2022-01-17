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
                            <th></th> 
                            <th>Tanggal Unggah</th> 
                            <th>Nama Dokumen</th> 
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="i in 10" :key="i">
                            <th>{{ i }}</th> 
                            <td>
                                <div class="w-12 h-12 mask mask-squircle">
                                    <img src="https://daisyui.com/tailwind-css-component-profile-2@56w.png" alt="image">
                                </div>
                            </td>
                            <td>03 Januari 2022</td> 
                            <td>Quality Control Specialist</td>
                            <td>
                                <div class="flex flex-row gap-2">
                                    <div data-tip="lihat detail" class="tooltip tooltip-bottom">
                                        <button class="btn btn-accent btn-sm" @click="showDetail"><i class="fas fa-info"></i></button>
                                    </div>
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
                title: 'Ubah Data',
                html: this.formHtml,
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
                        document.getElementById('file').value,
                        visibility,
                    ]
                }
            }).then(value => {
                console.log(value.value);
            });
        },
        showDetail() {
            this.$swal({
                title: 'Nama file',
                html: `
                    <img class="w-60 rounded-md mx-auto" src="https://daisyui.com/tailwind-css-component-profile-2@56w.png" alt="image">
                    <div class="text-center mt-3">Tanggal upload: Senin, 03 Januari 2022</div>
                `,
                confirmButtonText: 'Tutup',
                showCloseButton: true,
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

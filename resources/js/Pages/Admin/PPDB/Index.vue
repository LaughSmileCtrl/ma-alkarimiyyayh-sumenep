<template>
    <Head title="PPDB" />

    <AuthenticatedLayout>
        <template #header>
            PPDB
        </template>

        <div class="w-full flex flex-col justify-end gap-5">
            <div class="mb-3 flex flex-col jastify-end gap-x-5 gap-y-1">
                <div class="flex flex-wrap gap-x-5">
                    <input @keyup="query(registrars.path)" v-model="searchQuery" type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0" placeholder="Cari (nama, nisn , nik)" />
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
                            <th>NISN</th> 
                            <th>NIK</th> 
                            <th>Nama</th>
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="(registrar, i) in registrars.data" :key="i">
                            <th>{{ registrars.from + i }}</th> 
                            <td>{{ registrar.nisn }}</td> 
                            <td>{{ registrar.nik }}</td>
                            <td>{{ registrar.name }}</td>
                            <td class="flex flex-row gap-2">
                                <div data-tip="lihat detail" class="tooltip tooltip-bottom">
                                    <Link :href="route('ppdb-admin.show', registrar.id)" class="btn btn-accent btn-sm"><i class="fas fa-info"></i></Link>
                                </div>
                                <div data-tip="edit" class="tooltip tooltip-bottom">
                                    <Link :href="route('ppdb-admin.edit', registrar.id)" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></Link>
                                </div>
                                <div data-tip="hapus" class="tooltip tooltip-bottom">
                                    <button @click="deleteData(registrar)" class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <Pagination :links="registrars.links" @changePage="query" />
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
        Pagination,
    },
    data() {
        return {
            searchQuery: '',
        }
    },
    props: {
        registrars: Object,
    },
    methods: {
        removeSearchQuery() {
            this.searchQuery = ''
            this.query(this.registrars.path);
        },
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery}, {only: ['registrars'], preserveState: true,});
        },
        deleteData(registrar) {
            this.$swal({
                title: "Anda yakin?",
                text: `Apakah anda benar-benar yakin akan menghapus data ${registrar.name}?`,
                icon: "question",
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: "Ya, hapus",
                confirmButtonColor: '#ef4444',
                cancelButtonText: "Tidak",
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {    
                    this.$inertia.delete(this.registrars.path+'/' + registrar.id, {
                        onSuccess: (page) => {
                            this.$swal('Berhasil Terhapus', page.props.flash.message, 'success');
                        },
                        onError: (message) => {
                            this.$swal('Gagal Menghapus', this.errors, 'error')

                        }
                    }); 
                }
            });
        }
    }
}
</script>

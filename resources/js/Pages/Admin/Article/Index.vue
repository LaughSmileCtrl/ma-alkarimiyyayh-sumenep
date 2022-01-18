<template>
    <Head :title="title" />

    <AuthenticatedLayout>
        <template #header>
            {{ title }}
        </template>

        <div class="w-full flex flex-col jastify-end gap-5">
            <div class="flex flex-wrap gap-5">
                <Link :href="create" class="btn btn-primary">Tambah</Link>
                <input @keyup="query(articles.path)" v-model="searchQuery" type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0" placeholder="Cari">

            </div>
            <div class="overflow-x-scroll h-fit overflow-y-hidden">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th></th> 
                            <th>Tanggal Dibuat</th> 
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="(article, i) in articles.data" :key="i">
                            <th>{{ articles.from + i }}</th> 
                            <td>
                                {{
                                    new Date(article.created_at).toLocaleString("ID-id", {
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
                            <td>{{ article.title }}</td>
                            <td>{{ article.author }}</td>
                            <td class="flex flex-row gap-2">
                                <div data-tip="lihat detail" class="tooltip tooltip-bottom">
                                    <a :href="articles.path+'/'+ article.id" target="_blank" class="btn btn-accent btn-sm"><i class="fas fa-external-link-alt"></i></a>
                                </div>
                                <div data-tip="edit" class="tooltip tooltip-bottom">
                                    <Link :href="articles.path+'/' + article.id + '/edit'" class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></Link>
                                </div>
                                <div data-tip="hapus" class="tooltip tooltip-bottom">
                                    <button @click="deleteData(article.id)" class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <Pagination :links="articles.links" @changePage="query" />
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import Pagination from '@/Components/Pagination.vue'

export default {
    data() {
        return {
            searchQuery: '',
        }
    },
    components: {
        AuthenticatedLayout,
        Head,
        Link,
        Pagination,
    },
    props: {
        title: {
            default: 'artikel',
            type: String,
        },
        create: {
            required: true,
        },
        articles: {
            type: Object,
        },
    },
    methods: {
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery}, {only: ['articles'], preserveState: true,});
        },
        deleteData(id) {
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
                    this.$inertia.delete(this.articles.path+'/' + id, {
                        onSuccess: (page) => {
                            this.$swal('Berhasil Terhapus', page.props.flash.message, 'success');
                            this.$inertia.get(this.links.back);
                        },
                        onError: (message) => {
                            this.$swal('Gagal Menghapus', message, 'error')

                        }
                    }); 
                }
            });
        }
    }
}
</script>

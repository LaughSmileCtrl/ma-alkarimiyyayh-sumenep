<template>
    <Head title="Alumni" />

    <AuthenticatedLayout>
        <template #header>
            Alumni
        </template>

        <div class="w-full flex flex-col jastify-end gap-5">
            <div class="flex flex-wrap gap-5">
                <Link :href="route('articles.create')" class="btn btn-primary">Tambah</Link>
                <input type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70 rounded-full ml-auto mr-0" placeholder="Cari">

            </div>
            <div class="overflow-x-scroll h-fit overflow-y-hidden">
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th></th> 
                            <th>Tanggal Dibuat</th> 
                            <th>Judul</th> 
                            <th>Aksi</th> 
                        </tr>
                    </thead> 
                    <tbody>
                        <tr v-for="i in 10" :key="i">
                            <th>{{ i }}</th> 
                            <td>03 Januari 2022</td> 
                            <td>Quality Control Specialist</td>
                            <td class="flex flex-row gap-2">
                                <div data-tip="lihat detail" class="tooltip tooltip-bottom">
                                    <button class="btn btn-accent btn-sm"><i class="fas fa-info"></i></button>
                                </div>
                                <div data-tip="edit" class="tooltip tooltip-bottom">
                                    <button class="btn btn-secondary btn-sm"><i class="fas fa-pen"></i></button>
                                </div>
                                <div data-tip="hapus" class="tooltip tooltip-bottom">
                                    <button class="btn btn-error btn-sm"><i class="fas fa-trash"></i></button>
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
}
</script>

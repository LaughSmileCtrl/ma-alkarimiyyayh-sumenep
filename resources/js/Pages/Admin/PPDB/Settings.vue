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
                    <input type="datetime-local" class="input input-primary input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tanggal Tutup</span>
                    </label> 
                    <input type="datetime-local" class="input input-primary input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Tanggal Pengumuman</span>
                    </label> 
                    <input type="datetime-local" class="input input-primary input-bordered">
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">URL pengumuman</span>
                    </label> 
                    <input type="text" class="input input-primary input-bordered">
                </div>
                <div class="ml-auto mr-0 mt-3 w-fit">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
            <div class="border shadow-inner shadow-gray-700/60 rounded-3xl w-full h-fit p-7">
                <div class="grid grid-cols-2 gap-y-3 gap-x-1">
                    <p class="text-gray-600">Hapus Semua Pendaftar</p>
                    <button class="btn btn-error btn-outline"><i class="fas fa-trash"></i> &nbsp; Hapus Semua</button>
                    <p class="text-gray-600">Expor ke CSV</p>
                    <button class="btn"><i class="fas fa-cloud-download-alt"></i> &nbsp; Unduh File</button>
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
}
</script>

<template>
    <Head title="Data Peserta Didik Baru" />

    <AuthenticatedLayout>
        <template #header>
            Data Peserta Didik Baru
        </template>
        <div class="flex justify-between">
            <Link :href="route('ppdb.index')" class="btn"><i class="fas fa-angle-left"></i> &nbsp; Kembali</Link>
            <button class="btn btn-secondary"><i class="fas fa-print"></i> &nbsp; Cetak PDF</button>
        </div>
        <div class="mx-auto my-14 2xl:px-10">
            <div v-for="i in 3"  :key="i" class="flex flex-col gap-3 my-2 mt-10">
                <h2 class="text-xl font-bold">Data Pribadi</h2>
                <div v-for="j in 6"  :key="j" class="grid grid-cols-2 items-center">
                        <span class="w-full text-lg">Nama Lable yang panjang </span>
                        <span class="w-full text-lg">Nama Lable yang panjang </span>
                </div>
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

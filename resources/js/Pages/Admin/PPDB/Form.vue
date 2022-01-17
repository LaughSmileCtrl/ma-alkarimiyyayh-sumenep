<template>
    <Head title="Edit PPDB" />

    <AuthenticatedLayout>
        <template #header>
            Edit PPDB
        </template>

        <div class="flex justify-between">
            <Link :href="route('ppdb.index')" class="btn"><i class="fas fa-angle-left"></i> &nbsp; Kembali</Link>
        </div>
        <div class="mx-auto my-14 2xl:px-10">
            <div v-for="i in 3"  :key="i" class="flex flex-col gap-3 my-2 mt-10">
                <h2 class="text-xl font-bold">Data Pribadi</h2>
                <div v-for="j in 6"  :key="j" class="grid grid-cols-3 items-center">
                    <div class="">
                        <label for="" class="w-1/3 text-lg">Nama Lable yang panjang </label>
                    </div>
                    <input type="text" class="input input-primary col-span-2">
                </div>
            </div>

            <div class="flex justify-end mb-5 w-full ">
                <button class="btn btn-primary">Simpan</button>
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

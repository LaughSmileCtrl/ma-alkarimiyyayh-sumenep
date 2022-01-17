<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Pendaftaran Peserta Didik Baru
        </h2>
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
    </section>

    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        MainNav,
        Footer,
        Link,
    },
};
</script>
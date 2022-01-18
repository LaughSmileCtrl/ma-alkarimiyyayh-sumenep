<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-8">Data Prestasi</h2>
        <div class="flex gap-5 flex-wrap justify-center">
            <div class="w-56 text-center">
                <BorderGradient mainClassifiy="w-56 h-72 bg-gradient-to-bl from-green-600 to-red-200 p-[2px] rounded-lg mb-2" contentClassify="rounded-lg flex items-center w-full h-full rounded-md bg-gray-100 p-1">
                    <img src="/images/default.png" alt="" class="object-contain rounded-lg">
                </BorderGradient>
                <h2 class="text-lg">Juara 1 Madrasah</h2>
            </div>
            <div class="w-56 text-center">
                <BorderGradient mainClassifiy="w-56 h-72 bg-gradient-to-bl from-green-600 to-red-200 p-[2px] rounded-lg mb-2" contentClassify="rounded-lg flex items-center w-full h-full rounded-md bg-gray-100 p-1">
                    <img src="/images/default.png" alt="" class="object-contain rounded-lg">
                </BorderGradient>
                <h2 class="text-lg">Juara 1 Madrasah</h2>
            </div>
        </div>
    </section>


    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";
import BorderGradient from "@/Components/BorderGradient.vue";

export default {
    components: {
        MainNav,
        Footer,
        BorderGradient,
    },
};
</script>
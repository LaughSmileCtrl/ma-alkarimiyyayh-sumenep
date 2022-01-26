<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12 min-h-screen">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-8">Data Prestasi</h2>
        <div class="flex gap-10 flex-wrap justify-center">
            <div v-for="(achivement, i) in achivements.data" :key="i" class="w-56 text-center">
                <BorderGradient mainClassifiy="bg-gradient-to-bl from-green-600 to-red-200 p-[1px] rounded-lg mb-2" contentClassify="rounded-lg flex items-center w-full h-full rounded-md bg-gray-100 p-1">
                    <img :src="'/images/photo/' + achivement.file" alt="" class="object-contain rounded-lg w-56 h-72 bg-gray-50">
                </BorderGradient>
                <h2 class="text-lg">{{ achivement.title }}</h2>
            </div>
        </div>
        <div class="my-5 w-full">
            <div class="mx-auto w-fit">
                <Pagination :links="achivements.links" @changePage="query" />
            </div>
        </div>
    </section>
    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";
import BorderGradient from "@/Components/BorderGradient.vue";
import Pagination from '@/Components/Pagination.vue'


export default {
    components: {
        MainNav,
        Footer,
        BorderGradient,
        Pagination,
    },
    props: {
        achivements: Object,
    },
    methods: {
        query(url) {
            this.$inertia.get(url, {}, {only: ['achivements'], preserveState: true,});
        },

    }
};
</script>
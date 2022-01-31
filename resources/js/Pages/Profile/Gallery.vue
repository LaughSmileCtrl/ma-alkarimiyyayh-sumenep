<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-36 pb-12 min-h-screen">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Album
        </h2>
       
        <div class="flex gap-10 flex-wrap items-center justify-center">
            <div
                v-for="(photo, i) in photos.data"
                :key="i"
                class="
                    w-56
                    md:w-64
                    lg:w-72
                    h-40
                    md:h-52
                    lg:h-56
                    bg-gray-500
                    rounded-2xl
                    shadow-xl
                    hover:scale-110
                "
            >
                <img
                    :src="'/images/photo/' + photo.file"
                    alt=""
                    class="object-cover h-full w-full rounded-2xl shadow-xl"
                />
                <div
                    class="
                        flex flex-col
                        justify-end
                        h-full
                        w-full
                        p-6
                        text-transparent
                        hover:text-white
                        relative
                        bg-gradient-to-t
                        hover:from-gray-900 hover:to-transparent
                        -mt-40
                        md:-mt-52
                        lg:-mt-56
                        rounded-xl
                    "
                >
                    <h2 class="text-xl">{{ photo.title }}</h2>

                </div>
            </div>
        </div>
        <div class="my-5 w-full">
            <div class="mx-auto w-fit">
                <Pagination :links="photos.links" @changePage="query" />
            </div>
        </div>
    </section>

    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Pagination from '@/Components/Pagination.vue'


export default {
    components: {
        MainNav,
        Footer,
        Link,
        Pagination,
    },
    props: {
        photos: Object,
    },
    methods: {
        query(url) {
            this.$inertia.get(url, {}, {only: ['photos'], preserveState: true,});
        },
    }
};
</script>
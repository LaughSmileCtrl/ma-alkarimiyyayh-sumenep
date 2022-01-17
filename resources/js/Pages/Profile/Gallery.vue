<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Album
        </h2>
       
        <div class="flex gap-6 flex-wrap items-center justify-center">
            <div
                v-for="i in 25"
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
                    src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
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
                    <h2 class="text-xl">ini nama kegiatan</h2>

                </div>
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
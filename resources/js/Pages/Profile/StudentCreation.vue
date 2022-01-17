<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Karya Siswa
        </h2>
        <div
            class="
                flex 
                justify-center
                w-full
                items-center
                mt-4
                mb-16
            "
        >           
            <div class="form-control">
                <input
                    type="text"
                    placeholder="cari karya siswa"
                    class="input input-primary input-bordered w-40 lg:w-80 bg-gray-50"
                />
            </div>
        </div>
        <div class="flex gap-6 flex-wrap items-center justify-center">
            <Link
                v-for="i in 30"
                :key="i"
                :href="route('news-detail')"
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
                        text-white
                        md:text-transparent
                        hover:text-white
                        relative
                        bg-gradient-to-t
                        from-gray-900
                        to-transparent
                        md:from-transparent
                        hover:from-gray-900 hover:to-transparent
                        -mt-40
                        md:-mt-52
                        lg:-mt-56
                        rounded-2xl
                    "
                >
                    <h2 class="text-xl">Ini Judul Berita</h2>
                    <p class="text-xs">Senin, 30 Januari 2020</p>
                    <p class="text-xs mt-2">Admin</p>
                    <p class="text-xs mt-2 text-right">selengkapnya &nbsp;<i class="fas fa-long-arrow-alt-right"></i></p>
                </div>
            </Link>
        </div>
    </section>

    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3"

export default {
    components: {
        MainNav,
        Footer,
        Link,
    },
};
</script>
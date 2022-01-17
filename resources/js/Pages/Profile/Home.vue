<template>
    <section class="bg-gray-900 h-screen max-w-screen">
        <MainNav class="text-white" />

        <HeroCarousel>
            <SwiperSlide>
                <img
                    src="images/hero1.jpg"
                    class="
                        absolute
                        inset-0
                        object-cover object-center
                        w-screen
                        h-screen
                        opacity-40
                    "
                />
                <div class="container relative h-full flex items-center">
                    <div class="text-left text-white">
                        <h2 class="text-4xl lg:text-8xl mb-2">Terpercaya</h2>
                        <p class="text-md lg:text-lg">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Nemo quaerat quo perferendis inventore
                            recusandae nostrum quasi obcaecati voluptatem unde
                            non aspernatur iure cumque tenetur fugit, officiis
                            voluptas veniam, quidem earum!
                        </p>
                    </div>
                </div>
            </SwiperSlide>
            <SwiperSlide>
                <img
                    src="images/hero2.jpg"
                    class="
                        absolute
                        inset-0
                        object-cover object-center
                        w-screen
                        h-screen
                        opacity-40
                    "
                />
                <div class="container relative h-full flex items-center">
                    <div class="text-center text-white">
                        <h2 class="text-4xl lg:text-8xl mb-2">Terpercaya</h2>
                        <p class="text-md lg:text-lg">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Nemo quaerat quo perferendis inventore
                            recusandae nostrum quasi obcaecati voluptatem unde
                            non aspernatur iure cumque tenetur fugit, officiis
                            voluptas veniam, quidem earum!
                        </p>
                    </div>
                </div>
            </SwiperSlide>
        </HeroCarousel>
    </section>
    <section class="container my-14">
        <div class="flex flex-col md:flex-row gap-16 items-center">
            <div class="px-5 w-full flex flex-col">
                <div class="flex flex-row gap-5 mb-5">
                    <h2 class="text-3xl lg:text-5xl self-center">
                        Terakreditasi
                    </h2>
                    <img
                        src="/images/accreditation.png"
                        alt=""
                        class="w-14 lg:w-24"
                    />
                </div>
                <p class="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Est iure eum qui obcaecati eaque dignissimos beatae
                    reiciendis, et adipisci deserunt. Eveniet voluptatibus
                    ratione iure cumque saepe iste, doloremque neque culpa.
                </p>
            </div>
            <img
                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.qRx9wRe6M-FOZ8TUDeht-AHaLU%26pid%3DApi&f=1"
                alt=""
                class="w-52 rounded shadow-xl"
            />
        </div>
    </section>

    <section class="my-16 bg-green-50 py-24 skew-y-6 lg:skew-y-3">
        <div
            class="
                container
                flex flex-col
                md:flex-row
                gap-14
                items-center
                justify-center
                -skew-y-6
                lg:-skew-y-3
            "
        >
            <div class="-mt-28">
                <h2 class="text-2xl text-center my-4">Karya Siswa Terbaru</h2>
                <Link
                    :href="route('news-detail')"
                    class="
                        w-56
                        md:w-72
                        lg:w-80
                        h-44
                        md:h-56
                        lg:h-60
                        bg-gray-500
                        rounded-2xl
                        shadow-xl
                        hover:scale-105
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
                            w-full
                            h-44
                            md:h-56
                            lg:h-60
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
                            -mt-44
                            md:-mt-56
                            lg:-mt-60
                            rounded-2xl
                        "
                    >
                        <h2 class="text-xl">Ini Judul Berita</h2>
                        <p class="text-xs">Senin, 30 Januari 2020</p>
                        <p class="text-xs mt-2">Admin</p>
                        <p class="text-xs mt-2 text-right">
                            selengkapnya &nbsp;<i
                                class="fas fa-long-arrow-alt-right"
                            ></i>
                        </p>
                    </div>
                </Link>
            </div>

            <div class="-mb-16">
                <h2 class="text-2xl text-center my-4">Karya Siswa Terbaru</h2>
                <Link
                    :href="route('news-detail')"
                    class="
                        w-56
                        md:w-72
                        lg:w-80
                        h-44
                        md:h-56
                        lg:h-60
                        bg-gray-500
                        rounded-2xl
                        shadow-xl
                        hover:scale-105
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
                            w-full
                            h-44
                            md:h-56
                            lg:h-60
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
                            -mt-44
                            md:-mt-56
                            lg:-mt-60
                            rounded-2xl
                        "
                    >
                        <h2 class="text-xl">Ini Judul Berita</h2>
                        <p class="text-xs">Senin, 30 Januari 2020</p>
                        <p class="text-xs mt-2">Admin</p>
                        <p class="text-xs mt-2 text-right">
                            selengkapnya &nbsp;<i
                                class="fas fa-long-arrow-alt-right"
                            ></i>
                        </p>
                    </div>
                </Link>
            </div>
        </div>
    </section>

    <section class="container my-16">
        <div
            class="
                flex flex-col
                md:flex-row
                gap-12
                md:gap-36
                items-center
                justify-center
            "
        >
            <div
                class="h-fit w-fit shadow-xl shadow-green-100/60 rounded-lg p-4"
            >
                <div class="pt-2 rounded-md">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-24 w-24 stroke-green-700"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                </div>
                <h2 class="text-center text-4xl mt-4">34</h2>
                <h3 class="text-center text-sm">Jumlah Guru</h3>
            </div>
            <div
                class="h-fit w-fit shadow-xl shadow-green-100/60 rounded-lg p-4"
            >
                <div class="pt-2 rounded-md">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-24 w-24 stroke-green-700"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        />
                    </svg>
                </div>
                <h2 class="text-center text-4xl mt-4">340</h2>
                <h3 class="text-center text-sm">Jumlah Siswa</h3>
            </div>
            <div
                class="h-fit w-fit shadow-xl shadow-green-100/60 rounded-lg p-4"
            >
                <div class="pt-2 rounded-md">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-24 w-24 stroke-green-700"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path
                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                        />
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                        />
                    </svg>
                </div>
                <h2 class="text-center text-4xl mt-4">3400</h2>
                <h3 class="text-center text-sm">Jumlah Alumni</h3>
            </div>
        </div>
    </section>

    <Footer />
</template>

<script>
import { SwiperSlide } from "swiper/vue";
import MainNav from "@/Components/MainNav.vue";
import HeroCarousel from "@/Components/HeroCarousel.vue";
import BorderGradient from "@/Components/BorderGradient.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    data() {
        return {};
    },
    methods: {},
    components: {
        MainNav,
        HeroCarousel,
        SwiperSlide,
        BorderGradient,
        Footer,
        Link,
    },
};
</script>

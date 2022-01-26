<template>
    <section class="bg-green-900 h-screen max-w-screen">
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
                        <h2 class="text-4xl mb-5">
                            Berilmu Amaliyah, Berakhlak Karimiyyah, Bertaqwa
                            Ilahiyah
                        </h2>
                        <p class="text-md lg:text-lg">
                            Kami sangat berkomitmen untuk mencetak Peserta Didik
                            yang cerdas Intelektual, Emosional dan Spiritual.
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
                        object-cover object-left
                        w-screen
                        h-screen
                        opacity-80
                    "
                />
                <div
                    class="
                        container
                        relative
                        w-screen
                        h-full
                        flex
                        items-end
                        lg:items-center
                    "
                >
                    <div
                        class="
                            text-white text-center
                            lg:text-left
                            mx-auto
                            lg:ml-auto lg:-mr-5
                            w-screen
                            lg:w-3/5
                            rounded-xl
                            p-5
                            lg:p-12
                            bg-white
                            backdrop-filter backdrop-blur-lg
                            bg-opacity-20
                        "
                    >
                        <h2 class="text-3xl lg:text-4xl mb-2 lg:mb-8">
                            Madrasah Hebat Bermartabat, Madrasahnya Revolusi 4.0
                        </h2>
                        <p class="text-md lg:text-lg">
                            Yuk lihat kegiatan-kegiatan di Madrasah Aliyah
                            Al-Karimiyyah
                        </p>

                        <div
                            class="
                                w-fit
                                mx-auto
                                lg:mx-0
                                mt-2
                                lg:mt-5
                                pt-10
                                pb-5
                            "
                        >
                            <a
                                class="
                                    px-10
                                    py-3
                                    uppercase
                                    border-2
                                    w-fit
                                    rounded-full
                                    text-white
                                    hover:outline
                                    outline-offset-2
                                    hover:outline-1
                                    outline-gray-300
                                    font-semibold
                                    hover:scale-105
                                    animate-pulse
                                "
                                >video profile &nbsp;
                                <i class="fas fa-angle-double-right"></i
                            ></a>
                        </div>
                    </div>
                </div>
            </SwiperSlide>
            <SwiperSlide>
                <img
                    src="images/hero3.jpg"
                    class="
                        absolute
                        inset-0
                        object-cover object-left
                        w-screen
                        h-screen
                        opacity-70
                    "
                />
                <div
                    class="
                        container
                        relative
                        h-full
                        w-full
                        flex
                        items-end
                        lg:items-center
                    "
                >
                    <div class="text-center text-white w-full">
                        <div
                            class="
                                mx-auto
                                p-6
                                lg:py-12
                                rounded-xl
                                bg-white
                                backdrop-filter backdrop-blur
                                bg-opacity-20
                                w-full
                                lg:w-4/5
                            "
                        >
                            <h2 class="text-4xl mb-5">
                                Yuk Daftar PPDB di MA Al-Karimiyyah
                            </h2>
                            <p class="text-md lg:text-lg">
                                Klik tombol/tautan dibawah ini
                            </p>
                            <div class="w-fit mt-5 mx-auto py-10">
                                <Link
                                    :href="route('ppdb.index')"
                                    class="
                                        px-10
                                        py-3
                                        uppercase
                                        border-2
                                        w-fit
                                        rounded-full
                                        text-white
                                        hover:outline
                                        outline-offset-2
                                        hover:outline-1
                                        outline-gray-300
                                        font-semibold
                                        hover:scale-105
                                        animate-pulse
                                    "
                                    >Daftar &nbsp;
                                    <i class="fas fa-angle-double-right"></i
                                ></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </SwiperSlide>
        </HeroCarousel>
    </section>
    <section class="container my-14">
        <div class="flex flex-col md:flex-row gap-16 items-center">
            <div class="px-5 w-full flex flex-col items-center">
                <div class="flex flex-row gap-5 mb-5">
                    <h2 class="text-3xl lg:text-5xl self-center">
                        Terakreditasi
                    </h2>
                    <img
                        src="/images/accreditation.png"
                        alt=""
                        class="w-16 lg:w-24"
                    />
                </div>
                <p class="">
                    Madrasah Aliyah Al-Karimiyyah telah terakreditasi dengan
                    nilai 91 dengan predikat A, hal tersebut tertuang dalam
                    Sertifikat Akreditasi yang dikeluaran oleh Badan Akreditasi
                    Nasional Sekolah/Madrasah (BAN-SM) Nomor :
                    1179/BAN-SM/SK/2021 ditetapkan di Jakarta pada tanggal 16
                    November 2021. Pencapaian ini merupakan salah satu bukti
                    bahwa MA Al-Karimiyyah selalu mengembangkan kualitas baik
                    dari Manajemen Madrasah, Pendidikan Madrasah dan semua hal
                    yang berkaitan dengan Tata Kelola Madrasah.
                </p>
            </div>
            <img
                src="/images/akreditasi.png"
                alt=""
                class="w-96 rounded shadow-xl"
            />
        </div>
    </section>

    <section
        v-if="news || student_creation"
        class="my-16 bg-green-50 py-36 skew-y-6 lg:skew-y-3"
    >
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
            <div v-if="news" class="-mt-28">
                <h2 class="text-2xl text-center my-4">Berita Terbaru</h2>
                <Link
                    :href="route('news.show', news.id)"
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
                        :src="'/images/article/' + news.image"
                        alt=""
                        class="
                            object-cover
                            w-56
                            md:w-72
                            lg:w-80
                            h-44
                            md:h-56
                            lg:h-60
                            rounded-2xl
                            shadow-xl
                            bg-white
                        "
                    />
                    <div
                        class="
                            flex flex-col
                            justify-end
                            w-56
                            md:w-72
                            lg:w-80
                            h-44
                            md:h-56
                            lg:h-60
                            p-6
                            text-white
                            relative
                            bg-gradient-to-t
                            from-gray-900
                            to-transparent
                            -mt-44
                            md:-mt-56
                            lg:-mt-60
                            rounded-2xl
                        "
                    >
                        <h2 class="text-xl line-clamp-2">{{ news.title }}</h2>
                        <p class="text-xs">
                            {{
                                new Date(news.created_at).toLocaleString(
                                    "ID-id",
                                    {
                                        timezone: "Asia/Jakarta",
                                        weekday: "long",
                                        year: "numeric",
                                        month: "long",
                                        day: "numeric",
                                    }
                                )
                            }}
                        </p>
                        <p class="text-xs mt-2">{{ news.author }}</p>
                        <p class="text-xs mt-2 text-right">
                            selengkapnya &nbsp;<i
                                class="fas fa-long-arrow-alt-right"
                            ></i>
                        </p>
                    </div>
                </Link>
            </div>

            <div v-if="student_creation" class="-mb-16">
                <h2 class="text-2xl text-center my-4">Karya Siswa Terbaru</h2>
                <Link
                    :href="route('student-creations.show', student_creation.id)"
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
                        :src="'/images/article/' + student_creation.image"
                        alt=""
                        class="
                            object-cover
                            w-56
                            md:w-72
                            lg:w-80
                            h-44
                            md:h-56
                            lg:h-60
                            rounded-2xl
                            shadow-xl
                            bg-white
                        "
                    />
                    <div
                        class="
                            flex flex-col
                            justify-end
                            w-56
                            md:w-72
                            lg:w-80
                            h-44
                            md:h-56
                            lg:h-60
                            p-6
                            text-white
                            relative
                            bg-gradient-to-t
                            from-gray-900
                            to-transparent
                            -mt-44
                            md:-mt-56
                            lg:-mt-60
                            rounded-2xl
                        "
                    >
                        <h2 class="text-xl line-clamp-2">
                            {{ student_creation.title }}
                        </h2>
                        <p class="text-xs">
                            {{
                                new Date(
                                    student_creation.created_at
                                ).toLocaleString("ID-id", {
                                    timezone: "Asia/Jakarta",
                                    weekday: "long",
                                    year: "numeric",
                                    month: "long",
                                    day: "numeric",
                                })
                            }}
                        </p>
                        <p class="text-xs mt-2">
                            {{ student_creation.author }}
                        </p>
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
                class="
                    flex flex-col
                    items-center
                    h-fit
                    w-fit
                    shadow-xl shadow-green-100/60
                    rounded-lg
                    p-4
                "
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
                <h2 class="text-center text-5xl mt-4 font-bold">
                    {{ general ? general.total_teacher : "-" }}
                </h2>
                <h3 class="text-center text-sm">Jumlah Guru</h3>
            </div>
            <div
                class="
                    flex flex-col
                    items-center
                    h-fit
                    w-fit
                    shadow-xl shadow-green-100/60
                    rounded-lg
                    p-4
                "
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
                <h2 class="text-center text-5xl mt-4 font-bold">
                    {{ general ? general.total_student : "-" }}
                </h2>
                <h3 class="text-center text-sm">Jumlah Siswa</h3>
            </div>
            <div
                class="
                    flex flex-col
                    items-center
                    h-fit
                    w-fit
                    shadow-xl shadow-green-100/60
                    rounded-lg
                    p-4
                "
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
                <h2 class="text-center text-5xl mt-4 font-bold">
                    {{ general ? general.total_graduate : "-" }}
                </h2>
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
    props: {
        general: Object,
        news: Object,
        student_creation: Object,
    },
};
</script>

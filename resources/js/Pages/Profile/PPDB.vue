<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>

    <section class="container pt-24 pb-12">
        <div class="mb-8">
            <h2
                class="
                    text-3xl
                    lg:text-4xl
                    font-bold
                    uppercase
                    text-center
                    my-6
                "
            >
                Pendaftaran Peserta Didik Baru
            </h2>
            <div class="container px-5 py-8 mx-auto flex flex-wrap">
                <div class="flex flex-wrap w-full">
                    <div class="md:w-1/2 md:pr-10 md:py-6">
                        <div class="flex relative pb-12">
                            <div
                                class="
                                    h-full
                                    w-20
                                    absolute
                                    inset-0
                                    flex
                                    items-center
                                    justify-center
                                "
                            >
                                <div
                                    class="
                                        h-full
                                        w-1
                                        bg-gray-200
                                        pointer-events-none
                                    "
                                ></div>
                            </div>
                            <div
                                class="
                                    flex-shrink-0
                                    w-20
                                    h-20
                                    rounded-full
                                    bg-green-400
                                    inline-flex
                                    items-center
                                    justify-center
                                    text-white
                                    relative
                                    z-10
                                "
                            >
                                <img src="/images/open.png" class="w-16" />
                            </div>
                            <div class="flex-grow pl-4">
                                <h2
                                    class="
                                        font-semibold
                                        title-font
                                        text-sm text-gray-900
                                        mb-1
                                        tracking-wider
                                        uppercase
                                    "
                                >
                                    Pendaftaran Dibuka
                                </h2>
                                <p class="leading-relaxed font-semibold">
                                    {{
                                        new Date(setting.open).toLocaleString(
                                            "ID-id",
                                            {
                                                timezone: "Asia/Jakarta",
                                                weekday: "long",
                                                year: "numeric",
                                                month: "long",
                                                day: "numeric",
                                                hour12: false,
                                                hour: 'numeric',
                                                minute: 'numeric',
                                            }
                                        )
                                    }}
                                </p>
                            </div>
                        </div>
                        <div class="flex relative pb-12">
                            <div
                                class="
                                    h-full
                                    w-20
                                    absolute
                                    inset-0
                                    flex
                                    items-center
                                    justify-center
                                "
                            >
                                <div
                                    class="
                                        h-full
                                        w-1
                                        bg-gray-200
                                        pointer-events-none
                                    "
                                ></div>
                            </div>
                            <div
                                class="
                                    -ml-2
                                    flex-shrink-0
                                    w-24
                                    h-24
                                    rounded-full
                                    bg-yellow-300
                                    inline-flex
                                    items-center
                                    justify-center
                                    text-white
                                    relative
                                    z-10
                                "
                            >
                                <img src="/images/register.png" class="w-16" />
                            </div>
                            <div class="flex-grow pl-4">
                                <h2
                                    class="
                                        font-bold
                                        title-font
                                        text-md text-gray-900
                                        mb-1
                                        tracking-wider
                                        uppercase
                                    "
                                >
                                    Tanggal pendaftaran
                                </h2>
                                <p class="leading-relaxed font-bold text-lg">
                                    {{
                                        new Date(setting.open).toLocaleString(
                                            "ID-id",
                                            {
                                                timezone: "Asia/Jakarta",
                                                weekday: "long",
                                                year: "numeric",
                                                month: "long",
                                                day: "numeric",
                                                hour12: false,
                                                hour: 'numeric',
                                                minute: 'numeric',
                                            }
                                        )
                                    }}
                                    -
                                    {{
                                        new Date(setting.close).toLocaleString(
                                            "ID-id",
                                            {
                                                timezone: "Asia/Jakarta",
                                                weekday: "long",
                                                year: "numeric",
                                                month: "long",
                                                day: "numeric",
                                                hour12: false,
                                                hour: 'numeric',
                                                minute: 'numeric',
                                            }
                                        )
                                    }}
                                </p>
                            </div>
                        </div>
                        <div class="flex relative pb-12">
                            <div
                                class="
                                    h-full
                                    w-20
                                    absolute
                                    inset-0
                                    flex
                                    items-center
                                    justify-center
                                "
                            >
                                <div
                                    class="
                                        h-full
                                        w-1
                                        bg-gray-200
                                        pointer-events-none
                                    "
                                ></div>
                            </div>
                            <div
                                class="
                                    flex-shrink-0
                                    w-20
                                    h-20
                                    rounded-full
                                    bg-green-400
                                    inline-flex
                                    items-center
                                    justify-center
                                    text-white
                                    relative
                                    z-10
                                "
                            >
                                <img src="/images/close.png" class="w-16" />
                            </div>
                            <div class="flex-grow pl-4">
                                <h2
                                    class="
                                        font-semibold
                                        title-font
                                        text-sm text-gray-900
                                        mb-1
                                        tracking-wider
                                        uppercase
                                    "
                                >
                                    Pendaftaran Ditutup
                                </h2>
                                <p class="leading-relaxed font-semibold">
                                    {{
                                        new Date(setting.close).toLocaleString(
                                            "ID-id",
                                            {
                                                timezone: "Asia/Jakarta",
                                                weekday: "long",
                                                year: "numeric",
                                                month: "long",
                                                day: "numeric",
                                                hour12: false,
                                                hour: 'numeric',
                                                minute: 'numeric',
                                            }
                                        )
                                    }}
                                </p>
                            </div>
                        </div>
                        <div class="flex relative pb-12">
                            <div
                                class="
                                    flex-shrink-0
                                    w-20
                                    h-20
                                    rounded-full
                                    bg-green-400
                                    inline-flex
                                    items-center
                                    justify-center
                                    text-white
                                    relative
                                    z-10
                                "
                            >
                                <img
                                    src="/images/announcement.png"
                                    class="w-16"
                                />
                            </div>
                            <div class="flex-grow pl-4">
                                <h2
                                    class="
                                        font-semibold
                                        title-font
                                        text-sm text-gray-900
                                        mb-1
                                        tracking-wider
                                        uppercase
                                    "
                                >
                                    Pengumuman
                                </h2>
                                <p class="leading-relaxed font-semibold">
                                    {{
                                        setting.announcement
                                            ? new Date(
                                                  setting.announcement
                                              ).toLocaleString("ID-id", {
                                                  timezone: "Asia/Jakarta",
                                                  weekday: "long",
                                                  year: "numeric",
                                                  month: "long",
                                                  day: "numeric",
                                                  hour12: false,
                                                  hour: 'numeric',
                                                  minute: 'numeric',
                                              })
                                            : "-"
                                    }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <img
                        :src="'images/' + setting.image"
                        alt=""
                        class="
                            mx-auto
                            w-4/5
                            md:w-1/2
                            object-contain object-center
                            rounded-lg
                            md:mt-0
                            mt-12
                        "
                    />
                </div>
            </div>
        </div>

        <div
            v-if="
                new Date(setting.close) >= new Date(current_date) &&
                new Date(setting.open) <= new Date(current_date)
            "
            class="my-24"
        >
            <h2 class="text-3xl lg:text-4xl font-bold capitalize text-center">
                Bergabunglah bersama kami
            </h2>
            <div class="container px-5 py-8 mx-auto flex flex-wrap">
                <Link
                    :href="route('ppdb.create')"
                    class="btn btn-lg btn-primary mx-auto"
                >
                    Daftar sekarang
                </Link>
            </div>
        </div>
        <div v-else class="">
            <h2 class="text-3xl lg:text-4xl font-bold capitalize text-center">
                Pendaftaran ditutup
            </h2>
            <p class="text-lg text-center my-4">
                pendaftaran dapat dilakukan di laman ini jika telah tersedia
            </p>
        </div>

        <div v-if="setting.announcement_url != null" class="my-24">
            <h2 class="text-3xl lg:text-4xl font-bold capitalize text-center">
                Pengumuman
            </h2>
            <div class="container px-5 py-8 mx-auto flex flex-col">
                <p class="text-lg text-center my-4">
                    Untuk dapat melihat hasil pengumuman dapat dilihat dengan
                    meng-klik tombol unduh berikut ini
                </p>
                <a
                    :href="setting.announcement_url"
                    target="_blank"
                    class="btn btn-primary mx-auto"
                >
                    Unduh Pengumuman
                </a>
            </div>
        </div>
        <div v-else class="my-24">
            <h2 class="text-3xl lg:text-4xl font-bold capitalize text-center">
                Pengumuman
            </h2>
            <div class="container px-5 py-8 mx-auto flex flex-col">
                <p class="text-lg text-center my-4">
                    pengumuman dapat diunduh di laman ini jika telah tersedia
                </p>
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
    props: {
        setting: Object,
        current_date: String,
    },
};
</script>
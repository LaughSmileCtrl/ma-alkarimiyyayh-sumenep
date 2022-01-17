<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container">
        <div class="flex flex-col gap-8 flex-wrap items-center pt-24 pb-16">
            <h2
                class="
                    text-3xl
                    lg:text-4xl
                    font-bold
                    uppercase
                    text-center
                    my-4
                "
            >
                Struktur Organisasi
            </h2>
            <img
                src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                alt=""
                class="rounded"
            />
            <div class="">
                <h2 class="font-bold text-3xl text-center my-4">
                    Kepala Madrasah
                </h2>
                <div
                    class="
                        flex flex-col
                        md:flex-row
                        items-center
                        gap-10
                    "
                >   
                    <img
                        src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                        alt=""
                        class="rounded w-72"
                    />
                    <div class="flex flex-col gap-2">
                        <h3>
                            <i
                                class="fas fa-quote-left fa-2x text-green-500"
                            ></i>
                        </h3>
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Ipsa, ab nemo voluptate consequuntur
                        </p>
                        <div class="mt-3">
                            <Link :href="route('stakeholder')" class="btn btn-ghost btn-sm text-gray-700">
                                selengkapnya &nbsp;
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <h2 class="font-bold text-3xl text-center my-4">
                    Kurikulum
                </h2>
                <div
                    class="
                        flex flex-col
                        md:flex-row-reverse
                        items-center
                        gap-10
                    "
                >
                    <img
                        src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                        alt=""
                        class="rounded w-72"
                    />
                    <div class="flex flex-col gap-2">
                        <h3>
                            <i
                                class="fas fa-quote-left fa-2x text-green-500"
                            ></i>
                        </h3>
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Ipsa, ab nemo voluptate consequuntur
                        </p>
                        <div class="mt-3">
                            <Link :href="route('stakeholder')" class="btn btn-ghost btn-sm text-gray-700">
                                selengkapnya &nbsp;
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue"
import Footer from "@/Components/Footer.vue"
import { Link } from "@inertiajs/inertia-vue3"

export default {
    components: {
        MainNav,
        Footer,
        Link,
    },
};
</script>
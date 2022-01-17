<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>

    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Dokumen
        </h2>
        <div class="flex gap-6 flex-wrap items-center justify-center">
            <Link
                class="
                    flex flex-row
                    gap-5
                    w-56
                    h-28
                    border-2
                    rounded-lg
                    p-3
                    items-end
                "
            >
                <i class="fas fa-file-alt text-7xl text-gray-400"></i>
                <div class="">
                    <h3 class="text-sm font-semibold mb-2 line-clamp-3">
                        Nama file panjang sekali dicoba saha duulu ini
                    </h3>
                    <h5 class="text-xs text-gray-500">127 kb`</h5>
                </div>
            </Link>
            <Link
                class="
                    flex flex-row
                    gap-5
                    w-56
                    h-28
                    border-2
                    rounded-lg
                    p-3
                    items-end
                "
            >
                <i class="fas fa-file-alt text-7xl text-gray-400"></i>
                <div class="">
                    <h3 class="text-sm font-semibold mb-2">Nama file</h3>
                    <h5 class="text-xs text-gray-500">127 kb`</h5>
                </div>
            </Link>
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
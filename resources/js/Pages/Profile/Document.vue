<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>

    <section class="container pt-36 pb-12 h-screen">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Dokumen
        </h2>
        <div class="flex gap-6 flex-wrap items-center justify-center">
            <a
                :href="route('document.show', file.id)"
                v-for="(file, i) in files"
                :key="i"
                class="
                    flex flex-row
                    gap-5
                    w-56
                    h-28
                    border-2
                    rounded-lg
                    p-3
                    items-center
                "
            >
                <i class="fas fa-file-alt text-7xl text-gray-400"></i>
                <div class="max-w-[60%]">
                    <p class="text-sm font-semibold mb-2 break-words line-clamp-2">
                        {{ file.title }}
                    </p>
                </div>
            </a>
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
        files: Object,
    }
};
</script>
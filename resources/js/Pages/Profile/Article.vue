<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12 min-h-screen">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            {{ title }}
        </h2>
        <div class="flex flex-col gap-2 justify-center w-full items-center mt-4 mb-16">
            <div class="form-control">
                <input
                    @keyup="query(articles.path)" 
                    v-model="searchQuery"
                    type="text"
                    :placeholder="'Cari ' + title"
                    class="
                        input input-primary input-bordered
                        w-40
                        lg:w-80
                        bg-gray-50
                    "
                />
            </div>
            <div v-if="searchQuery" class="badge text-xs">
                {{ searchQuery }} <button @click="removeSearchQuery" class="btn-ghost btn-xs"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="flex gap-6 flex-wrap items-center justify-center">
            <Link
                v-for="(news, i) in articles.data"
                :href="route('news.show', news.id)"
                :key="i"
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
                    <h2 class="text-xl break-words line-clamp-2">{{ news.title }}</h2>
                    <p class="text-xs">
                        {{
                            new Date(
                                news.created_at
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
                        {{ news.author }}
                    </p>
                    <p class="text-xs mt-2 text-right">
                        selengkapnya &nbsp;<i
                            class="fas fa-long-arrow-alt-right"
                        ></i>
                    </p>
                </div>
            </Link>
        </div>
        <div class="mt-10 w-full">
            <div class="mx-auto w-fit">
                <Pagination :links="articles.links" @changePage="query" />
            </div>
        </div>
    </section>

    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue"
import Footer from "@/Components/Footer.vue"
import { Link } from "@inertiajs/inertia-vue3"
import Pagination from '@/Components/Pagination.vue'

export default {
    components: {
        MainNav,
        Footer,
        Link,
        Pagination,
    },
    props: {
        title: String,
        articles: Object,
    },
     data() {
        return {
            searchQuery: '',
        }
    },
    methods: {
        removeSearchQuery() {
            this.searchQuery = ''
            this.query(this.articles.path);
        },
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery}, {only: ['articles'], preserveState: true,});
        },
    }
};
</script>
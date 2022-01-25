<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container min-h-screen">
        <div class="flex flex-col gap-8 pt-24 pb-2">
            <h2
                class="
                    text-3xl
                    lg:text-4xl
                    font-bold
                    uppercase
                    text-center
                    mb-8
                ">
                {{ article.title }}
            </h2>
            <div class="flex flex-col md:flex-row justify-between -mb-5">
                <p class="text-xs capitalize"> {{ article.author }} </p>
                <p class="text-xs text-gray-600">
                    {{
                        new Date(article.created_at).toLocaleString("ID-id", {
                            timezone: "Asia/Jakarta",
                            weekday: 'long', 
                            year: 'numeric', 
                            month: 'long', 
                            day: 'numeric',
                            hour12: false,
                            hour: 'numeric',
                            minute: 'numeric',
                        })
                    }}
                </p>
            </div>

            <img :src="'/images/article/' + article.image" alt="" class="rounded-md" />
            <div class="leading-relaxed md:text-lg list-decimal" v-html="article.content" />
        </div>
    </section>

    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";

export default {
    components: {
        MainNav,
        Footer,
    },
    props: ["article"],
};
</script>

<style scoped>
.ytp-cued-thumbnail-overlay-image {
    width: 200px;
    margin: auto;
}
</style>
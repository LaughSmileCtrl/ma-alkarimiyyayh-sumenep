<template>
    <section class="max-w-screen">
       <MainNav class="text-gray-900"/>
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
                Data Guru
            </h2>
            <div class="flex flex-wrap gap-8 justify-center">
                <div v-for="(teacher, i) in teachers" :key="i" class="text-center w-28">
                    <div class="w-28 h-32 rounded mb-3 pt-2">
                        <img :src="'images/teacher/' + teacher.photo" alt="" class="object-cover w-28 h-32 bg-white rounded" />
                    </div>
                    <p class="text-sm">{{ teacher.name }}</p>
                    <p class="text-sm text-gray-500">{{ teacher.subject }}</p>
                </div>
                
            </div>
        </div>
    </section>

    <Footer />
</template>

<script>
import MainNav from '@/Components/MainNav.vue'
import Footer from '@/Components/Footer.vue'

export default {
    components: {
        MainNav,
        Footer,
    },
    props: {
        teachers: Object,
    }
}
</script>
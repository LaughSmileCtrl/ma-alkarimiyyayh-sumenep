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
            <div class="flex flex-wrap gap-5 justify-center">
                <div v-for="i in 40" :key="i" class="text-center w-28">
                    <div class="w-28 h-32 rounded mb-3 pt-2">
                        <img src="images/teacher.png" alt="" class="object-cover" />
                    </div>
                    <p class="text-sm">Nama Guru</p>
                    <p class="text-sm text-gray-500">Mata pelajaran</p>
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
    }
}
</script>
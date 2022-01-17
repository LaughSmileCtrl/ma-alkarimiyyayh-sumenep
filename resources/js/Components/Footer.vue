<template>

    <section class=" mt-16 text-white max-w-screen">
        <div class="bg-gray-800 py-4 ">
            <div class="container  flex flex-col md:flex-row gap-y-8 lg:gap-16 justify-center">
                <div class="flex flex-col items-center md:items-start">
                    <img
                        src="images/logo.png"
                        alt=""
                        class="w-24 my-3"
                    />
                    <h2 class="text-md lg:text-xl ">Madrasah Aliyah</h2>
                    <h2 class="text-xl lg:text-2xl ">Al-Karimiyyah Sumenep</h2>
                    <div class="flex flex-row gap-4 my-6">
                        <div class="h-7 w-7 rounded-lg bg-gray-100"></div>
                        <div class="h-7 w-7 rounded-lg bg-gray-100"></div>
                        <div class="h-7 w-7 rounded-lg bg-gray-100"></div>
                    </div>
                </div>
                <div class="text-center lg:text-left">
                    <h3 class="text-xl mb-4">Pelajari Lebih Lanjut</h3>
                    <Link :href="route('history')" class="block my-2">Sejarah</Link>
                    <Link :href="route('visionmission')" class="block my-2">Visi Misi</Link>
                    <Link :href="route('structural')" class="block my-2">Struktur&nbsp;Organisasi</Link>
                    <Link :href="route('ppdb')" class="block my-2">PPDB</Link>
                    <Link :href="route('news')" class="block my-2">Berita</Link>
                    <Link :href="route('document')" class="block my-2">Dokumen</Link>
                </div>
                <div class="text-left">
                    <h3 class="text-xl text-center mb-2">Kontak kami</h3>
                    <div class="flex flex-row justify-center items-center">
                        <i class="w-6 mr-2 fas fa-map-marker-alt fa-lg"></i>
                        <span class="block w-56 my-2">
                            Jalan Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                        </span>
                    </div>
                    <div class="flex flex-row justify-center items-center">
                        <i class="w-6 mr-2 fas fa-phone fa-lg"></i>
                        <span class="block w-56 my-2"> +42 000 000 000 </span>
                    </div>
                    <div class="flex flex-row justify-center items-center">
                        <i class="w-6 mr-2 fas fa-envelope fa-lg"></i>
                        <span class="block w-56 my-2"> example@mail.com </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-gray-500 text-center py-1">
            <span class="text-xs text-gray-300">{{ new Date().getFullYear() }} &#169; MA Al-Karimiyyah</span>
        </div>
    </section>
    <div class="h-10 w-10 bg-yellow-400 rounded-full fixed bottom-16 right-4 flex justify-center items-center">
        <button @click="scrollUp" class="btn btn-ghost rounded-full"><i class="fas fa-angle-up fa-lg text-white"></i></button>
    </div>

    <div class="z-20 h-10 w-10 bg-green-400 rounded-full fixed bottom-4 right-4 flex justify-center items-center tooltip  tooltip-left" data-tip="hubungi kami melalui Whatsapp">
        <button class="btn btn-ghost rounded-full"><i class="fab fa-whatsapp fa-lg text-white"></i></button>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link,
    },
    methods: {
        scrollUp() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }
}
</script>

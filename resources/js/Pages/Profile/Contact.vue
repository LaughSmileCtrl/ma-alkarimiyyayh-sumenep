<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container">
        <div
            class="
                flex flex-col
                md:flex-row-reverse
                gap-8
                flex-wrap
                pt-36
                pb-16
                text-gray-700
                items-center
            "
        >
            <div
                class="
                    md:absolute md:mr-10
                    text-left
                    mx-auto
                    max-w-fit
                    md:p-8
                    bg-gray-100/60
                    backdrop-blur
                    rounded-2xl
                    md:shadow-xl
                "
            >
                <h3 class="text-2xl text-center mb-2 capitalize font-bold">
                    Kontak kami
                </h3>
                <div class="flex flex-row justify-center items-center">
                    <i
                        class="
                            w-10
                            mr-2
                            fas
                            fa-map-marker-alt fa-lg
                            text-green-500
                        "
                    ></i>
                    <span class="block w-56 my-2">
                        Jl. Raya Gapura, Desa Beraji Kec. Gapura Kab. Sumenep Prov. Jawa Timur 69472
                    </span>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <i class="w-10 mr-2 fas fa-phone fa-lg text-green-500"></i>
                    <span class="block w-56 my-2"> +62 8193 9414 248 </span>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <i
                        class="w-10 mr-2 fas fa-envelope fa-lg text-green-500"
                    ></i>
                    <span class="block w-56 my-2"> alkarimiyyahma@gmail.com </span>
                </div>
            </div>
            <iframe  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCfDVVOZ1UqWCYRaHKYvxQOQXWkomIU0O0&q=2W43+HW Beraji, Kabupaten Sumenep, Jawa Timur&zoom=12&center=-6.9948746,113.967751" allowfullscreen class="hidden md:block w-full h-[500px] rounded-md shadow-lg"></iframe>
            <iframe  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCfDVVOZ1UqWCYRaHKYvxQOQXWkomIU0O0&q=2W43+HW Beraji, Kabupaten Sumenep, Jawa Timur&zoom=15&center=-6.9934591,113.9050156" allowfullscreen class="md:hidden w-full h-[500px] rounded-md shadow-lg"> </iframe>

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
};
</script>
<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container">
        <div class="flex flex-col gap-8 pt-24 pb-2">
            <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center mb-8">
                Judul Berita
            </h2>
            <div class="flex flex-col md:flex-row justify-between -mb-5">
                <p class="text-xs">Admin</p>
                <p class="text-xs text-gray-600">Senin, 03 Januari 2022</p>
            </div>
        <!-- </div>
        <div class="flex flex-col gap-8 flex-wrap items-center pb-16"> -->
            <img
                src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                alt=""
                class="rounded-md"
            />
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint
                facere ad iste nesciunt illo soluta numquam velit hic! Ea
                doloribus eum totam dignissimos asperiores libero exercitationem
                voluptas autem cumque corrupti.
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint
                facere ad iste nesciunt illo soluta numquam velit hic! Ea
                doloribus eum totam dignissimos asperiores libero exercitationem
                voluptas autem cumque corrupti.
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint
                facere ad iste nesciunt illo soluta numquam velit hic! Ea
                doloribus eum totam dignissimos asperiores libero exercitationem
                voluptas autem cumque corrupti.
            </p>
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
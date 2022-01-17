<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Ekstrakurikuler
        </h2>
        <div
            class="
                flex flex-col
                lg:flex-row
                gap-8
                flex-nowrap
                items-center
                lg:items-start
            "
        >
            <div class="flex flex-col gap-5 items-center">
                <h2 class="text-2xl font-semibold capitalize">Nama Ekskul</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Sint facere ad iste nesciunt illo soluta numquam velit hic!
                    Ea doloribus eum totam dignissimos asperiores libero
                    exercitationem voluptas autem cumque corrupti.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Sint facere ad iste nesciunt illo soluta numquam velit hic!
                    Ea doloribus eum totam dignissimos asperiores libero
                    exercitationem voluptas autem cumque corrupti.
                </p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Sint facere ad iste nesciunt illo soluta numquam velit hic!
                    Ea doloribus eum totam dignissimos asperiores libero
                    exercitationem voluptas autem cumque corrupti.
                </p>
            </div>
            <img
                src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                alt=""
                class="rounded-md w-[400px]"
            />
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
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
                "
            >
                Sejarah
            </h2>
            <img
                src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                alt=""
                class="rounded-md lg:w-3/4 "
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
import MainNav from '@/Components/MainNav.vue'
import Footer from '@/Components/Footer.vue'

export default {
    components: {
        MainNav,
        Footer,
    }
}
</script>
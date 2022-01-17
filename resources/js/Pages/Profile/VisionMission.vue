<template>
    <section class="max-w-screen">
       <MainNav class="text-gray-900"/>
    </section>

    <section class="container">
        <div class="flex flex-col gap-8 flex-wrap items-center pt-24 pb-16">
            <div class="mb-5">
                <h2
                    class="text-3xl lg:text-4xl font-bold uppercase text-center mb-2"
                >
                    Visi
                </h2>
                <div class="flex flex-row items-center gap-8">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ex voluptatum hic itaque qui incidunt! Iusto eius
                        laborum temporibus soluta quidem? Nulla amet illum
                        cumque molestias consequuntur nesciunt, delectus iste
                        nobis!
                    </p>
                    <img
                        src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                        alt=""
                        class="hidden md:block rounded w-72"
                    />
                </div>
            </div>
            <div class="mb-5">
                <h2
                    class="text-3xl lg:text-4xl font-bold uppercase text-center mb-2"
                >
                    Misi
                </h2>
                <div class="flex flex-row-reverse items-center gap-8">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ex voluptatum hic itaque qui incidunt! Iusto eius
                        laborum temporibus soluta quidem? Nulla amet illum
                        cumque molestias consequuntur nesciunt, delectus iste
                        nobis!
                    </p>
                    <img
                        src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                        alt=""
                        class="hidden md:block rounded w-72"
                    />
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
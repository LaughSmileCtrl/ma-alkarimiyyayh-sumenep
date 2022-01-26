<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
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
                Struktur Organisasi
            </h2>
            <!-- <img
                src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                alt=""
                class="rounded"
            /> 
             <div class="">
                <h2 class="font-bold text-3xl text-center my-4">
                    Kepala Madrasah
                </h2>
                <div
                    class="
                        flex flex-col
                        md:flex-row
                        items-center
                        gap-10
                    "
                >   
                    <img
                        src="https://events.enderuncolleges.com/wp-content/uploads/2019/03/image1-3-825x510.jpg"
                        alt=""
                        class="rounded w-72"
                    />
                    <div class="flex flex-col gap-2">
                        <h3>
                            <i
                                class="fas fa-quote-left fa-2x text-green-500"
                            ></i>
                        </h3>
                        <p class="">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Ipsa, ab nemo voluptate consequuntur
                        </p>
                        <div class="mt-3">
                            <Link :href="route('stakeholder')" class="btn btn-ghost btn-sm text-gray-700">
                                selengkapnya &nbsp;
                                <i class="fas fa-long-arrow-alt-right"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="my-5 grid grid-cols-2 gap-y-4 content-start">
                <h2 class="font-bold text-3xl text-left my-4">
                    Kurikulum
                </h2>
                <button @click="kurikulumShow" class="btn btn-lg btn-ghost">selengkapnya &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                <h2 class="font-bold text-3xl text-left my-4">
                    Sarana dan Prasarana
                </h2>
                <button @click="sarprasShow" class="btn btn-lg btn-ghost">selengkapnya &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                <h2 class="font-bold text-3xl text-left my-4">
                    Humas
                </h2>
                <button @click="humasShow" class="btn btn-lg btn-ghost">selengkapnya &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>
                <h2 class="font-bold text-3xl text-left my-4">
                    Tata Usaha
                </h2>
                <button @click="tuShow" class="btn btn-lg btn-ghost">selengkapnya &nbsp;<i class="fas fa-long-arrow-alt-right"></i></button>

            </div>
        </div>
    </section>
    <Footer />
    <kurikulum v-show="false" ref="kurikulum" />
    <sarpras v-show="false" ref="sarpras" />
    <humas v-show="false" ref="humas" />
    <tu v-show="false" ref="tu" />

</template>

<script>
import MainNav from "@/Components/MainNav.vue"
import Footer from "@/Components/Footer.vue"
import { Link } from "@inertiajs/inertia-vue3"
import kurikulum from '@/Components/Structural/kurikulum.vue'
import sarpras from '@/Components/Structural/sarpras.vue'
import humas from '@/Components/Structural/humas.vue'
import tu from '@/Components/Structural/tu.vue'

export default {
    components: {
        MainNav,
        Footer,
        Link,
        kurikulum,
        sarpras,
        humas,
        tu,
    },
    methods: {
        kurikulumShow() {
            this.$swal({
                title: 'Tugas Pokok dan Fungsi Kurikulum',
                showCloseButton: true,
                width: '50rem',
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.kurikulum.$el.innerHTML,
            })
        },
        sarprasShow() {
            this.$swal({
                title: 'Tugas Pokok dan Fungsi Sarana dan Prasarana',
                showCloseButton: true,
                width: '50rem',
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.sarpras.$el.innerHTML,
            })
        },
        humasShow() {
            this.$swal({
                title: 'Tugas Pokok dan Fungsi Humas',
                showCloseButton: true,
                width: '50rem',
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.humas.$el.innerHTML,
            })
        },
        tuShow() {
            this.$swal({
                title: 'Tugas Pokok dan Fungsi Tata Usaha',
                showCloseButton: true,
                width: '50rem',
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.tu.$el.innerHTML,
            })
        },
    }
};
</script>
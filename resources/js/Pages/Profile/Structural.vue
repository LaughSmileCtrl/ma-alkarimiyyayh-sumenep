<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container">
        <div class="flex flex-col gap-8 flex-wrap items-center pt-36 pb-16">
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
            <div class="my-5 grid grid-cols-2 gap-y-4 content-start">
                <h2 class="font-bold text-3xl text-left my-4">Kurikulum</h2>
                <button @click="kurikulumShow" class="btn btn-lg btn-ghost">
                    selengkapnya &nbsp;<i
                        class="fas fa-long-arrow-alt-right"
                    ></i>
                </button>
                <h2 class="font-bold text-3xl text-left my-4">Kesiswaan</h2>
                <button @click="kesiswaanShow" class="btn btn-lg btn-ghost">
                    selengkapnya &nbsp;<i
                        class="fas fa-long-arrow-alt-right"
                    ></i>
                </button>
                <h2 class="font-bold text-3xl text-left my-4">
                    Sarana dan Prasarana
                </h2>
                <button @click="sarprasShow" class="btn btn-lg btn-ghost">
                    selengkapnya &nbsp;<i
                        class="fas fa-long-arrow-alt-right"
                    ></i>
                </button>
                <h2 class="font-bold text-3xl text-left my-4">Humas</h2>
                <button @click="humasShow" class="btn btn-lg btn-ghost">
                    selengkapnya &nbsp;<i
                        class="fas fa-long-arrow-alt-right"
                    ></i>
                </button>
                <h2 class="font-bold text-3xl text-left my-4">Tata Usaha</h2>
                <button @click="tuShow" class="btn btn-lg btn-ghost">
                    selengkapnya &nbsp;<i
                        class="fas fa-long-arrow-alt-right"
                    ></i>
                </button>
                <h2 class="font-bold text-3xl text-left my-4">Perpusatakaan</h2>
                <button @click="perpustakaanShow" class="btn btn-lg btn-ghost">
                    selengkapnya &nbsp;<i
                        class="fas fa-long-arrow-alt-right"
                    ></i>
                </button>
                <h2 class="font-bold text-3xl text-left my-4">Bimbingan Konseling</h2>
                <button @click="bkShow" class="btn btn-lg btn-ghost">
                    selengkapnya &nbsp;<i
                        class="fas fa-long-arrow-alt-right"
                    ></i>
                </button>
            </div>
        </div>
    </section>
    <Footer />
    <kurikulum v-show="false" ref="kurikulum" />
    <sarpras v-show="false" ref="sarpras" />
    <humas v-show="false" ref="humas" />
    <tu v-show="false" ref="tu" />
    <bk v-show="false" ref="bk" />
    <kesiswaan v-show="false" ref="kesiswaan" />
    <perpustakaan v-show="false" ref="perpustakaan" />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";
import kurikulum from "@/Components/Structural/kurikulum.vue";
import sarpras from "@/Components/Structural/sarpras.vue";
import humas from "@/Components/Structural/humas.vue";
import tu from "@/Components/Structural/tu.vue";
import bk from "@/Components/Structural/bk.vue";
import kesiswaan from "@/Components/Structural/kesiswaan.vue";
import perpustakaan from "@/Components/Structural/perpustakaan.vue";

export default {
    components: {
        MainNav,
        Footer,
        Link,
        kurikulum,
        sarpras,
        humas,
        tu,
        bk,
        kesiswaan,
        perpustakaan,
    },
    methods: {
        kurikulumShow() {
            this.$swal({
                title: "Tugas Pokok dan Fungsi Kurikulum",
                showCloseButton: true,
                width: "50rem",
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.kurikulum.$el.innerHTML,
            });
        },
        sarprasShow() {
            this.$swal({
                title: "Tugas Pokok dan Fungsi Sarana dan Prasarana",
                showCloseButton: true,
                width: "50rem",
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.sarpras.$el.innerHTML,
            });
        },
        humasShow() {
            this.$swal({
                title: "Tugas Pokok dan Fungsi Humas",
                showCloseButton: true,
                width: "50rem",
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.humas.$el.innerHTML,
            });
        },
        tuShow() {
            this.$swal({
                title: "Tugas Pokok dan Fungsi Tata Usaha",
                showCloseButton: true,
                width: "50rem",
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.tu.$el.innerHTML,
            });
        },
        bkShow() {
            this.$swal({
                title: "Tugas Pokok dan Fungsi Bimbingan Konseling",
                showCloseButton: true,
                width: "50rem",
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.bk.$el.innerHTML,
            });
        },
        kesiswaanShow() {
            this.$swal({
                title: "Tugas Pokok dan Fungsi Kesiswaan",
                showCloseButton: true,
                width: "50rem",
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.kesiswaan.$el.innerHTML,
            });
        },
        perpustakaanShow() {
            this.$swal({
                title: "Tugas Pokok dan Fungsi Perpustakaan",
                showCloseButton: true,
                width: "50rem",
                showCancelButton: false,
                showConfirmButton: false,
                html: this.$refs.perpustakaan.$el.innerHTML,
            });
        },
    },
};
</script>
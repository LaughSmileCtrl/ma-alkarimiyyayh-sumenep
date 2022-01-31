<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-36 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Ekstrakurikuler
        </h2>
        <div
            class="
                flex flex-col
                lg:flex-row
                gap-x-16
                gap-y-8
                flex-nowrap
                items-center
                lg:items-center
                my-16
                justify-center
            "
        >
            <div class="flex flex-col gap-8 items-center">
                <h2 class="text-2xl font-semibold capitalize">PRAMUKA</h2>
                <p class="text-justify">
                    Madrasah Aliyah Al-Karimiyyah terdapat ekstrakurikuler salah
                    satunya yakni Pramuka. Hal ini dikukuh melalui Peraturan
                    Menteri Pendidikan dan Kebudayaan Nomor 63 Tahun 2014
                    Tentang Pendidikan Kepramukaan Sebagai Ekstrakurikuler Wajib
                    yang diselenggarakan disetiap satuan Pendidikan.
                </p>
            </div>
            <img
                src="/images/pramuka.png"
                alt=""
                class="rounded-md h-[150px] lg:h-[300px]"
            />
        </div>
        <div
            class="
                flex flex-col
                lg:flex-row-reverse
                gap-x-16
                gap-y-8
                flex-nowrap
                items-center
                lg:items-center
                my-16
                justify-center
            "
        >
            <div class="flex flex-col gap-8 items-center">
                <h2 class="text-2xl font-semibold capitalize">
                    KARYA TULIS ILMIAH (KTI)
                </h2>
                <p class="text-justify">
                    Sejalan dengan banyaknya minat menulis Siswa Siswi di
                    Madrasah Aliyah Al-Karimiyyah, sehingga Madrasah memutuskan
                    untuk membentuk Ekstrakurikuler ini untuk mengarahkan
                    Siswa/I supaya mereka tidak hanya sekedar bisa menulis
                    karya, akan tetapi Karya yang mereka hasilkan dapat mengacu
                    pada kaidah-kaidah penulisan yang benar dan baik.
                </p>
            </div>
            <img
                src="/images/kti.png"
                alt=""
                class="rounded-md h-[150px] lg:h-[300px]"
            />
        </div>
        <div
            class="
                flex flex-col
                lg:flex-row
                gap-x-16
                gap-y-8
                flex-nowrap
                items-center
                lg:items-center
                my-16
                justify-center
            "
        >
            <div class="flex flex-col gap-8 items-center">
                <h2 class="text-2xl font-semibold capitalize">FUTSAL</h2>
                <p class="text-justify">
                    Ekstrakurikuler ini tidak hanya diminati oleh Siswa saja,
                    tidak kalah semangatnya para Guru Laki-laki juga aktif dalam
                    kegiatan ektrakurikuler tersebut. Selain menjadi wadah untuk
                    mengembangkan minat olahraga, ekstrakurikuler ini menjadi
                    wadah untuk mempererat hubungan antara Guru dan Siswa
                    melalui ajang olahraga yang difasilitasi oleh Madrasah.
                </p>
            </div>
            <img
                src="/images/futsal.png"
                alt=""
                class="rounded-md h-[150px] lg:h-[300px]"
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
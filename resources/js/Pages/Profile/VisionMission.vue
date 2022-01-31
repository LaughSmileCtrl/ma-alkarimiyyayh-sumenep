<template>
    <section class="max-w-screen">
       <MainNav class="text-gray-900"/>
    </section>

    <section class="container">
        <div class="flex flex-col gap-8 flex-wrap items-center pt-36 pb-16">
            <div class="mb-5">
                <h2
                    class="text-3xl lg:text-4xl font-bold uppercase text-center mb-4"
                >
                    Visi
                </h2>
                <div class="flex flex-row items-center gap-24">
                    <div class="text-justify">
                        <p>
                        Membentuk Pribadi Cerdas Intelektual, Emosional Dan Spiritual 
                            Indikator :
                            <ol class="list-decimal list-outside">
                                <li> Meningkatkan prestasi akademik dan non akademik </li>
                                <li> Mengembangkan kurikulum yang adaptif dan inovatif </li>
                                <li> Mengembangkan perangkat pembelajaran, pbm dan sistem penilaian </li>
                                <li> Mengembangkan kompetensi pendidik dan tenaga kependidikan </li>
                                <li> Meningkatkan penyediaan sarana prasarana pendidikan </li>
                                <li> Mewujudkan team work yang ramping dan kaya fungsi dengan peningkatan kesejahteraan sesuai kemampuan keuangan yayasan dan madrasah </li>
                                <li> Menerapkan manajemen partisipatif, transparan dan akuntabel </li>
                                <li> Menumbuhkembangkan akhlak mulia, sikap dan perilaku demokratis dan toleran </li>
                                <li> Menciptakan lingkungan bersih, asri, nyaman dan kondusif </li>
                            </ol>
                        </p>
                    </div>
                    <img
                        src="/images/visi.png"
                        alt=""
                        class="hidden md:block rounded w-72"
                    />
                </div>
            </div>
            <div class="mb-5">
                <h2
                    class="text-3xl lg:text-4xl font-bold uppercase text-center mb-4"
                >
                    Misi
                </h2>
                <div class="flex flex-row-reverse items-center gap-24">
                    <div class="text-justify">
                        <p>
                            <ol class="list-decimal list-outside">
                                <li> Meningkatkan wawasan dan penguasaan khazanah keilmuan</li>
                                <li> Memiliki   kecakapan   yang   utuh  bagi   penguasan   ilmu  pengetahuan   dan  teknologi menuju terbentuknya pribadi mandiri, produktif, kreatif dan inovatif.</li>
                                <li> Meningkatkan kualitas dan kuantitas hasil pembelajaran</li>
                                <li> Meningkatkan kompetensi dan profesionalisme guru dan karyawan melalui pembinaan,   pendidikan dan latihan.</li>
                                <li> Mewujudkan manajemen berbasis madrasah yang partisipatif, transparan dan akuntabel menuju optimalisasi potensi madrasah yang mandiri.</li>
                                <li> Mewujudkan kinerja ideal didasari peningkatan kesejahteraan dan terpeliharanya citra profesi.</li>
                                <li> Membina watak kepribadian menuju terbentuknya insan fleksibel, luwes, adaptif, komunikatif, responsif dan peduli.</li>
                                <li> Membudayakan pribadi siswa sopan, beraklak mulia dan relegius dalam suasana demokratis diliputi semangat tawashaw bilhaq- wa tawashaw bhisshabri</li>
                                <li> Membangun jiwa bersih penuh kepatuhan melalui kegiatan Sholat Dhuhur/Jum’at berjama’ah </li>
                                <li> Memiliki pemahaman yang utuh sebagai mahluk pribadi, mahluk sosial dan mahluk relegius</li>
                                <li> Memelihara lingkungan madrasah yang sehat, bersih, indah dan kondusif sebagai pusat belajar.</li>
                            </ol>
                        </p>
                    </div>
                    <img
                        src="/images/misi.png"
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
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";

export default {
    components: {
        MainNav,
        Footer,
    },
};
</script>
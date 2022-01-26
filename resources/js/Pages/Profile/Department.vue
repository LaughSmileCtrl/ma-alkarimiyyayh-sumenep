<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Jurusan
        </h2>
        <h2 class="text-2xl lg:text-3xl font-semibold mt-5 mb-3 text-center">IPA</h2>
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
            <img
                src="/images/ipa.jpg"
                alt=""
                class="rounded-md w-[400px]"
            />
            <div class="flex flex-col gap-4 items-center">
                <p>
                    Peningkatan Ilmu Pengetahuan dan Teknologi (IPTEK) yang
                    terus berkembang menuntut dunia pendidikan untuk terus
                    mengembangkan diri agar memberikan bekal pendidikan yang
                    kompeten. Laboratorium IPA adalah hal yang sangat mendasar
                    dalam terlaksananya suatu proses pendidikan untuk mencapai
                    hasil pembelajaran yang lebih baik. Program kegiatan
                    Laboratorium IPA bertujuan untuk membantu guru dan peserta
                    didik dalam melaksanakan praktikum IPA sekaligus membantu
                    pihak sekolah dalam pemberdayaan sarana dan prasarana
                    pendidikan di sekolah, secara khusus tujuan program
                    Laboratorium IPA antara lain:
                    <ol class="list-decimal list-outside pl-8">
                        <li>
                            Memotivasi peserta didik dalam belajar IPA dengan
                            melaksanakan kegiatan praktikum
                        </li>
                        <li>
                            Mengembangkan keterampilan dasar bereksperimen melalui
                            praktikum sebagai salah satu tuntutan dalam pembelajaran
                            IPA
                        </li>
                        <li>
                            Sebagai wahana dalam pembelajaran melalui pendekatan
                            ilmiah berdasarkan fakta dan data yang diperoleh
                        </li>
                        <li>
                            Menunjang materi pembelajaran dalam kegiatan tatap muka
                            di dalam kelas melalui kegiatan praktikum sebagai upaya
                            pembuktian teori-teori ilmiah.
                        </li>
                        <li>
                            Membantu sekolah dalam program pemberdayaan sarana dan
                            prasarana sekolah, khususnya dalam perawatan dan
                            penambahan fasilitas pokok dan failitas pendukung yang
                            terdapat di dalam laboratorium IPA agar fungsi
                            laboratorium IPA dapat berjalan seusai dengan yang
                            diharapkan.
                        </li>
                    </ol>
                </p>


                <p>
                    Pelaksanaan program kerja Laboratorium IPA di MA Al Karimiyyah
                    ini diharapkan menjadi solusi dalam menyiasati besarnya tanggung
                    jawab yang diemban oleh mata pelajaran IPA di sekolah. Selain
                    itu pelaksanaan program kerja ini diharuskan ada petugas Laboran
                    untuk memaksimalkan hasil yang didapat dari program kerja
                    tersebut. Adapun Tugas Laboran antara lain :
                    <ol type="a" class="list-disc list-outside pl-8">
                        <li>
                            Bertanggung jawab atas kelengkapan administrasi
                            laboratorium
                        </li>
                        <li>
                            Bertanggung jawab atas kelancaran kegiatan laboratorium
                        </li>
                        <li>
                            Mengusulkan kepada kepala sekolah tentang pengadaan
                            alat/bahan laboratorium
                        </li>
                        <li>
                            Bertanggung jawab tentang kebersihan, penyimpanan,
                            perawatan, dan perbaikanalat
                        </li>
                        <li>
                            Mengkoordinasikan guru matapelajarn IPA (Fisika,biologi,
                            kimia)
                        </li>
                        <li>Perencanaan pengadaan alat dan bahan laboratorium</li>
                        <li>
                            Menyusun jadwal dan tata tertib penggunaan laboratorium
                        </li>
                        <li>
                            Mengatur penyimpanan dan daftar alat-alat laboratorium
                        </li>
                        <li>Memelihara dan perbaikan alat-alat laboratorium</li>
                        <li>
                            Inventarisasi dan pengadministrasian peminjaman
                            alat-alat laboratorium
                        </li>
                        <li>Menyusun laporan pelaksanaan kegiatan laboratorium.</li>
                    </ol>
                </p>


                <img src="/images/lab.png" alt="struktur lab" class="w-full">

                <table class="table-auto">
                    <tr>
                        <td>Penanggung Jawab</td>
                        <td class="px-3">:</td>
                        <td>Bayuda Luqman Al Farisi, M.Pd</td>
                    </tr>
                    <tr>
                        <td>Laboran</td>
                        <td class="px-3">:</td>
                        <td>Fatimah Slamet, S.Pd, Gr.</td>
                    </tr>
                    <tr>
                        <td class="align-top">Guru Mata Pelajaran</td>
                        <td class="px-3 align-top">:</td>
                        <td>
                            <div class="ml-5">
                                <ol class="list-decimal list-outside">
                                    <li>Syafril Warnida (Kimia)</li>
                                    <li>Lilik Sumarlina, S.Si (Kimia)</li>
                                    <li>Evi Rosalina S.Pd (Kimia)</li>
                                    <li>Lilis Yuliani, S.Pd (Biologi)</li>
                                    <li>Megawati Apriliana, S.Pd (Biologi)</li>
                                    <li>Wiryawan Susihrto, ST. (Fisika)</li>
                                    <li>Emmilia Agustina S.Si (Fisika)</li>
                                    <li>Desi Qoraima Putri, S.Pd</li>
                                </ol>
                            </div>
                        </td>
                    </tr>
                </table>
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
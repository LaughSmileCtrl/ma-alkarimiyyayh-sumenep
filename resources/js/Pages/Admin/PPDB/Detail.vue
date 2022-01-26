<template>
    <Head title="Data Peserta Didik Baru" />

    <AuthenticatedLayout>
        <template #header> Data Peserta Didik Baru </template>
        <div class="flex justify-between">
            <Link :href="route('ppdb-admin.index')" class="btn"
                ><i class="fas fa-angle-left"></i> &nbsp; Kembali</Link
            >
            <a
                :href="route('ppdb-admin.topdf', registrar.id)"
                target="_blank"
                class="btn btn-secondary"
                ><i class="fas fa-print"></i> &nbsp; Cetak PDF</a
            >
        </div>
        <div id="content-ppdb" class="w-full max-w-xl">
            <div class="mx-auto mb-14 2xl:px-10">
                <div class="m-4">
                    <h2 class="text-xl font-bold">Data Pribadi</h2>
                    <div class="grid grid-cols-3 gap-y-2 items-start">
                        <span class="w-full text-md capitalize"
                            >Nama lengkap</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.name }}
                        </span>
                        <span class="w-full text-md capitalize">NISN</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.nisn }}
                        </span>
                        <span class="w-full text-md capitalize">NIK</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.nik }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >No. Kartu Keluarga</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.no_kk }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Tempat lahir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.place_of_birth }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Tanggal lahir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{
                                new Date(
                                    registrar.date_of_birth
                                ).toLocaleString("ID-id", {
                                    timezone: "Asia/Jakarta",
                                    weekday: "long",
                                    year: "numeric",
                                    month: "long",
                                    day: "numeric",
                                })
                            }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Jenis kelamin</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.gender }}
                        </span>
                        <span class="w-full text-md capitalize">Anak ke-</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.child_order }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Jumlah saudara</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.total_brother }}
                        </span>
                        <span class="w-full text-md capitalize">No. HP/WA</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.phone }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Alamat lengkap</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.address }}
                        </span>
                    </div>
                </div>
                <div class="m-4">
                    <h2 class="text-xl font-bold">Data Ayah</h2>
                    <div class="grid grid-cols-3 gap-y-2 items-start">
                        <span class="w-full text-md capitalize"
                            >Nama lengkap</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.father_name }}
                        </span>
                        <span class="w-full text-md capitalize">NIK</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.father_nik }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Tempat lahir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.father_place_of_birth }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Tanggal lahir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{
                                new Date(
                                    registrar.father_date_of_birth
                                ).toLocaleString("ID-id", {
                                    timezone: "Asia/Jakarta",
                                    weekday: "long",
                                    year: "numeric",
                                    month: "long",
                                    day: "numeric",
                                })
                            }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Pendidikan Terakhir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.father_last_education }}
                        </span>
                        <span class="w-full text-md capitalize">Pekerjaan</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.father_profession }}
                        </span>
                        <span class="w-full text-md capitalize">No. HP/WA</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.father_phone }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Alamat lengkap</span
                        >
                        <span class="w-full text-md">
                            {{ registrar.father_address }}
                        </span>
                    </div>
                </div>
                <div class="m-4">
                    <h2 class="text-xl font-bold">Data Ibu</h2>
                    <div class="grid grid-cols-3 gap-y-2 items-start">
                        <span class="w-full text-md capitalize"
                            >Nama lengkap</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.mother_name }}
                        </span>
                        <span class="w-full text-md capitalize">NIK</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.mother_nik }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Tempat lahir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.mother_place_of_birth }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Tanggal lahir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{
                                new Date(
                                    registrar.mother_date_of_birth
                                ).toLocaleString("ID-id", {
                                    timezone: "Asia/Jakarta",
                                    weekday: "long",
                                    year: "numeric",
                                    month: "long",
                                    day: "numeric",
                                })
                            }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Pendidikan Terakhir</span
                        >
                        <span class="w-full text-md col-span-2">
                            {{ registrar.mother_last_education }}
                        </span>
                        <span class="w-full text-md capitalize">Pekerjaan</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.mother_profession }}
                        </span>
                        <span class="w-full text-md capitalize">No. HP/WA</span>
                        <span class="w-full text-md col-span-2">
                            {{ registrar.mother_phone }}
                        </span>
                        <span class="w-full text-md capitalize"
                            >Alamat lengkap</span
                        >
                        <span class="w-full text-md">
                            {{ registrar.mother_address }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
import AuthenticatedLayout from "@/Layouts/Authenticated.vue";

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Link,
    },
    props: {
        registrar: Object,
    },
};
</script>

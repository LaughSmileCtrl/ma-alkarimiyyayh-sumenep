<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>
    <section class="container pt-24 pb-12">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-6">
            Pendaftaran Peserta Didik Baru
        </h2>
        <div class="mx-auto my-14 2xl:px-10">
            <div class="mx-auto mb-14 2xl:px-10">
                <div class="my-8">
                    <p class="font-medium text-gray-500">Keterangan: <span class="text-red-400">*</span> <span class="uppercase font-semibold text-gray-700">Wajib diisi</span></p>
                    <h2 class="text-xl font-bold my-4">Data Pribadi</h2>
                    <div class="grid grid-col-1 lg:grid-cols-3 gap-y-2 items-center">
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Nama lengkap <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.name" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.name" class="text-xs text-red-500 ml-2">{{ form.errors.name }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NISN <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.nisn" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.nisn" class="text-xs text-red-500 ml-2">{{ form.errors.nisn }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NIK <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.nik" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.nik" class="text-xs text-red-500 ml-2">{{ form.errors.nik }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. Kartu Keluarga <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.no_kk" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.no_kk" class="text-xs text-red-500 ml-2">{{ form.errors.no_kk }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tempat lahir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.place_of_birth" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.place_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.place_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tanggal lahir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.date_of_birth" type="date" class="input input-primary w-full" />
                            <p v-if="form.errors.date_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.date_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Jenis kelamin <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <select v-model="form.gender" class="select select-bordered select-primary w-full lg:col-span-2">
                                <option value="" disabled="disabled" selected="selected">jenis kelamin</option>
                                <option>Perempuan</option>
                                <option>Laki-Laki</option>
                            </select>
                            <p v-if="form.errors.gender" class="text-xs text-red-500 ml-2">{{ form.errors.gender }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Anak ke- <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.child_order" type="number" class="input input-primary w-full" />
                            <p v-if="form.errors.child_order" class="text-xs text-red-500 ml-2">{{ form.errors.child_order }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Jumlah saudara <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.total_brother" type="number" class="input input-primary w-full" />
                            <p v-if="form.errors.total_brother" class="text-xs text-red-500 ml-2">{{ form.errors.total_brother }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. HP/WA <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.phone" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.phone" class="text-xs text-red-500 ml-2">{{ form.errors.phone }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Alamat lengkap <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <textarea v-model="form.address" name="" id="" class="textarea h-24 textarea-bordered textarea-primary w-full"></textarea>
                            <p v-if="form.errors.address" class="text-xs text-red-500 ml-2">{{ form.errors.address }}</p>
                        </div>
                    </div>
                </div>
                <div class="my-8">
                    <h2 class="text-xl font-bold my-4">Data Ayah</h2>
                    <div class="grid grid-col-1 lg:grid-cols-3 gap-y-2 items-center">
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Nama lengkap <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_name" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_name" class="text-xs text-red-500 ml-2">{{ form.errors.father_name }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NIK <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_nik" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_nik" class="text-xs text-red-500 ml-2">{{ form.errors.father_nik }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tempat lahir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_place_of_birth" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_place_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.father_place_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tanggal lahir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_date_of_birth" type="date" class="input input-primary w-full" />
                            <p v-if="form.errors.father_date_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.father_date_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pendidikan Terakhir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_last_education" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_last_education" class="text-xs text-red-500 ml-2">{{ form.errors.father_last_education }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pekerjaan <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_profession" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_profession" class="text-xs text-red-500 ml-2">{{ form.errors.father_profession }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. HP/WA <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_phone" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_phone" class="text-xs text-red-500 ml-2">{{ form.errors.father_phone }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Alamat lengkap <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <textarea v-model="form.father_address" name="" id="" class="textarea h-24 textarea-bordered textarea-primary w-full"></textarea>
                            <p v-if="form.errors.father_address" class="text-xs text-red-500 ml-2">{{ form.errors.father_address }}</p>
                        </div>
                    </div>
                </div>
                <div class="my-8">
                    <h2 class="text-xl font-bold my-4">Data Ibu</h2>
                    <div class="grid grid-col-1 lg:grid-cols-3 gap-y-2 items-center">
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Nama lengkap <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_name" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_name" class="text-xs text-red-500 ml-2">{{ form.errors.mother_name }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NIK <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_nik" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_nik" class="text-xs text-red-500 ml-2">{{ form.errors.mother_nik }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tempat lahir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_place_of_birth" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_place_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.mother_place_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tanggal lahir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_date_of_birth" type="date" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_date_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.mother_date_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pendidikan Terakhir <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_last_education" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_last_education" class="text-xs text-red-500 ml-2">{{ form.errors.mother_last_education }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pekerjaan <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_profession" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_profession" class="text-xs text-red-500 ml-2">{{ form.errors.mother_profession }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. HP/WA <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_phone" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_phone" class="text-xs text-red-500 ml-2">{{ form.errors.mother_phone }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Alamat lengkap <span class="text-red-400">*</span></label>
                        </div>
                        <div class="lg:col-span-2">
                            <textarea v-model="form.mother_address" name="" id="" class="textarea h-24 textarea-bordered textarea-primary w-full"></textarea>
                            <p v-if="form.errors.mother_address" class="text-xs text-red-500 ml-2">{{ form.errors.mother_address }}</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mb-5 w-full">
                    <button @click="save" class="btn btn-primary px-8">Simpan</button>
                </div>
            </div>
        </div>
    </section>

    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        MainNav,
        Footer,
        Link,
    },
    data() {
        return {
            form: this.$inertia.form({
                name: '',
                nisn: '',
                nik: '',
                no_kk: '',
                place_of_birth: '',
                date_of_birth: '',
                gender: '',
                child_order: '',
                total_brother: '',
                phone: '',
                address: '',
                father_name: '',
                father_nik: '',
                father_place_of_birth: '',
                father_date_of_birth: '',
                father_last_education: '',
                father_profession: '',
                father_phone: '',
                father_address: '',
                mother_name: '',
                mother_nik: '',
                mother_place_of_birth: '',
                mother_date_of_birth: '',
                mother_last_education: '',
                mother_profession: '',
                mother_phone: '',
                mother_address: '',
            })
        }
    },
    methods: {
        save() {
            this.form.post(route('ppdb.store'), {
                onSuccess: (page) => {
                    this.$swal('Berhasil Menyimpan', page.props.flash.message, 'success');
                    this.form.reset();
                    this.$inertia.get(route('ppdb.index'));
                },
                onError: (message) => {
                    this.$swal('Gagal menyimpan data','cek kembali form yang anda isi','error')

                }
            });
        }
    }
};
</script>
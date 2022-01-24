<template>
    <Head title="Edit PPDB" />

    <AuthenticatedLayout>
        <template #header>
            Edit PPDB
        </template>

        <div class="flex justify-between">
            <Link :href="route('ppdb-admin.index')" class="btn"><i class="fas fa-angle-left"></i> &nbsp; Kembali</Link>
        </div>
        <div class=" w-full max-w-2xl">
            <div class="mx-auto mb-14 2xl:px-10">
                <div class="my-8">
                    <h2 class="text-xl font-bold">Data Pribadi</h2>
                    <div class="grid grid-col-1 lg:grid-cols-3 gap-y-2 items-center">
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Nama lengkap</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.name" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.name" class="text-xs text-red-500 ml-2">{{ form.errors.name }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NISN</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.nisn" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.nisn" class="text-xs text-red-500 ml-2">{{ form.errors.nisn }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NIK</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.nik" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.nik" class="text-xs text-red-500 ml-2">{{ form.errors.nik }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. Kartu Keluarga</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.no_kk" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.no_kk" class="text-xs text-red-500 ml-2">{{ form.errors.no_kk }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tempat lahir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.place_of_birth" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.place_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.place_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tanggal lahir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.date_of_birth" type="date" class="input input-primary w-full" />
                            <p v-if="form.errors.date_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.date_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Jenis kelamin</label>
                        </div>
                        <div class="lg:col-span-2">
                            <select v-model="form.gender" class="select select-bordered select-primary w-full lg:col-span-2">
                                <option disabled="disabled" selected="selected">jenis kelamin</option>
                                <option>Perempuan</option>
                                <option>Laki-Laki</option>
                            </select>
                            <p v-if="form.errors.gender" class="text-xs text-red-500 ml-2">{{ form.errors.gender }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Anak ke-</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.child_order" type="number" class="input input-primary w-full" />
                            <p v-if="form.errors.child_order" class="text-xs text-red-500 ml-2">{{ form.errors.child_order }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Jumlah saudara</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.total_brother" type="number" class="input input-primary w-full" />
                            <p v-if="form.errors.total_brother" class="text-xs text-red-500 ml-2">{{ form.errors.total_brother }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. HP/WA</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.phone" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.phone" class="text-xs text-red-500 ml-2">{{ form.errors.phone }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Alamat lengkap</label>
                        </div>
                        <div class="lg:col-span-2">
                            <textarea v-model="form.address" name="" id="" class="textarea h-24 textarea-bordered textarea-primary w-full"></textarea>
                            <p v-if="form.errors.address" class="text-xs text-red-500 ml-2">{{ form.errors.address }}</p>
                        </div>
                    </div>
                </div>
                <div class="my-8">
                    <h2 class="text-xl font-bold">Data Ayah</h2>
                    <div class="grid grid-col-1 lg:grid-cols-3 gap-y-2 items-center">
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Nama lengkap</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_name" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_name" class="text-xs text-red-500 ml-2">{{ form.errors.father_name }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NIK</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_nik" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_nik" class="text-xs text-red-500 ml-2">{{ form.errors.father_nik }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tempat lahir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_place_of_birth" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_place_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.father_place_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tanggal lahir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_date_of_birth" type="date" class="input input-primary w-full" />
                            <p v-if="form.errors.father_date_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.father_date_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pendidikan Terakhir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_last_education" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_last_education" class="text-xs text-red-500 ml-2">{{ form.errors.father_last_education }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pekerjaan</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_profession" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_profession" class="text-xs text-red-500 ml-2">{{ form.errors.father_profession }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. HP/WA</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.father_phone" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.father_phone" class="text-xs text-red-500 ml-2">{{ form.errors.father_phone }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Alamat lengkap</label>
                        </div>
                        <div class="lg:col-span-2">
                            <textarea v-model="form.father_address" name="" id="" class="textarea h-24 textarea-bordered textarea-primary w-full"></textarea>
                            <p v-if="form.errors.father_address" class="text-xs text-red-500 ml-2">{{ form.errors.father_address }}</p>
                        </div>
                    </div>
                </div>
                <div class="my-8">
                    <h2 class="text-xl font-bold">Data Ibu</h2>
                    <div class="grid grid-col-1 lg:grid-cols-3 gap-y-2 items-center">
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Nama lengkap</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_name" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_name" class="text-xs text-red-500 ml-2">{{ form.errors.mother_name }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">NIK</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_nik" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_nik" class="text-xs text-red-500 ml-2">{{ form.errors.mother_nik }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tempat lahir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_place_of_birth" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_place_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.mother_place_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Tanggal lahir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_date_of_birth" type="date" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_date_of_birth" class="text-xs text-red-500 ml-2">{{ form.errors.mother_date_of_birth }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pendidikan Terakhir</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_last_education" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_last_education" class="text-xs text-red-500 ml-2">{{ form.errors.mother_last_education }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Pekerjaan</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_profession" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_profession" class="text-xs text-red-500 ml-2">{{ form.errors.mother_profession }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">No. HP/WA</label>
                        </div>
                        <div class="lg:col-span-2">
                            <input v-model="form.mother_phone" type="text" class="input input-primary w-full" />
                            <p v-if="form.errors.mother_phone" class="text-xs text-red-500 ml-2">{{ form.errors.mother_phone }}</p>
                        </div>
                        <div class="">
                            <label for="" class="w-full text-md capitalize">Alamat lengkap</label>
                        </div>
                        <div class="lg:col-span-2">
                            <textarea v-model="form.mother_address" name="" id="" class="textarea h-24 textarea-bordered textarea-primary w-full"></textarea>
                            <p v-if="form.errors.mother_address" class="text-xs text-red-500 ml-2">{{ form.errors.mother_address }}</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mb-5 w-full px-8">
                    <button @click="save" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'

export default {
    components: {
        AuthenticatedLayout,
        Head,
        Link,
    },
    data() {
        return {
            form: this.$inertia.form(this.registrar),
        }
    },
    props: {
        registrar: Object,
    }
}
</script>

<template>
    <Head :title="title" />

    <AuthenticatedLayout>
        <template #header>
            {{ title }}
        </template>

        <div class="w-full md:flex md:flex-col md:gap-3 w-full xl:w-2/3 mb-24">
            <Link :href="back" class="btn w-fit"> <i class="fas fa-angle-left"></i> &nbsp; Kembali</Link>
            <div class="form-control">
                <label class="label md:w-24">
                    <span class="label-text md:text-lg">Judul</span>
                </label> 
                <input type="text" placeholder="judul" class="input input-primary input-bordered w-full">
            </div>
            <div class="">
                <label for="article-image" class="label md:w-24">
                    <span class="label-text md:text-lg">Gambar</span>
                </label>
                <div class="h-fit w-full bg-white border-dashed border border-primary rounded">
                    <label v-if="!image" for="article-image" class="h-36 w-full">
                        <div class="h-full my-4 text-center text-gray-500">
                            <i class="fas fa-image fa-4x"></i>
                            <p>Klik Untuk Pilih Gambar</p>
                        </div>
                    </label>
                    <div v-else class="w-full text-center">
                        <img :src="image" alt="" class="mx-auto">
                    </div>
                </div>
                <button v-if="image" @click="resetImage" class="btn btn-error btn-xs btn-outline mt-2"><i class="fas fa-times"></i> &nbsp; Hapus Gambar</button>
                <input @change="uploadedImage($event)" id="article-image" type="file" accept="image/*" class="hidden">
            </div>
            <div class="">
                <label class="label md:w-56">
                    <span class="label-text md:text-lg">Konten</span>
                </label>
                <div class="h-[650px] pb-24">
                    <QuillEditor :options="options" ref="quill" />
                </div>
            </div> 
            <button @click="save" class="btn btn-primary btn-block">Simpan</button>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { QuillEditor } from '@vueup/vue-quill'
import ImageCompress from 'quill-image-compress'

import '@vueup/vue-quill/dist/vue-quill.snow.css'

export default {
    data () {
        return {
            options: {
                modules: {
                    toolbar: [['bold', 'italic'], ['link','video', 'image'], [{ 'list': 'ordered'}, { 'list': 'bullet' }]],
                },
            },
            image: null,
        }
    },
    components: {
        AuthenticatedLayout,
        Head,
        Link,
        QuillEditor,
        ImageCompress
    },
    props: {
        title: {
            default: 'artikel',
            type: String,
        },
        back: {
            required: true,
        }
    },
    methods: {
        uploadedImage(event) {
            var img = event.target.files[0];
            // this.form.image = img;
            this.image = URL.createObjectURL(img);
        },
        resetImage() {
            this.image = null;
            // this.form.image = null;
        },
        save() {
            console.log(this.$refs.quill.getHTML());
        }
    }
}
</script>

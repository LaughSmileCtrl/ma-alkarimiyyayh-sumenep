<template>
    <Head :title="title" />

    <AuthenticatedLayout>
        <template #header>
            {{ title }}
        </template>

        <div class="w-full md:flex md:flex-col md:gap-3 w-full xl:w-2/3 mb-24">
            <Link :href="links.back" class="btn w-fit"> <i class="fas fa-angle-left"></i> &nbsp; Kembali</Link>
            <div class="form-control">
                <label class="label md:w-24">
                    <span class="label-text md:text-lg">Judul</span>
                </label> 
                <input v-model="form.title" type="text" placeholder="judul" class="input input-primary input-bordered w-full">
                <p v-if="errors.title" class="text-red-500 text-xs"> {{ errors.title }}</p>
            </div>
            <div v-if="authorOption" class="form-control">
                <label class="label md:w-24">
                    <span class="label-text md:text-lg">Penulis</span>
                </label> 
                <input v-model="form.author" type="text" placeholder="penulis" class="input input-primary input-bordered w-full">
                <p v-if="errors.author" class="text-red-500 text-xs"> {{ errors.author }}</p>
            </div>
            <div class="">
                <label for="article-image" class="label md:w-24">
                    <span class="label-text md:text-lg">Gambar</span>
                </label>
                <div class="h-fit w-full bg-white border-dashed border border-primary rounded">
                    <label v-if="imgSrc == '/images/article/'" for="article-image" class="h-36 w-full">
                        <div class="h-full my-4 text-center text-gray-500">
                            <i class="fas fa-image fa-4x"></i>
                            <p>Klik Untuk Pilih Gambar</p>
                        </div>
                    </label>
                    <div v-else class="w-full text-center">
                        <img :src="imgSrc" alt="" class="mx-auto">
                    </div>
                </div>
                <button v-if="imgSrc != '/images/article/'" @click="resetImage" class="btn btn-error btn-xs btn-outline mt-2"><i class="fas fa-times"></i> &nbsp; Hapus Gambar</button>
                <p v-if="errors.image" class="text-red-500 text-xs my-2"> {{ errors.image }}</p>
                <input @change="uploadedImage($event)" id="article-image" type="file" accept="image/*" class="hidden">

            </div>
            <div class="">
                <label class="label md:w-56">
                    <span class="label-text md:text-lg">Konten</span>
                </label>
                <div class="h-[650px] pb-24">
                    <QuillEditor :options="options" contentType="html" v-model:content="form.content" ref="quill" />
                    <p v-if="errors.content" class="text-red-500 text-xs"> {{ errors.content }}</p>
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

import '@vueup/vue-quill/dist/vue-quill.snow.css'

export default {
    data () {
        return {
            options: {
                modules: {
                    toolbar: [['bold', 'italic'], ['link','video']],
                },
            },
            form: this.$inertia.form(this.article),
            imgSrc: '/images/article/'+this.article.image,
        }
    },
    components: {
        AuthenticatedLayout,
        Head,
        Link,
        QuillEditor,    },
    props: {
        title: {
            default: 'artikel',
            type: String,
        },
        links: {
            type: Object,
        },
        article:{
            default: {
                title: '',
                author: null,
                image: '',
                content: null,
                _method: 'post',
            }
        },
        errors: Object,
        authorOption: {
            default: false,
        }
    },
    methods: {
        uploadedImage(event) {
            var img = event.target.files[0];
            this.form.image = img;
            this.imgSrc = URL.createObjectURL(img);
        },
        resetImage() {
            this.imgSrc = '/images/article/';
            this.form.image = null;
            this.errors.image = null;
        },
        save() {
            if(typeof this.form.image == 'string') {
                this.form.image = null;
            }

            this.$inertia.post(this.links.save, this.form, {
                onSuccess: (page) => {
                    this.form.reset();
                    this.resetImage();
                    this.$refs.quill.setHTML('');

                    this.$swal('Berhasil', page.props.flash.message, 'success');
                    this.$inertia.get(this.links.back);
                },
                onError: (message) => {
                    this.$swal('Gagal Menyimpan', message, 'error')

                }
            });
        }
    }
}
</script>

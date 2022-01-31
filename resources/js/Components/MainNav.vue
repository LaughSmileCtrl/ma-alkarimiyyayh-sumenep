<template>
    <div class="">
        <div class="">
            <div class="relative z-40 w-full">
                <div :class="navClassify">
                    <div class="flex justify-between py-1 mb-2">
                        <Link
                            :href="route('home')"
                            class="flex flex-row items-center lg:pr-12"
                        >
                            <img
                                src="/images/logo.png"
                                alt="MA Al Karimiyyah"
                                class="h-14 w-14"
                            />
                            <div class="text-left">
                                <h2 class="mx-3 font-semibold">
                                    MA AL-KARIMIYYAH SUMENEP
                                </h2>
                                <h2 class="mx-3 text-sm">
                                    Madrasah Hebat Bermartabat
                                </h2>
                            </div>
                        </Link>
                        <div class="flex flex-row items-center uppercase">
                            <div class="hidden lg:flex items-center">
                                <Link
                                    :href="route('home')"
                                    class="
                                        font-medium
                                        text-sm
                                        py-1
                                        px-2
                                        hover:bg-green-400
                                        rounded
                                        block
                                    "
                                    >Beranda</Link
                                >
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="font-medium">
                                            Profil&nbsp;&#9662;
                                        </p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('history')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    uppercase
                                                    my-1
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Sejarah</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('visionmission')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Visi Misi</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('structural')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Struktur&nbsp;Organisasi</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('teacher.index')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Data&nbsp;Guru</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('contact')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Kontak&nbsp;Kami</Link
                                            >
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="font-medium">
                                            Kesiswaan&nbsp;&#9662;
                                        </p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('department')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Jurusan</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('extracurricular')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Ekstrakurikuler</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="
                                                    route('achivement.index')
                                                "
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Data&nbsp;Prestasi</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('graduate.index')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Data&nbsp;Alumni</Link
                                            >
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="font-medium">
                                            Artikel&nbsp;&#9662;
                                        </p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('news.index')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Berita</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="
                                                    route(
                                                        'student-creations.index'
                                                    )
                                                "
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Karya&nbsp;Siswa</Link
                                            >
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                                <Link
                                    :href="route('ppdb.index')"
                                    class="
                                        font-medium
                                        text-sm
                                        py-1
                                        px-2
                                        hover:bg-green-400
                                        rounded
                                        block
                                    "
                                    >PPDB</Link
                                >
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="font-medium">
                                            Arsip&nbsp;&#9662;
                                        </p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('photo.index')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Album</Link
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link
                                                :href="route('document.index')"
                                                class="
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >Dokumen</Link
                                            >
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="font-medium">
                                            Tautan&nbsp;&#9662;
                                        </p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <a
                                                href="http://e-raport.maalkarimiyyah.sch.id"
                                                target="_blank"
                                                class="
                                                    w-24
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >E-Raport</a
                                            >
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <a
                                                href="https://e-library.erlanggaonline.co.id"
                                                target="_blank"
                                                class="
                                                    w-24
                                                    font-medium
                                                    text-sm
                                                    py-1
                                                    px-2
                                                    hover:bg-green-400
                                                    rounded
                                                    block
                                                "
                                                >E-Library</a
                                            >
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                            </div>
                            <div class="flex lg:hidden">
                                <label
                                    for="drawer"
                                    class="btn btn-square btn-ghost"
                                >
                                    <i class="fas fa-align-justify"></i>
                                </label>
                                <input
                                    id="drawer"
                                    v-model="drawer"
                                    class="hidden"
                                    type="checkbox"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Drawer -->

            <div
                v-if="drawer"
                class="
                    text-white
                    lg:hidden
                    fixed
                    h-screen
                    w-60
                    bg-primary
                    z-50
                    top-0
                    bottom-0
                    right-0
                    shadow
                    overflow-x-auto
                "
            >
                <div class="m-3">
                    <label
                        for="drawer"
                        class="font-medium text-sm py-1 px-2 btn-sm"
                    >
                        <i class="fas fa-times"></i>
                    </label>
                </div>
                <ul class="list-none m-5">
                    <li
                        :class="
                            'px-3 py-2 w-full ' +
                            activeClass(route().current('home'))
                        "
                    >
                        <Link :href="route('home')" class="h-full w-full block"
                            >Beranda</Link
                        >
                    </li>
                    <li class="w-full">
                        <SideSubmenu>
                            <template #menu> Profil &#9662; </template>
                            <template #submenu>
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(route().current('history'))
                                    "
                                    ><Link
                                        :href="route('history')"
                                        class="w-full h-full block"
                                        >Sejarah</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('visionmission')
                                        )
                                    "
                                    ><Link
                                        :href="route('visionmission')"
                                        class="w-full h-full block"
                                        >Visi Misi</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('structural')
                                        )
                                    "
                                    ><Link
                                        :href="route('structural')"
                                        class="w-full h-full block"
                                        >Struktur&nbsp;Organisasi</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('teacher.index')
                                        )
                                    "
                                    ><Link
                                        :href="route('teacher.index')"
                                        class="w-full h-full block"
                                        >Data Guru</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(route().current('contact'))
                                    "
                                    ><Link
                                        :href="route('contact')"
                                        class="w-full h-full block"
                                        >Kontak Kami</Link
                                    ></MenuItem
                                >
                            </template>
                        </SideSubmenu>
                    </li>
                    <li class="">
                        <SideSubmenu>
                            <template #menu> Kesiswaan &#9662; </template>
                            <template #submenu>
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('department')
                                        )
                                    "
                                    ><Link
                                        :href="route('department')"
                                        class="w-full h-full block"
                                        >Jurusan</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('extracurricular')
                                        )
                                    "
                                    ><Link
                                        :href="route('extracurricular')"
                                        class="w-full h-full block"
                                        >Ekstrakurikuler</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('achivement.index')
                                        )
                                    "
                                    ><Link
                                        :href="route('achivement.index')"
                                        class="w-full h-full block"
                                        >Data Prestasi</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('graduate.index')
                                        )
                                    "
                                    ><Link
                                        :href="route('graduate.index')"
                                        class="w-full h-full block"
                                        >Data Alumni</Link
                                    ></MenuItem
                                >
                            </template>
                        </SideSubmenu>
                    </li>
                    <li class="">
                        <SideSubmenu>
                            <template #menu> Artikel &#9662; </template>
                            <template #submenu>
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('news.index')
                                        )
                                    "
                                    ><Link
                                        :href="route('news.index')"
                                        class="w-full h-full block"
                                        >Berita</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current(
                                                'student-creations.index'
                                            )
                                        )
                                    "
                                    ><Link
                                        :href="route('student-creations.index')"
                                        class="w-full h-full block"
                                        >Karya Siswa</Link
                                    ></MenuItem
                                >
                            </template>
                        </SideSubmenu>
                    </li>
                    <li
                        :class="
                            'px-3 py-2 w-full block ' +
                            activeClass(route().current('ppdb.index'))
                        "
                    >
                        <Link
                            :href="route('ppdb.index')"
                            class="w-full h-full block"
                            >PPDB</Link
                        >
                    </li>
                    <li class="">
                        <SideSubmenu>
                            <template #menu> Arsip &#9662; </template>
                            <template #submenu>
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('photo.index')
                                        )
                                    "
                                    ><Link
                                        :href="route('photo.index')"
                                        class="w-full h-full block"
                                        >Album</Link
                                    ></MenuItem
                                >
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('document.index')
                                        )
                                    "
                                    ><Link
                                        :href="route('document.index')"
                                        class="w-full h-full block"
                                        >Dokumen</Link
                                    ></MenuItem
                                >
                            </template>
                        </SideSubmenu>
                    </li>
                    <li class="">
                        <SideSubmenu>
                            <template #menu> Tautan &#9662; </template>
                            <template #submenu>
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('photo.index')
                                        )
                                    "
                                >
                                    <a
                                        href="http://e-raport.maalkarimiyyah.sch.id"
                                        target="_blank"
                                        class="w-full h-full block"
                                        >E-Raport</a
                                    >
                                </MenuItem>
                                <MenuItem
                                    :class="
                                        'px-4 py-2 w-full block ' +
                                        activeClass(
                                            route().current('photo.index')
                                        )
                                    "
                                >
                                    <a
                                        href="https://e-library.erlanggaonline.co.id"
                                        target="_blank"
                                        class="w-full h-full block"
                                        >E-Library</a
                                    >
                                </MenuItem>
                            </template>
                        </SideSubmenu>
                    </li>
                    <li class="px-4 py-2 w-full block"></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import NavSubmenu from "@/Components/NavSubMenu.vue";
import SideSubmenu from "@/Components/SideSubMenu.vue";
import { MenuItem } from "@headlessui/vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        NavSubmenu,
        SideSubmenu,
        MenuItem,
        Link,
    },
    props: {
        background: {
            default: true,
            type: Boolean,
        },
    },
    data() {
        return {
            drawer: false,
        };
    },
    methods: {
        activeClass(state) {
            return state
                ? "rounded-xl text-gray-600 bg-gray-100 shadow-inner shadow-gray-700/70"
                : "";
        },
    },
    computed: {
        navClassify() {
            return this.background
                ? "absolute inset-x-0 md:px-7 lg:px-20 xl:px-44 2xl:px-60 py-1 text-white bg-primary"
                : "absolute inset-x-0 md:px-7 lg:px-20 xl:px-44 2xl:px-60 py-1 text-white ";
        },
    },
};
</script>

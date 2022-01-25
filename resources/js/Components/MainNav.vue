<template>
    <div class="container">
        <div class="absolute inset-x-1 md:inset-x-7 lg:inset-x-20 xl:inset-x-44 2xl:inset-x-60">
            <div class="relative z-40 w-full">
                <div class="">
                    <div class="navbar mb-2">
                        <div class="navbar-start">
                            <img
                                src="/images/logo.png"
                                alt="MA Al Karimiyyah"
                                class="h-14 w-14"
                            />
                            <div class="text-left hidden md:block">
                                <h2 class="mx-3 text-sm">Madrasah Aliyah</h2>
                                <h2 class="mx-3">Al-Karimiyyah Sumenep</h2>
                            </div>
                        </div>
                        <div class="hidden navbar-end lg:flex uppercase">
                            <div class="flex items-center">
                                <Link :href="route('home')" class="font-medium text-sm px-2 rounded">Beranda</Link>
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="">Profil&nbsp;&#9662;</p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link :href="route('history')" class="font-medium text-sm uppercase my-1 hover:bg-green-400 rounded block">Sejarah</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('visionmission')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Visi Misi</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('structural')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Struktur&nbsp;Organisasi</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('teacher.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Data&nbsp;Guru</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('contact')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Kontak&nbsp;Kami</Link>
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="">Kesiswaan&nbsp;&#9662;</p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link :href="route('department')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Jurusan</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('extracurricular')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Ekstrakurikuler</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('achivement.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Data&nbsp;Prestasi</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('graduate.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Data&nbsp;Alumni</Link>
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="">Artikel&nbsp;&#9662;</p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link :href="route('news.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Berita</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('student-creations.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Karya&nbsp;Siswa</Link>
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>
                                <Link :href="route('ppdb.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">PPDB</Link>
                                <NavSubmenu>
                                    <template #menu>
                                        <p class="">Arsip&nbsp;&#9662;</p>
                                    </template>
                                    <template #submenu>
                                        <MenuItem class="py-1">
                                            <Link :href="route('photo.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Album</Link>
                                        </MenuItem>
                                        <MenuItem class="py-1">
                                            <Link :href="route('document.index')" class="font-medium text-sm py-1 px-2 hover:bg-green-400 rounded block">Dokumen</Link>
                                        </MenuItem>
                                    </template>
                                </NavSubmenu>

                            </div>
                        </div>
                        <div class="flex lg:hidden navbar-end">
                            <label for="drawer" class="btn btn-square btn-ghost">
                                <i class="fas fa-align-justify"></i>
                            </label>
                            <input id="drawer" v-model="drawer" class="hidden" type="checkbox">
                            <div v-if="drawer" class="text-white lg:hidden fixed h-screen w-60 bg-primary z-50 top-0 bottom-0 right-0 shadow overflow-x-auto">
                                <div class="m-3">
                                    <label for="drawer" class="font-medium text-sm py-1 px-2 btn-sm ">
                                        <i class="fas fa-times"></i>
                                    </label>
                                </div>
                                <ul class="list-none m-5" >
                                    <li :class="'px-3 py-2 w-full '+ activeClass(route().current('home'))"><Link :href="route('home')" class="h-full w-full">Beranda</Link></li>
                                    <li class="w-full">
                                        <SideSubmenu>
                                            <template #menu>
                                                Profile &#9662;
                                            </template>
                                            <template #submenu>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('history'))"><Link :href="route('history')">Sejarah</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('visionmission'))"><Link :href="route('visionmission')">Visi Misi</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('structural'))"><Link :href="route('structural')">Struktur&nbsp;Organisasi</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('teacher.index'))"><Link :href="route('teacher.index')">Data Guru</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('contact'))"><Link :href="route('contact')">Kontak Kami</Link></MenuItem>
                                            </template>
                                        </SideSubmenu>
                                    </li>
                                    <li class="">
                                        <SideSubmenu>
                                            <template #menu>
                                                Kesiswaan &#9662;
                                            </template>
                                            <template #submenu>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('department'))"><Link :href="route('department')">Jurusan</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('extracurricular'))"><Link :href="route('extracurricular')">Ekstrakurikuler</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('achivement.index'))"><Link :href="route('achivement.index')">Data Prestasi</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('graduate.index'))"><Link :href="route('graduate.index')">Data Alumni</Link></MenuItem>
                                            </template>
                                        </SideSubmenu>
                                    </li>
                                    <li class="">
                                        <SideSubmenu>
                                            <template #menu>
                                                Artikel &#9662;
                                            </template>
                                            <template #submenu>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('news.index'))"><Link :href="route('news.index')">Berita</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('student-creations.index'))"><Link :href="route('student-creations.index')">Karya Siswa</Link></MenuItem>
                                            </template>
                                        </SideSubmenu>
                                    </li>
                                    <li :class="'px-4 py-2 w-full block ' + activeClass(route().current('ppdb.index'))"><Link :href="route('ppdb.index')">PPDB</Link></li>
                                    <li class="">
                                        <SideSubmenu>
                                            <template #menu>
                                                Arsip &#9662;
                                            </template>
                                            <template #submenu>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('photo.index'))"><Link :href="route('photo.index')">Album</Link></MenuItem>
                                                <MenuItem :class="'px-4 py-2 w-full block ' + activeClass(route().current('document.index'))"><Link :href="route('document.index')">Dokumen</Link></MenuItem>
                                            </template>
                                        </SideSubmenu>
                                    </li>
                                    <li class="px-4 py-2 w-full block"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NavSubmenu from '@/Components/NavSubMenu.vue'
import SideSubmenu from '@/Components/SideSubMenu.vue'
import { MenuItem } from '@headlessui/vue'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
		NavSubmenu,
        SideSubmenu,
		MenuItem,
        Link,
    },
    data() {
       return {
            drawer: false,
        }
    },
    methods: {
        activeClass(state) {
            return state
                ? 'rounded-xl text-gray-600 bg-gray-100 shadow-inner shadow-gray-700/70'
                : '';
        }
    }
}
</script>

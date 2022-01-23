<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <div class="flex flex-row">
                    <!-- <div class="w-56 bg-primary h-screen fixed"></div> -->
                    <div class="w-full">
                        <div class="flex flex-col">
                            <div class="flex justify-start items-center bg-white shadow-lg h-16 px-4 sm:px-6 lg:px-8 ">
                                <div class="flex">
                                    <div class="lg:hidden shrink-0 flex items-center">
                                        <label for="drawer" class="btn btn-primary btn-sm lg:hidden"><i class="fas fa-align-left"></i></label>
                                        <input type="checkbox" id="drawer" v-model="drawerStatus" class="hidden">
                                    </div>
                                </div>
                                <div class="lg:ml-72">
                                    <h2 class="font-semibold text-xl text-gray-600 leading-tight uppercase">
                                        <slot name="header" />
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-if="showDrawer" class="fixed top-0 bottom-0 bg-primary w-64 md:w-72 text-white z-50 overflow-y-auto">
                    <div class="flex flex-row p-2 items-center gap-3">
                        <img src="/images/logo.png" alt="" class="w-12 h-12">
                        <div class="">
                            <h2 class="text-md">Madrasah Aliyah</h2>
                            <h2 class="text-lg font-bold">Al-Karimiyyah Sumenep</h2>
                        </div>
                    </div>
                    <div class="my-3">
                        <ul class="list-none m-5" @click="hideDrawer">
                            <li :class="linkSideBarClassify(route().current('dashboard.index'))"><Link :href="route('dashboard.index')" class="h-full w-full"> <i class="fas fa-home"></i> &nbsp; Dashboard</Link></li>
                            <li :class="linkSideBarClassify(route().current('teachers.index'))"><Link :href="route('teachers.index')" class="h-full w-full"> <i class="fas fa-users"></i> &nbsp; Guru</Link></li>
                            <li>
                                <ul class="border-y border-white">
                                    <li class="p-3 font-medium">Kesiswaan</li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('achivements.index'))"> <Link :href="route('achivements.index')" class="h-full w-full"><i class="fas fa-trophy w-5"></i> &nbsp; Prestasi</Link></li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('graduates.index'))"> <Link :href="route('graduates.index')" class="h-full w-full"><i class="fas fa-graduation-cap w-5"></i> &nbsp; Alumni</Link></li>
                                </ul>
                               
                            </li>
                            <li>
                                <ul class="border-y border-white">
                                    <li class="p-3 font-medium">Arsip</li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('gallery.index'))"> <Link :href="route('gallery.index')" class="h-full w-full"><i class="fas fa-border-all w-5"></i> &nbsp; Album</Link></li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('mail-in.index'))"> <Link :href="route('mail-in.index')" class="h-full w-full"><i class="fas fa-share w-5"></i> &nbsp; Surat Masuk</Link></li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('mail-out.index'))"> <Link :href="route('mail-out.index')" class="h-full w-full"><i class="fas fa-reply w-5"></i> &nbsp; Surat Keluar</Link></li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('certificates.index'))"> <Link :href="route('certificates.index')" class="h-full w-full"><i class="fas fa-file w-5"></i> &nbsp; Ijazah</Link></li>
                                </ul>
                               
                            </li>
                            <li>
                                <ul class="border-y border-white">
                                    <li class="p-3 font-medium">Artikel</li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('news.index'))"><Link :href="route('news.index')" class="h-full w-full"> <i class="fas fa-newspaper w-5"></i> &nbsp; Berita</Link></li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('student-creations.index'))"><Link :href="route('student-creations.index')" class="h-full w-full"> <i class="fas fa-file-alt w-5"></i> &nbsp; Karya Siswa</Link></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="border-y border-white">
                                    <li class="p-3 font-medium">PPDB</li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('ppdb.index'))"><Link :href="route('ppdb.index')" class="h-full w-full"> <i class="fas fa-users w-5"></i> &nbsp; Data Masuk</Link></li>
                                    <li :class="'ml-4 ' + linkSideBarClassify(route().current('ppdb.settings'))"><Link :href="route('ppdb.settings')" class="h-full w-full"> <i class="fas fa-cog w-5"></i> &nbsp; Pengaturan</Link></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="m-5 mt-10">
                        <div class="w-full p-3">
                            <Link href="" class="h-full w-full"> <i class="fas fa-sign-out-alt text-[#AD1010]"></i> &nbsp; Logout</Link>
                        </div>
                    </div>
                </div>
                <div @click="closeDrawer" v-if="showDrawer" id="overlay" class="lg:hidden fixed w-screen h-screen top-0 left-0 bg-gray-700/50 z-40">
                    <div class="ml-64 md:ml-72 mt-3">
                        <button class="btn btn-ghost text-white"><i class="fas fa-times fa-2x"></i></button>
                    </div>
                </div>

            </nav>

            <!-- Page Content -->
            <main class="lg:ml-72">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>

<script>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeApplicationLogo,
        Link,
    },

    data() {
        return {
            drawerStatus: false,
        }
    },
    computed: {
        showDrawer() {
            return (window.innerWidth >= 1024)
                ? true
                : this.drawerStatus;
        }
    },
    methods: {
        closeDrawer() {
            this.drawerStatus = false;
        },
        linkSideBarClassify(status) {
			return status
				? 'p-3 rounded-xl text-gray-600 bg-gray-100 shadow-inner shadow-gray-700/70'
				: 'p-3 rounded-xl';
		},
    }
}
</script>

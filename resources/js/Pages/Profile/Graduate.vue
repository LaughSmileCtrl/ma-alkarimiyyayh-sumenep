<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>

    <section class="container pt-36 pb-12 min-h-screen">
        <h2 class="text-3xl lg:text-4xl font-bold uppercase text-center my-8">
            Data Alumni
        </h2>
        <div
            class="
                flex flex-col-reverse
                f
                md:flex-row
                justify-between
                gap-4
                items-center
                md:items-start
                my-4
            "
        >
            <div class="text-center md:text-left">
                <select
                    @change="query(graduates.path)" v-model="yearSelected"
                    class="select select-bordered select-primary max-w-xs mb-2"
                >
                    <option value="" disabled="disabled" selected="selected"> Pilih Tahun Lulus </option>
                    <option v-for="year in years" :key="year">{{ year }}</option>

                </select>
                <div class="w-36 md:w-56">
                    <div v-if="yearSelected" class="badge text-xs">
                    {{ yearSelected }} <button @click="removeYearSelected" class="btn-ghost btn-xs"><i class="fas fa-times"></i></button>
                    </div>
                </div>

                <p v-if="yearSelected" class="text-xs">
                    Jumlah alumni pada tahun {{ yearSelected }} adalah {{ graduates.total }} orang
                </p>
            </div>
            <div class="">
                <div class="form-control">
                    <input @keyup="query(graduates.path)" v-model="searchQuery" type="text" class="input input-primary w-36 md:w-56 bg-gray-50 shadow-inner shadow-gray-700/70" placeholder="Cari" />
                </div>
                <div class="w-36 md:w-56">
                    <div v-if="searchQuery" class="badge text-xs">
                    {{ searchQuery }} <button @click="removeSearchQuery" class="btn-ghost btn-xs"><i class="fas fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <table class="w-full table-auto p-4 bg-white shadow rounded-xl">
            <thead class="bg-green-400 text-white rounded-xl text-left">
                <tr>
                    <th class="border-b-2 p-4 whitespace-nowrap font-medium">
                        #
                    </th>
                    <th class="border-b-2 p-4 whitespace-nowrap font-medium">
                        Nama
                    </th>
                    <th class="border-b-2 p-4 whitespace-nowrap font-medium">
                        Tahun Lulus
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(graduate, i) in graduates.data" :key="i" class="text-gray-700">
                    <td class="border-b-2 p-4">{{ graduates.from + i }}</td>
                    <td class="border-b-2 p-4">{{ graduate.name }}</td>
                    <td class="border-b-2 p-4">{{ graduate.year }}</td>
                </tr>
            </tbody>
        </table>
        <div class="my-5">
            <Pagination :links="graduates.links" @changePage="query" />
        </div>
    </section>

    <Footer />
</template>

<script>
import MainNav from "@/Components/MainNav.vue"
import Footer from "@/Components/Footer.vue"
import Pagination from '@/Components/Pagination.vue'

export default {
    components: {
        MainNav,
        Footer,
        Pagination,
    },
    props: {
        graduates: Object,
        years: Object,
    },
    data() {
        return {
            yearSelected: '',
            searchQuery: '',
        }
    },
    methods: {
        removeYearSelected() {
            this.yearSelected = ''
            this.query(this.graduates.path);
        },
        removeSearchQuery() {
            this.searchQuery = ''
            this.query(this.graduates.path);
        },
        query(url) {
            this.$inertia.get(url, {search: this.searchQuery, year: this.yearSelected}, {only: ['graduates'], preserveState: true,});
        },
    },
};
</script>
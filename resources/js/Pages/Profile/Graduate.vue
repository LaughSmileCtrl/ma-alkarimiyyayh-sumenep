<template>
    <section class="max-w-screen">
        <MainNav class="text-gray-900" />
    </section>

    <section class="container pt-24 pb-12">
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
                    class="select select-bordered select-primary max-w-xs mb-2"
                >
                    <option disabled="disabled" selected="selected">
                        Pilih Tahun Lulus
                    </option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                </select>
                <p class="text-xs">
                    Jumlah alumni pada tahun yang dipilih: 302
                </p>
            </div>
            <div class="">
                <div class="form-control">
                    <input
                        type="text"
                        placeholder="cari nama"
                        class="input input-primary input-bordered"
                    />
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
                <tr v-for="i in 30" :key="i" class="text-gray-700">
                    <td class="border-b-2 p-4">{{ i }}</td>
                    <td class="border-b-2 p-4">Jean Marc</td>
                    <td class="border-b-2 p-4">2019</td>
                </tr>
            </tbody>
        </table>
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
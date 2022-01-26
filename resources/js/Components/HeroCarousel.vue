<template>
    <Swiper
        :spaceBetween="10"
        :loop="true"
        :centeredSlides="true"
        :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
        }"
        :pagination="{
            clickable: true,
        }"
        class="relative top-0 -z-10 h-screen max-w-screen"
    >
        <slot />
    </Swiper>
</template>

<script>
import SwiperCore, {Autoplay,Pagination} from 'swiper';

import { Swiper } from 'swiper/vue';

import 'swiper/css';
import "swiper/css/pagination"

SwiperCore.use([Autoplay, Pagination]);


export default {
    components: {
        Swiper,
    },
};
</script>

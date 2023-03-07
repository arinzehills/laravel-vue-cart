<script>
import { Carousel, Slide } from "vue-carousel";
export default {
    components: {
        Carousel,
        Slide,
    },
};
</script>

<template>
    <div>
        <vue-carousel :per-page="1">
            <!-- <img src="/images/white_shopping.jpg" /> -->
            <!-- <img src="/images/terms.png" /> -->
            <!-- <img src="/images/white_shopping.jpg" /> -->
        </vue-carousel>
    </div>
</template>

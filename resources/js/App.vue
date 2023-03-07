<template>
    <!-- <MyCarousel /> -->
    <NavComponent />
    <div class="app-body">
        <router-view />
        <!-- <div><h3>This is the entry dpoint of the app</h3></div> -->
    </div>
</template>

<script>
import NavComponent from "./components/NavComponent.vue";

export default {
    components: {
        NavComponent,
    },
    // mounted() {
    //     console.log("Component mounted.");
    // },
    created() {
        this.$store.commit("loadCartItems");
    },
};
</script>
<style>
/* Styles for App.vue go here */
.app-body {
    padding: 1rem;
}
</style>

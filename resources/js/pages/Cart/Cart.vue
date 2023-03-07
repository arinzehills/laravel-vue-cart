<template>
    <div class="centerClass withColumn" style="gap: 2rem">
        <div class="cart-container">
            <h3 class="cart-header">Your Cart</h3>
            <Item v-for="item in items" :item="item" :key="item" />
        </div>
        <CartSummary />
    </div>
</template>

<script>
import Item from "./Item.vue";
import CartSummary from "./CartSummary.vue";
export default {
    props: ["items"],
    components: {
        Item,
        CartSummary,
    },
    computed: {
        items() {
            return this.$store.getters.cartItems;
        },
    },
};
</script>

<style>
.centerClass {
    display: flex;
    justify-content: center;
    align-items: center;
}
.cart-container {
    border-radius: 10px;
    padding: 20px;
    margin-top: 2rem;
    margin-bottom: 20px;
    background-color: hsla(0, 0%, 100%, 0.4);
    box-shadow: 14px 14px 60px 0 rgb(59 42 130 / 6%);
    -webkit-backdrop-filter: blur(5px);
    backdrop-filter: blur(5px);
    text-align: left;
    width: 75vw;
}
.cart-header {
    background: white;
    border-radius: 10px;
    padding: 0.5rem;
}
</style>

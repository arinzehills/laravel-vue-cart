<template>
    <div class="cart-summary">
        <p>Sub Total:{{ cart_total }}</p>
        <p>Cart Items:{{ cart_total }}</p>
        <hr />
        <h3>Total Cost: {{ cart_total }}</h3>
        <Button :label="`Checkout ${cart_total}`" />
    </div>
</template>

<script>
import Button from "../../components/Button.vue";
export default {
    // props: ["items"],
    components: {
        Button,
    },
    computed: {
        cart_total() {
            return this.$store.getters.cartTotal.toFixed(2);
        },
    },
};
</script>

<style>
.cart-summary {
    background: white;
    padding: 2rem;
}
</style>

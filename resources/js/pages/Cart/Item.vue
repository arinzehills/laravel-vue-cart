<template>
    <div class="cart-item-container">
        <img
            :src="item.image ?? '/images/white_shopping.jpg'"
            style="height: 140px"
        />
        <div class="column" style="flex-direction: row; width: 60%">
            <div class="column">
                <h3>{{ item.title }}</h3>

                <h5>Price: ${{ item.price }}</h5>
                <Button label="Delete" :onClick="deleteFromCart" />
            </div>
            <div class="column">
                <h3>Total: ${{ item.totalPrice.toFixed(2) }}</h3>
                <div
                    class="column"
                    style="flex-direction: row; align-items: center"
                >
                    <div class="increase-quantity" @click="reduceItemQuantity">
                        -
                    </div>
                    <div>{{ product_total }}</div>
                    <div class="increase-quantity" @click="addToCart">+</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Button from "../../components/Button.vue";
export default {
    props: ["item"],
    methods: {
        addToCart() {
            this.$store.commit("addToCart", this.item);
        },
        reduceItemQuantity() {
            this.$store.commit("removeFromCart", this.item);
        },
        deleteFromCart() {
            this.$store.commit("deleteFromCart", this.item);
        },
    },
    components: {
        Button,
    },
    computed: {
        product_total() {
            return this.$store.getters.productQuantity(this.item);
        },
    },
};
</script>

<style>
.cart-item-container {
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: hsla(0, 0%, 100%, 0.859);
    box-shadow: 14px 14px 60px 0 rgb(59 42 130 / 6%);
    -webkit-backdrop-filter: blur(5px);
    backdrop-filter: blur(5px);
    text-align: left;
    width: 100%;
    height: 180px;
    display: flex;
    gap: 1rem;
}
.increase-quantity {
    background-color: #ff4d4d;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}
.column {
    display: flex;
    gap: 1rem;
    flex-direction: column;
    justify-content: space-between;
}
</style>

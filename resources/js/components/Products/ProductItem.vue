<template>
    <div class="product-card">
        <div class="product-image">
            <img :src="product.image" alt="" />
        </div>
        <div class="product-info">
            <h3>{{ product.title }}</h3>
            <p class="price">{{ product.price }}</p>
        </div>
        <div class="product-action">
            <button class="add-to-cart" @click="addToCart(product)">
                Add to Cart
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        product: {
            type: Object,
            required: true,
        },
    },
    methods: {
        addToCart() {
            this.$store.commit("addToCart", this.product);
        },
    },
    computed: {
        cartPoints() {
            return this.$store.state.cart;
        },
    },
};
</script>

<style scoped>
.product-card {
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    background-color: hsla(0, 0%, 100%, 0.4);
    box-shadow: 14px 14px 60px 0 rgb(59 42 130 / 6%);
    -webkit-backdrop-filter: blur(5px);
    backdrop-filter: blur(5px);
    text-align: left;
    width: 220px;
    height: 280px;
    /* gap: 12rem; */
}

.product-image img {
    max-width: 100%;
    max-height: 120px;
}

.product-info h3 {
    margin: 0;
    font-size: 20px;
    font-weight: bold;
}

.product-info p.price {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
    color: #ff4d4d;
    padding: 15px 0 15px;
}

.product-action {
    text-align: center;
}

.add-to-cart {
    background-color: #ff4d4d;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
}
</style>

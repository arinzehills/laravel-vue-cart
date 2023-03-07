<template>
    <div class="container">
        <div class="grid_class">
            <ProductItem
                v-for="(product, index) in products"
                :key="index"
                :product="product"
                @add-to-cart="addToCart"
            />
        </div>
    </div>
</template>

<script>
import ProductItem from "./ProductItem.vue";
import "bootstrap/dist/css/bootstrap.css";
import items from "./products.js";
import axios from "axios";
export default {
    components: {
        ProductItem,
    },
    mounted() {
        this.fetchProducts();
    },
    data() {
        return {
            products: [],
        };
    },
    methods: {
        addToCart(product) {
            // Add product to cart
        },
        async fetchProducts() {
            await axios
                .get("/api/products")
                .then((response) => {
                    console.log(response.data);
                    this.products = response.data;
                })
                .catch((error) => {
                    console.log(error);
                    this.categories = [];
                });
        },
    },
};
</script>
<style>
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}
.grid_class {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
}
@media screen and (max-width: 1200px) {
    .grid_class {
        grid-template-columns: repeat(3, 1fr);
    }
}
@media screen and (max-width: 760px) {
    .grid_class {
        grid-template-columns: 1fr;
        /* display: none; */
    }
}
</style>

import { createRouter, createWebHistory } from "vue-router";
// import App from "../App.vue";
import store from "../vuex/store";
import Cart from "../pages/Cart/Cart.vue";
import AddProduct from "../pages/Products/addProduct.vue";
import Home from "../pages/Home.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    // {
    //     path: "/about",
    //     name: "Home",
    //     component: App,
    // },
    {
        path: "/cart",
        name: "Cart",
        component: Cart,
    },
    {
        path: "/addProduct",
        name: "Add Product",
        component: AddProduct,
    },
];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;

<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <router-link class="navbar-brand" to="/">Shopping Cart</router-link>
            <router-link class="navbar-brand" to="/cart">
                <div style="right: 85px; position: absolute">
                    <div style="position: absolute" id="cart-count">
                        {{ numberOfItems }}
                    </div>
                    <Icon icon="material-symbols:shopping-cart" width="30" />
                </div>
            </router-link>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
                @click="drawerVisible = true"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="navbar-collapse left-drawer"
                id="navbarNav"
                :style="{
                    width: drawerVisible ? '70vw' : '0',
                    paddingLeft: drawerVisible ? '10px' : '0',
                }"
            >
                <Icon
                    icon="line-md:menu-to-close-alt-transition"
                    width="30"
                    id="close-button"
                    style="right: 15px; position: absolute"
                    @click="drawerVisible = false"
                />
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link class="nav-link" to="/">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/about"
                            >About</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/contact"
                            >Contact</router-link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import { Icon } from "@iconify/vue";
export default {
    name: "Navbar",
    props: ["active"],
    computed: {
        numberOfItems() {
            return this.$store.state.cart.length;
        },
    },
    components: {
        Icon,
    },

    data() {
        return {
            drawerVisible: false,
        };
    },
};
</script>

<style scoped>
.navbar-brand {
    font-weight: bold;
}
#close-button {
    display: none;
}
.nav-link {
    font-weight: 500;
}
#cart-count {
    background-color: #ff4d4d;
    color: #fff;
    border: none;
    display: flex;
    justify-content: center;
    border-radius: 50px;
    height: 20px;
    font-size: 13px;
    width: 20px;
    margin-top: -9px;
    margin-right: -12px;
}
@media (max-width: 991.98px) {
    #close-button {
        display: block;
    }

    .left-drawer {
        position: absolute;
        top: 0;
        right: 0;
        width: 0; /* initially */
        overflow: hidden;
        height: 100vh;
        padding-left: 0; /* initially */
        border-left: 1px solid whitesmoke;
        background: white;
        z-index: 200;
        transition: all 0.2s;
    }
    .navbar-collapse {
        position: fixed;
        top: 56px;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        overflow-y: auto;
        background-color: #fff;
    }
}
</style>

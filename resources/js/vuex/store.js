import { createStore, createLogger } from "vuex";

function updateLocalStorageItem(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
}
export default new createStore({
    state: {
        cart: [],
    },
    getters: {
        productQuantity: (state) => (product) => {
            const item = state.cart.find((item) => item.id === product.id);
            if (item) return item.quantity;
            else return null;
        },
        cartItems: (state) => {
            return state.cart;
        },
        cartTotal: (state) => {
            return state.cart.reduce(
                (initial, item) => initial + item.price * item.quantity,
                0
            );
        },
    },
    mutations: {
        addToCart(state, product) {
            const cartItem = state.cart.find((item) => item.id === product.id);

            if (cartItem) {
                cartItem.quantity += 1;
                cartItem.totalPrice = cartItem.quantity * cartItem.price;
            } else {
                state.cart.push({
                    ...product,
                    quantity: 1,
                    totalPrice: product.price * 1,
                });
            }
            updateLocalStorageItem(state.cart);
        },
        removeFromCart(state, product) {
            const cartItem = state.cart.find((item) => item.id === product.id);
            if (cartItem) {
                if (cartItem.quantity > 1) {
                    cartItem.quantity--;
                } else {
                    state.cart = state.cart.filter((i) => i.id !== product.id);
                }
            }
            updateLocalStorageItem(state.cart);
        },
        deleteFromCart(state, index) {
            state.cart.splice(index, 1);
            localStorage.setItem("cart", JSON.stringify(state.cart));
        },
        // updateCartFromLocalStorage() {
        //     const cart =localStorage.getItem('cart')
        //     if(cart){
        //         state.cart=JSON.parse(cart)
        //     }
        // },
        loadCartItems(state) {
            const cart = localStorage.getItem("cart");
            if (cart) {
                state.cart = JSON.parse(cart);
            }
        },
    },
    actions: {},
    modules: {},
});

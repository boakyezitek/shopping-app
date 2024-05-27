import { defineStore } from "pinia";

export const useCartStore = defineStore('cart', () => {
    const cart = ref([]);

    const addToCart = (item) => {
        cart.value.push(item);
    }

    const removeFromCart = (item) => {
        const cartIndex = cart.value.findIndex(c => c.id === item.id);
        cart.value.splice(cartIndex, 1);
    }

    return { cart, addToCart, removeFromCart}
})

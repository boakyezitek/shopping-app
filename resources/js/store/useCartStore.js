import { defineStore } from "pinia";
import { ref } from "vue";

export const useCartStore = defineStore('cart', () => {
    const carts = ref([]);

    const addToCart = (item) => {
        carts.value.push(item);
    }

    const removeFromCart = (item) => {
        const cartIndex = carts.value.findIndex(c => c.id === item.id);
        carts.value.splice(cartIndex, 1);
    }

    return { carts, addToCart, removeFromCart}
})

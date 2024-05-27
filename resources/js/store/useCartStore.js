import { defineStore } from "pinia";
import { ref } from "vue";

/**
 * The cart store instance, which manages the state of the cart.
 */
export const useCartStore = defineStore('cart', () => {

    /**
     * The list of cart items.
     */
    const carts = ref([]);

    /**
     * Adds an item to the cart.
     *
     * @param {Object} item - The item to add to the cart.
     */
    const addToCart = (item) => {
        carts.value.push(item);
    }

    /**
     * Removes an item from the cart.
     *
     * @param {Object} item - The item to remove from the cart.
     */
    const removeFromCart = (item) => {
        const cartIndex = carts.value.findIndex(c => c.id === item.id);
        carts.value.splice(cartIndex, 1);
    }

    /**
     * Returns the `carts` state and the `addToCart` and `removeFromCart` methods.
     */
    return { carts, addToCart, removeFromCart}
})

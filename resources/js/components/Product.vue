<template>
    <div class="even:mt-5 h-[100%]">
        <div class="bg-white p-1 rounded-[20px] overflow-hidden">
            <img :src="product.image" class="object-contain h-[180px] w-[100%] rounded-[20px]" />
        </div>

        <h4 class="p-2 text-gray-600 font-medium">{{ product.name }}</h4>
        <div class="flex items-center justify-between p-2">
            <span class="text-[14px]">${{ product.price }}</span>
            <span class="material-symbols-outlined" @click.stop="addToCart(product)"
                v-if="carts.some((item) => item.id === product.id) === false">
                add_shopping_cart
            </span>

            <span class="material-symbols-outlined" @click.stop="removeFromCart(product)"
                v-if="carts.some((item) => item.id === product.id) === true">
                remove_shopping_cart
            </span>
        </div>
    </div>
</template>

<script setup>
import { storeToRefs } from 'pinia';
import { useCartStore } from '../store/useCartStore';

/**
 * The cart store instance, which manages the state of the cart.
 */
const store = useCartStore();

/**
 * A reference to the `addToCart` and `removeFromCart` methods in the cart store.
 */
const { addToCart, removeFromCart } = store;

/**
 * A reference to the `carts` state in the cart store, which is a list of cart items.
 */
const { carts } = storeToRefs(store);

/**
 * The product being displayed in the component.
 */
defineProps({
    product: {
        type: Object
    }
});
</script>

<style lang="scss" scoped></style>

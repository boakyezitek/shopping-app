<template>
    <div class="p-5 flex items-center justify-center flex-col gap-3" v-if="carts.length === 0">
        <span class="material-symbols-outlined text-[55px] text-gray-400">
            local_mall
        </span>
        <h1>No Item Added to Cart</h1>
        <p>Go back to <router-link to="/">Home</router-link> to add items</p>
    </div>
    <div class="p-2" v-else>
        <Cart v-for="cart of carts" :key="cart.id" :product="cart" />
    </div>
    <MenuButton title="Checkout Now" v-if="carts.length > 0" />
</template>

<script setup>
import Cart from './Cart.vue';

import { storeToRefs } from 'pinia';
import { useCartStore } from '../store/useCartStore';
import MenuButton from './MenuButton.vue';
const store = useCartStore();
const { carts } = storeToRefs(store);
</script>

<style lang="scss" scoped></style>

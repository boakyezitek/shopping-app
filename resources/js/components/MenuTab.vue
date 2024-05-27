<template>
    <div
        class="fixed bottom-0 right-0 left-0 px-5 py-2 bg-white border-t-2 border-gray-200 flex justify-between items-center">

        <router-link class="link" to="/">
            <div class="flex flex-col items-center justify-center gap-2">
                <span class="material-symbols-outlined text-gray-400">
                    home
                </span>
                <span class="text-[12px]">Home</span>
            </div>
        </router-link>

        <router-link class="link" to="/carts">
            <div class="flex flex-col items-center justify-center gap-2">
                <div class="relative">
                    <div
                        class=" bg-s-green-200 flex items-center justify-center text-[11px] w-[15px] h-[15px] absolute top-[-4px] right-[-4px] rounded-full text-white">
                        {{ carts.length }}
                    </div>
                    <span class="material-symbols-outlined">
                        shopping_bag
                    </span>
                </div>
                <span class="text-[12px]">Cart</span>
            </div>
        </router-link>
        <router-link class="link" to="/invoice">
            <div class="flex flex-col items-center justify-center gap-2">
                <span class="material-symbols-outlined text-gray-400">
                    description
                </span>
                <span class="text-[12px]">Invoice</span>
            </div>
        </router-link>


        <router-link class="link" to="/settings">
            <div class="flex flex-col items-center justify-center gap-2">
                <span class="material-symbols-outlined text-gray-400">
                    settings
                </span>
                <span class="text-[12px]">Settings</span>
            </div>
        </router-link>
    </div>
</template>

<script setup>
import { RouterLink } from 'vue-router';
import { storeToRefs } from 'pinia';
import { useCartStore } from '../store/useCartStore';

/**
 * The cart store instance, which manages the state of the cart.
 */
const store = useCartStore();

/**
 * A reference to the `carts` state in the cart store, which is a list of cart items.
 */
const { carts } = storeToRefs(store);
</script>

<style lang="scss" scoped></style>

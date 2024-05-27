<template>
    <div
        class="fixed bottom-0 right-0 left-0 px-5 py-2 bg-white border-t-2 border-gray-200 flex justify-between items-center">

        <router-link to="/">
            <div class="flex flex-col items-center justify-center gap-2">
                <span class="material-symbols-outlined text-gray-400">
                    home
                </span>
                <span class="text-[12px]">Home</span>
            </div>
        </router-link>

        <router-link to="/cart">
            <div class="flex flex-col items-center justify-center gap-2">
                <span class="material-symbols-outlined text-gray-400">
                    shopping_bag
                </span>
                <span class="text-[12px]">Cart</span>
            </div>
        </router-link>
        <router-link to="/invoice">
            <div class="flex flex-col items-center justify-center gap-2">
            <span class="material-symbols-outlined text-gray-400">
                description
            </span>
            <span class="text-[12px]">Invoice</span>
        </div>
        </router-link>


        <router-link to="/settings">
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


</script>

<style lang="scss" scoped></style>

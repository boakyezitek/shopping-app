<template>
    <div class="flex items-center justify-between py-2">
        <span class="material-symbols-outlined">
            menu
        </span>

        <router-link to="/carts">
            <div class="relative">
                <div
                    class=" bg-s-green-200 flex items-center justify-center text-[11px] w-[15px] h-[15px] absolute top-[-4px] right-[-4px] rounded-full text-white">
                    {{ carts.length }}
                </div>
                <span class="material-symbols-outlined">
                    shopping_bag
                </span>
            </div>
        </router-link>


    </div>
</template>

<script setup>
import { storeToRefs } from 'pinia';
import { useCartStore } from '../store/useCartStore';

const store = useCartStore();
const { carts } = storeToRefs(store);

</script>

<style lang="scss" scoped></style>

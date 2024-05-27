<template>
    <div class="flex flex-col gap-2 mt-2">
        <div class="flex item-center gap-4">
            <div class="w-[80px] h-[80px] bg-white p-2 overflow-hidden">
                <img :src="product.image" alt="product" class="object-contain" />

            </div>

            <div class="w-full flex-[1]">
                <p class="text-md font-semibold">{{ product.name }}</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-lg font-bold">${{ product.price }}</p>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-gray-400">
                            add
                        </span>
                        <p>1</p>
                        <span class="material-symbols-outlined text-gray-400">
                            remove
                        </span>
                    </div>
                </div>

                <div class="text-right" @click="removeFromCart(product)">
                    <span class="material-symbols-outlined text-red-500">
                        delete
                    </span>
                </div>

            </div>
        </div>
        <div class="bg-gray-200 w-full h-[1px]"></div>
    </div>

</template>

<script setup>
import { useCartStore } from '../store/useCartStore';
const { removeFromCart } = useCartStore();

defineProps({
    product: {
        type: Object
    }
})

</script>

<style lang="scss" scoped></style>

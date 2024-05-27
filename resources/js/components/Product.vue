<template>
    <div class="even:mt-5 h-[100%]">
        <div class="bg-white p-1 rounded-[20px] overflow-hidden">
            <img :src="product.image" class="object-contain h-[180px] w-[100%] rounded-[20px]" />
        </div>

        <h4 class="p-2 text-gray-600 font-medium">{{ product.name}}</h4>
        <div class="flex items-center justify-between p-2">
            <span class="text-[14px]">${{product.price}}</span>
            <span class="material-symbols-outlined">
                add_shopping_cart
            </span>
        </div>
    </div>
</template>

<script setup>
 defineProps({
    product: {
        type: Object
    }
 })
</script>

<style lang="scss" scoped></style>

<template>
    <div class="h-[260px] bg-white shadow-lg rounded-[20px] even:mt-5 overflow-hidden">
        <img :src="product.image" class=" object-cover h-[70%] w-[100%] rounded-[20px]" />
        <h4 class="p-2 text-gray-600 font-medium">{{ product.title}}</h4>
        <div class="flex items-center justify-between p-2">
            <span class="text-[14px]">GH₵ {{product.price}}</span>
            <span class="material-symbols-outlined">
                add
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

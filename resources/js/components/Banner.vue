<template>
    <div class="my-3 bg-gray-800 rounded-[20px] h-[160px]
    flex items-center px-2 py-3 justify-between">
        <div class="flex flex-[1] flex-col gap-3">
            <h2 class="text-lg font-bold text-white">New sales</h2>
            <p class="text-[12px] text-white">
                Discount 50% for the first transaction
            </p>
            <button class="bg-s-green-200 text-[12px] text-white py-1 px-3 rounded-[20px] max-w-[110px]">Shop Now</button>
        </div>
        <div class="w-[100px] h-[100px]">
            <img :src="'/storage/oil.png'" alt="sails" class="w-full object-cover mt-[-20px]" />
        </div>

    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped></style>

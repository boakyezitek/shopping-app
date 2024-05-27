<template>
    <div class="flex items-center justify-between bg-white border border-gray-200 px-2 py-2 w-full rounded-[10px]">
        <div class="flex items-center gap-2">
            <div class="w-[35px] h-[35px] bg-gray-300 flex items-center justify-center rounded-full">
                <span class="material-symbols-outlined text-gray-400">
                description
            </span>
            </div>
            <div class="flex flex-col">
                <h3 class="text-[13px] font-semibold">{{ invoice.title }}</h3>
                <span class="text-[12px] text-gray-400"><span>Created: </span> <span>{{ invoice.date }}</span></span>
            </div>
        </div>
        <div>
            <div class="flex flex-col">
                <h3 class="text-[13px]">GH₵ {{ invoice.amount}}</h3>
                <span class="text-[12px] text-s-green-200">Paid</span>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
    invoice: {
        type: Object
    }
})
</script>

<style lang="scss" scoped>

</style>

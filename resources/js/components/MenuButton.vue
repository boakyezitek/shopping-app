<template>
   <div class="fixed bottom-0 right-0 left-0 px-5 py-4 bg-white border-t-2 border-gray-200 flex justify-center items-center">
            <button class="bg-s-green-200 text-[12px] text-white py-1 px-3 rounded-[10px] w-full h-[40px]">{{title}}</button>
        </div>
</template>

<script setup>
defineProps({
    title: {
        type: String,
        default: "Button"
    }
})
</script>

<style lang="scss" scoped>

</style>

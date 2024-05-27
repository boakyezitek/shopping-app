<template>
    <div class="py-2 flex items-center justify-between bg-white shadow-lg px-2">
        <span class="material-symbols-outlined">
keyboard_backspace
</span>
<h4>{{ title }}</h4>
<span></span>
    </div>
</template>

<script setup>
defineProps({
    title: {
        type: String,
        default: 'Page',
    }
})
</script>

<style lang="scss" scoped>

</style>

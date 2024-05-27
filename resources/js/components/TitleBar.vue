<template>
    <div class="py-2 flex items-center justify-between bg-white shadow-lg px-2">
        <span class="material-symbols-outlined" @click="handleRouteBack">
            keyboard_backspace
        </span>
        <h4>{{ title }}</h4>
        <span></span>
    </div>
</template>

<script setup>
import { useRouter } from 'vue-router';
const router = useRouter();

defineProps({
    title: {
        type: String,
        default: 'Page',
    }
})

const handleRouteBack = () => {
    router.go(-1);
}
</script>

<style lang="scss" scoped></style>

<template>
    <div class="py-3 flex items-center justify-between bg-[#f3f3f3] shadow-lg px-2">
        <span class="material-symbols-outlined" @click="handleRouteBack">
            keyboard_backspace
        </span>
        <h4>{{ title }}</h4>
        <span></span>
    </div>
</template>

<script setup>
import { useRouter } from 'vue-router';

/**
 * The router instance, which manages the navigation between pages.
 */
const router = useRouter();

/**
 * The title of the page being displayed in the component.
 */
defineProps({
    title: {
        type: String,
        default: 'Page',
    }
})

/**
 * Navigates to the previous page in the browser history.
 */
const handleRouteBack = () => {
    router.go(-1);
}
</script>

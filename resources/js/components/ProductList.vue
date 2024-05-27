<template>
    <Loader v-if="isLoading" />
    <div class="grid grid-cols-2 gap-3 " v-else>
        <Product :product="product" v-for="product of products" :key="product.id"
            @click="handleRouteToPage(product.id)" />
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import Product from './Product.vue';
import { useRouter } from 'vue-router';
import { useFetchAPIStore } from '../store/useFetchAPI';
import Loader from './Loader.vue';

/**
 * The fetch API store instance, which manages the state of the API requests.
 */
const { useFetchAPI } = useFetchAPIStore();

/**
 * The router instance, which manages the navigation between pages.
 */
const router = useRouter();

/**
 * The list of products being displayed in the component.
 */
const products = ref([]);

/**
 * A flag indicating whether the products are currently being loaded from the remote API.
 */
const isLoading = ref(false);

/**
 * Navigates to the product page with the specified ID.
 */
const handleRouteToPage = (id) => {
    localStorage.setItem('productId', id);
    router.push(`/products/${id}`);
}

/**
 * Fetches the list of products from a remote API and stores it in a local variable.
 */
const handleGetProduct = async () => {
    isLoading.value = true
    await useFetchAPI('products', '', 'GET').then((res) => {
        products.value = res.data
        isLoading.value = false
    }).catch((err) => console.log(err));
}

/**
 * Calls the `handleGetProduct()` function when the component is mounted.
 */
onMounted(() => {
    handleGetProduct()
})
</script>

<style lang="scss" scoped></style>

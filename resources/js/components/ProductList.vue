<template>
    <Loader v-if="isLoading"/>
    <div class="grid grid-cols-2 gap-3 " v-else>
        <Product :product="product" v-for="product of products" :key="product.id" @click="handleRouteToPage(product.id)"/>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import Product from './Product.vue';
import { useRouter } from 'vue-router';
import { useFetchAPIStore } from '../store/useFetchAPI';
import Loader from './Loader.vue';

const { useFetchAPI } = useFetchAPIStore();

const router = useRouter();

const products = ref([])
const isLoading = ref(false);


const handleRouteToPage = (id) => {
    localStorage.setItem('productId', id);
    router.push(`/products/${id}`);

}

const handleGetProduct = async() => {
    isLoading.value = true
   await useFetchAPI('products', '', 'GET').then((res) => {
    products.value = res.data
    isLoading.value = false
   }).catch((err) => console.log(err));
}

onMounted(() => {
    handleGetProduct()
})
</script>

<style lang="scss" scoped>

</style>

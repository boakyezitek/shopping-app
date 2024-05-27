<template>
    <div class="grid grid-cols-2 gap-3 ">
        <Product :product="product" v-for="product of products" :key="product.id" @click="handleRouteToPage(product.id)"/>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import Product from './Product.vue';
import { useRouter } from 'vue-router';
import { useFetchAPIStore } from '../store/useFetchAPI';

const { useFetchAPI } = useFetchAPIStore();

const router = useRouter();

const products = ref([])


const handleRouteToPage = (id) => {
    localStorage.setItem('productId', id);
    router.push(`/products/${id}`);

}

const handleGetProduct = async() => {
   await useFetchAPI('products', '', 'GET').then((res) => {
    products.value = res.data
   }).catch((err) => console.log(err));
}

onMounted(() => {
    handleGetProduct()
})
</script>

<style lang="scss" scoped>

</style>

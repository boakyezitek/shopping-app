<template>
    <div class="grid grid-cols-2 gap-3 ">
        <Product :product="product" v-for="product of products" :key="product.id" @click="handleRouteToPage(product.id)"/>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import Product from './Product.vue';
import { useRouter } from 'vue-router';

const router = useRouter();

const products = ref(
    [{
    id: 1,
    title: "Cobram Oil",
    image: "/storage/item2.jpg",
    price: 1300
},
{
    id: 1,
    title: "Dell Monitor",
    image: "/storage/item3.jpg",
    price: 1300
},
{
    id: 1,
    title: "Long Green Rice",
    image: "/storage/item1.jpg",
    price: 1300
},
{
    id: 1,
    title: "Dark Coffee",
    image: "/storage/item4.jpg",
    price: 1300
}


]
)


const handleRouteToPage = (id) => {
    router.push(`/products/${id}`);
}

</script>

<style lang="scss" scoped>

</style>

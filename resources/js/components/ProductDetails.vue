<template>
  <Loader v-if="isLoading"/>
    <div class="flex flex-col gap-4 min-h-screen" v-else>
        <div class="w-full h-180px overflow-hidden bg-white p-2">
            <img :src="product && product.image" alt="image" class="object-contain"/>
        </div>

        <div class="p-4 flex flex-col gap-4">
            <div class="flex gap-3 flex-col">
                <h3 class="font-black">{{product && product.name}}</h3>
                <div class="flex items-center justify-between">
                    <h4>${{product && product.price }}</h4>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-yellow-500">
star
</span>
                        <span>4.5</span>
                    </div>
                </div>

            </div>


            <div class="bg-gray-200 w-full h-[1px]"></div>

            <div class="flex flex-col gap-3">
                <h4 class=" font-medium">Description</h4>
                <p>{{ product && product.description }}</p>

            </div>
        </div>
        <MenuButton title="Buy Now"/>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useFetchAPIStore } from '../store/useFetchAPI';
import Loader from './Loader.vue';
import MenuButton from './MenuButton.vue';

/**
 * The fetch API store instance, which manages the state of the API requests.
 */
const { useFetchAPI } = useFetchAPIStore();

/**
 * The product being displayed in the component.
 */
const product = ref(null);

/**
 * A flag indicating whether the product is currently being loaded from the remote API.
 */
const isLoading = ref(false);

/**
 * Fetches the product data from a remote API and stores it in a local variable.
 */
const handleGetProduct = async() => {
    isLoading.value = true
    const id = localStorage.getItem('productId');
   await useFetchAPI('products', id, 'SHOW').then((res) => {
    product.value = res.data
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

<style lang="scss" scoped>

</style>

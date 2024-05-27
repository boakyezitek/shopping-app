<template>
    <div class="container mx-auto max-w-[1200px] px-2">
        <TopBar />
   <SearchInput />
   <Banner />
   <ProductList />
    </div>
</template>

<script setup>
import Banner from '../components/Banner.vue';
import ProductList from '../components/ProductList.vue';
import SearchInput from '../components/SearchInput.vue';
import TopBar from '../components/TopBar.vue';


</script>

<style lang="scss" scoped>

</style>

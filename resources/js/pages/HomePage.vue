<template>
    <div class="container mx-auto max-w-[1200px] px-2">
        <div class="min-h-screen mb-10">
            <TopBar />
            <SearchInput />
            <Banner />
            <ProductList />
        </div>

        <MenuTab />
    </div>
</template>

<script setup>
import Banner from '../components/Banner.vue';
import MenuTab from '../components/MenuTab.vue';
import ProductList from '../components/ProductList.vue';
import SearchInput from '../components/SearchInput.vue';
import TopBar from '../components/TopBar.vue';


</script>

<style lang="scss" scoped></style>

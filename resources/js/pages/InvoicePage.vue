<template>
    <div>
        <TitleBar title="Invoice List"/>
        <InvoiceList />
        <MenuTab />
    </div>
</template>

<script setup>
import InvoiceList from '../components/InvoiceList.vue';
import MenuTab from '../components/MenuTab.vue';
import TitleBar from '../components/TitleBar.vue';
</script>

<template>
    <div class="grid grid-cols-1 gap-2 px-4 py-3">
        <Invoice :invoice="invoice" v-for="invoice of invoices" :key="invoice.id" @click="handleRouteToPage(invoice.id)"/>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import Invoice from './Invoice.vue';

const router = useRouter();

const invoices = ref([
    {
        id: 1,
        title: 'Nike Invoice',
        date: '14 Jan, 2024',
        status: 'Paid',
        amount: 3000.00
    },
    {
        id: 2,
        title: 'Mac Book Pro Invoice',
        date: '14 Jan, 2024',
        status: 'Paid',
        amount: 13000.00
    },
    {
        id: 3,
        title: 'HomePod Invoice',
        date: '14 Jan, 2024',
        status: 'Paid',
        amount: 3000.00
    },
    {
        id: 4,
        title: 'Nike Invoice',
        date: '14 Jan, 2024',
        status: 'Paid',
        amount: 3000.00
    },
    {
        id: 5,
        title: 'Canon Invoice',
        date: '14 Jan, 2024',
        status: 'Paid',
        amount: 3000.00
    },
    {
        id: 6,
        title: 'Tesla ltd. Invoice',
        date: '14 Jan, 2024',
        status: 'Paid',
        amount: 3000.00
    },

])

const handleRouteToPage = (id) => {
    router.push(`/invoice/${id}`);
}

</script>

<style lang="scss" scoped>

</style>

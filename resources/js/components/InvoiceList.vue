<template>
    <div class="grid grid-cols-1 gap-2 px-4 py-3">
        <Invoice :invoice="invoice" v-for="invoice of invoices" :key="invoice.id" @click="handleRouteToPage(invoice.id)"/>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRouter } from 'vue-router';
import Invoice from './Invoice.vue';
import { useFetchAPIStore } from '../store/useFetchAPI';

const { useFetchAPI } = useFetchAPIStore();

const router = useRouter();

const invoices = ref([]);

const handleRouteToPage = (id) => {
    localStorage.setItem('invoiceId', id);
    router.push(`/invoice/${id}`);
}

const handleGetInvoice = async() => {
   await useFetchAPI('invoices', '', 'GET').then((res) => {
    invoices.value = res.data
   }).catch((err) => console.log(err));
}

onMounted(() => {
    handleGetInvoice()
})

</script>

<style lang="scss" scoped>

</style>

<template>
    <Loader v-if="isLoading" />
    <div class="grid grid-cols-1 gap-2 px-4 py-3" v-else>
        <Invoice :invoice="invoice" v-for="invoice of invoices" :key="invoice.id"
            @click="handleRouteToPage(invoice.id)" />
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRouter } from 'vue-router';
import Invoice from './Invoice.vue';
import { useFetchAPIStore } from '../store/useFetchAPI';
import Loader from './Loader.vue';

const { useFetchAPI } = useFetchAPIStore();

const router = useRouter();

/**
 * The list of invoices fetched from the remote API.
 */
const invoices = ref([]);

/**
 * A flag indicating whether the invoices are currently being loaded from the remote API.
 */
const isLoading = ref(false);

/**
 * Navigates to the invoice page with the specified ID.
 */
const handleRouteToPage = (id) => {
    localStorage.setItem('invoiceId', id);
    router.push(`/invoice/${id}`);
}

/**
 * Fetches the list of invoices from a remote API and stores it in a local variable.
 */
const handleGetInvoice = async () => {
    isLoading.value = true
    await useFetchAPI('invoices', '', 'GET').then((res) => {
        invoices.value = res.data
        isLoading.value = false
    }).catch((err) => console.log(err));
}

/**
 * Calls the `handleGetInvoice()` function when the component is mounted.
 */
onMounted(() => {
    handleGetInvoice()
})
</script>

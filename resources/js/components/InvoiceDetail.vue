<template>
     <Loader v-if="isLoading" />
    <div class="p-4 flex flex-col gap-4" v-else>
        <div class="flex flex-col items-center justify-center gap-2 w-full">
            <div class="w-[50px] h-[50px] flex items-center justify-center bg-[#d3f8ec] rounded-full">
                <span class="material-symbols-outlined text-[#30c79b]">
                    description
                </span>
            </div>

            <h1 class=" font-bold text-lg">Invoice {{invoice && invoice.invoice_number}}</h1>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-gray-400">
                    calendar_today
                </span>
                <span class="text-sm text-gray-400">Issue date: {{invoice && invoice.invoice_date}} </span>
            </div>
        </div>

        <div class="bg-gray-200 w-full h-[1px]"></div>

        <div class="pb-2">
            <h4 class="font-bold">Customer: </h4>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.customer_information.name}}</p>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.customer_information.email}} </p>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.customer_information.phone}}</p>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.customer_information.address}}</p>
        </div>
        <div class="bg-gray-200 w-full h-[1px]"></div>
        <div class="pb-2">
            <h4 class="font-bold">Supplier: </h4>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.supplier_information.name}}</p>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.supplier_information.email}} </p>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.supplier_information.phone}}</p>
            <p class="text-gray-400 text-[13px]">{{invoice && invoice.supplier_information.address}}</p>
        </div>
        <div class="bg-gray-200 w-full h-[1px]"></div>
        <div class="pb-2">
            <h4 class="font-bold">Products: </h4>
            <div class="bg-[#f3f3f3] p-2">

            <div class="grid grid-cols-2 mb-2" v-for="product of invoice && invoice.products" :key="product.id">
                <div class="text-[13px] text-gray-500">{{product.name}}</div>
                <div class="text-right text-[13px] text-gray-500">{{ product.price }}</div>
           </div>

           <div class="grid grid-cols-2 mb-2">
                <div class="text-[13px] text-gray-500">%Tax({{ invoice  && invoice.tax_information.tax_rate }})</div>
                <div class="text-right text-[13px] text-gray-500">{{ invoice  && invoice.tax_information.tax_amount }}</div>
           </div>

           <div class="grid grid-cols-2 mb-2">
                <div class="text-[16px] text-s-green-200 font-bold">Total</div>
                <div class="text-right text-[16px] text-s-green-200 font-bold">${{invoice && `${totalProduct  + invoice.tax_information.tax_amount}`}}</div>
           </div>
            </div>

        </div>

    </div>
</template>

<script setup>
import { computed, onMounted, ref } from 'vue';
import { useFetchAPIStore } from '../store/useFetchAPI';
import Loader from './Loader.vue';

const { useFetchAPI } = useFetchAPIStore();

const invoice = ref(null);
const isLoading = ref(false);

const handleGetProduct = async() => {
    isLoading.value = true
    const id = localStorage.getItem('invoiceId');
   await useFetchAPI('invoices', id, 'SHOW').then((res) => {
    invoice.value = res.data
    isLoading.value = false
   }).catch((err) => console.log(err));
}

const totalProduct = computed(() => {
    return invoice.value?.products?.reduce((sum, item) => sum + Number(item.price), 0)
})

onMounted(() => {
    handleGetProduct()
})
</script>

<style lang="scss" scoped></style>

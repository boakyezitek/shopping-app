<template>
    <div class="p-4 flex flex-col gap-4">
        <div class="flex flex-col items-center justify-center gap-2 w-full">
            <div class="w-[50px] h-[50px] flex items-center justify-center bg-[#d3f8ec] rounded-full">
                <span class="material-symbols-outlined text-[#30c79b]">
                    description
                </span>
            </div>

            <h1 class=" font-bold text-lg">Invoice #11112232</h1>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-gray-400">
                    calendar_today
                </span>
                <span class="text-sm text-gray-400">Issue date: 14 Jan, 2024 </span>
            </div>
        </div>

        <div class="bg-gray-200 w-full h-[1px]"></div>

        <div class="pb-2">
            <h4 class="font-bold">Customer: </h4>
            <p class="text-gray-400 text-[13px]">XYZ company Customer Relations</p>
            <p class="text-gray-400 text-[13px]">PO Box 37380 Abuquerque</p>
            <p class="text-gray-400 text-[13px]">NM 8717607380</p>
        </div>
        <div class="bg-gray-200 w-full h-[1px]"></div>
        <div class="pb-2">
            <h4 class="font-bold">Supplier: </h4>
            <p class="text-gray-400 text-[13px]">XYZ company Customer Relations</p>
            <p class="text-gray-400 text-[13px]">PO Box 37380 Abuquerque</p>
            <p class="text-gray-400 text-[13px]">NM 8717607380</p>
        </div>
        <div class="bg-gray-200 w-full h-[1px]"></div>
        <div class="pb-2">
            <h4 class="font-bold">Products: </h4>
            <div class="bg-[#f3f3f3] p-2">
                <div class="grid grid-cols-2 mb-2">
                <div class="text-[13px] text-gray-500">Mac Book Pro</div>
                <div class="text-right text-[13px] text-gray-500">3,000.00</div>
           </div>
           <div class="grid grid-cols-2 mb-2">
                <div class="text-[13px] text-gray-500">HomePod</div>
                <div class="text-right text-[13px] text-gray-500">300.00</div>
           </div>
           <div class="grid grid-cols-2 mb-2">
                <div class="text-[13px] text-gray-500">Oil Dry Pro</div>
                <div class="text-right text-[13px] text-gray-500">1,000.00</div>
           </div>
           <div class="grid grid-cols-2 mb-2">
                <div class="text-[13px] text-gray-500">%Tax</div>
                <div class="text-right text-[13px] text-gray-500">0.00</div>
           </div>

           <div class="grid grid-cols-2 mb-2">
                <div class="text-[16px] text-s-green-200 font-bold">Total</div>
                <div class="text-right text-[16px] text-s-green-200 font-bold">GH₵ 4,300.00</div>
           </div>
            </div>

        </div>

    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped></style>

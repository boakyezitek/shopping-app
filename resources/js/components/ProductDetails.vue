<template>
    <div class="flex flex-col gap-4 min-h-screen">
        <div class="w-full h-250px overflow-hidden">
            <img :src="'/storage/item2.jpg'" alt="image" class=" object-cover"/>
        </div>

        <div class="p-4 flex flex-col gap-4">
            <div class="flex gap-3 flex-col">
                <h3 class="font-black">Cobram Oil</h3>
                <div class="flex items-center justify-between">
                    <h4>GH₵ 1500</h4>
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
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, fuga hic natus perspiciatis laudantium numquam esse unde autem dolore, vero rerum accusantium. Sint perferendis sapiente natus excepturi dolor delectus error?</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, fuga hic natus perspiciatis laudantium numquam esse unde autem dolore, vero rerum accusantium. Sint perferendis sapiente natus excepturi dolor delectus error?</p>
            </div>
        </div>

        <div class="fixed bottom-0 right-0 left-0 px-5 py-4 bg-white border-t-2 border-gray-200 flex justify-center items-center">
            <button class="bg-s-green-200 text-[12px] text-white py-1 px-3 rounded-[10px] w-full h-[40px]">Buy Now</button>
        </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>

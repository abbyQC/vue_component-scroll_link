<template>
    <modal>
        Are you sure?
        <template v-slot:footer>
            <button class="bg-gray-500 hover:bg-gray-600 py-2 px-4 text-white rounded-lg mr-2">Cancel</button>
            <button class="bg-blue-500 hover:bg-gray-600 py-2 px-4 text-white rounded-lg">Continue</button>
        </template>
    </modal>
</template>

<script>
    export default {
        name: "confirm-dialog"
    }
</script>

<style scoped>

</style>

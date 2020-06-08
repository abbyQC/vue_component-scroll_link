<template>
    <button @click="confirm">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        props: ['message'],
        data() {
            return {confirmed: false};
        },
        methods: {
            confirm(e) {
                if(this.confirmed){
                    return;
                }
                e.preventDefault();
                this.$modal.dialog(this.message).then(confirmed => {
                    if (confirmed) {
                        this.confirmed = true;
                        this.$el.click();
                    }
                });
            }
        }
    }
</script>

<style scoped>

</style>

<template>
    <div>
        <ul>
            <li v-for="(tab,index) in tabs">
                <button
                    v-text="tab.title"
                    role="tab"
                    @click="activeTab = tab"
                ></button>
            </li>
        </ul>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tabs:[],
                activeTab: null
            };
        },
        mounted(){
            this.tabs = this.$children;
        }
    }
</script>

<style scoped>

</style>

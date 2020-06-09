<template>
    <div>
        <ul class="flex mb-4 border-b border-blue-400">
            <li v-for="(tab,index) in tabs"
                class="px-3 py-2 bg-white"
                :class="{'border border-b-0 rounded-t-lg' :tab== activeTab}"
                :style="tab == activeTab ? 'margin-bottom: -1px' :''">
             <button
                    v-text=" tab.title
            "
            :class="{'font-bold': tab == activeTab}"
            class="focus:outline-none"
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
                tabs: [],
                activeTab: null
            };
        },
        mounted() {
            this.tabs = this.$children;
            this.activeTab = this.tabs[0];
        },
        watch: {
            activeTab(activeTab) {
                this.tabs.map(tab => (tab.show = tab == activeTab));
            }
        }
    };
</script>

<style scoped>

</style>


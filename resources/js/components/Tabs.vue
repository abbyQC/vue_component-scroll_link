<template>
    <div>
        <ul class="flex mb-4 border-b border-blue-400">
            <li v-for="(tab,index) in tabs"
                class="px-3 py-2 bg-white"
                :class="{'border border-b-0 rounded-t-lg' :isActiveTab(tab)}"
                :style="isActiveTab(tab) ? 'margin-bottom: -1px' :''">
                <button
                    v-text=" tab.title
            "
                    :class="{'font-bold':isActiveTab(tab)}"
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
            this.setInitialActiveTab();
        },
        watch: {
            activeTab(activeTab) {
                this.tabs.map(tab => (tab.show = this.isActiveTab(tab)));
            }
        },
        methods: {
            isActiveTab(tab) {
                return tab == this.activeTab;
            },
            setInitialActiveTab() {
                this.activeTab = this.tabs.find(tab => tab.active) || this.tabs[0];
            }
        }
    };
</script>




<template>
    <div>
    <div class="tabs">
        <ul>
            <ul v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
                <a href="#" @click="selectTab(tab)"> {{ tab.name }} </a>
            </ul>
        </ul>
    </div>

    <div class="tab-details">
        <slot></slot>
    </div>
    </div>
</template>

<script>
    export default {
        name: "tabs",
        data() {
            return {
                tabs: [],

            };
        },
        created() {
            this.tabs = this.$children;
        },
        methods: {
            selectTab(selectedTab) {
                this.tabs.forEach( tab =>
                    {
                         tab.isActive = (tab.name == selectedTab.name);
                    }
                );
            },
        }
    }
</script>

<style scoped>

    ul.is-active {
        border: 1px lime;
        border-style: none none solid none;
    }
    ul.is-active * {
        color: lime;
    }
</style>
<template>
    <div v-show="isActive"><slot></slot></div>
</template>

<script>
    export default {
        props: {
            name : { required: true },
            selected : { default: false }
        },
        mounted() {
          this.isActive = this.selected;
        },
        data() {
            return {
                isActive: false
            };
        },
        name: "tab"
    }
</script>

<style scoped>

</style>
<template>
    <div class="container">
        <article class="message" >
            <div class="message-header">{{ title}} <button class="float-right" @click="toggleView">X</button></div>
            <div class="message-body" v-show="show">{{ body }}</div>
        </article>

    </div>
</template>

<script>
    export default {
        name: "message-element",
        props: ['title', 'body'],
        data() {
          return {
                show: true
            }
        },
        methods: {
            toggleView() {
                this.show = !this.show;
            }
        }
    }
</script>

<style scoped>

</style>
<template>
    <span>
        <input placeholder="Enter your coupon code" @blur="onCouponAlert" v-model="couponInput" />

        <div v-if="couponCode" >You used a coupon!</div>
    </span>
</template>

<script>
    export default {
        name: "coupon",
        props: ['couponCode'],
        data: () => {
            return {
                couponInput: undefined
            };
        },
        methods: {
            onCouponAlert() {

               console.warn('onCouponAlert');
               //broadcast
               EventHandler.$emit('applied', this.couponInput);

               console.log('Coupon emit');
            }
        }
    }
</script>

<style scoped>

</style>
<template>
    <div>
        <carousel :autoplay="true" :items="1" :nav="false">
            <template slot="prev"><span class="prev">kkk</span></template>
                <img src="/images/1.jpg">
                <img src="/images/2.jpg">
                <img src="/images/3.jpg">
                <img src="/images/4.jpg">
    <!--            <img src="/images/5.jpg">-->
    <!--            <img src="/images/6.jpg">-->
                <img src="/images/7.jpg">
                <img src="/images/8.jpg">
                <img src="/images/9.jpg">
                <img src="/images/10.jpg">
                <img src="/images/11.jpg">
                <img src="/images/12.jpg">
    <!--            <img src="/images/13.jpg">-->
                <img src="/images/14.jpg">
                <img src="/images/15.jpg">
                <img src="/images/16.jpg">
                <img src="/images/17.jpg">
                <img src="/images/18.jpg">
                <img src="/images/19.jpg">
                <img src="/images/20.jpg">
                <img src="/images/21.jpg">
            <template slot="next"><span class="next">>hhh</span></template>
        </carousel>
    </div>
</template>

<script>
    import carousel from 'vue-owl-carousel'

    export default {
        name: "carousel-component",
        components: { carousel },
    }
</script>

<style scoped>

</style>

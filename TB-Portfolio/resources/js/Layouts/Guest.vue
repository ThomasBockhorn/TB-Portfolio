<template>
    <div>
        <main class="parallax">
            <div class="parallax_group">
                <navbar></navbar>
                <background> </background>
                <div id="layer" class="parallax__layer">
                    <slot/>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import background from "../Components/frontend/background/background.vue";
import navbar from "../Components/frontend/navbar/navbar.vue";

export default {
    components:{
        background,
        navbar
    }
}
</script>

<style scoped>
    .parallax{
        perspective: 1px;
        height: 100vh;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .parallax_group{
        position: relative;
        height: 100vh;
        transform-style: preserve-3d;
    }

    #layer{
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>

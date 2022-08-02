<template>
    <div>
        <guest_layout>
            <div>
                <div id="title">
                    <span>
                        Thomas Bockhorn
                     </span>
                    <br />
                    <span>
                        Full-Stack Web Developer
                    </span>
                </div>
                <section id="about" class="intro">
                    <div>
                        <p class="text-center p-5">Building websites is fun and challenging. Websites can also be creative endeavors that inspire us to reach for new frontiers.</p>
                    </div>
                </section>
            </div>
            <solar></solar>


        </guest_layout>
    </div>
</template>

<script>
import guest_layout from "../Layouts/Guest.vue";
import solar from "../Components/frontend/solar/solar.vue";

export default {
    components:{
        guest_layout,
        solar
    }
}
</script>

<style scoped>

    section{
        position: absolute;
        color: #FFF;
        display: block;
        top: 100%;
        left: 0;
        right: 0;
        font-family: "lato", sans-serif;
        font-weight: 300;
        font-size: 25px;
        letter-spacing: 10px;
        background: -webkit-linear-gradient(white, #38495a);
        background-clip:text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    #title {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        color: #FFF;
        text-align: center;
        font-family: "lato", sans-serif;
        font-weight: 300;
        font-size: 50px;
        letter-spacing: 10px;
        margin-top: -60px;
        padding-left: 10px;
        display: block;
    }
    #title span {
        background: -webkit-linear-gradient(white, #38495a);
        background-clip:text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }


</style>

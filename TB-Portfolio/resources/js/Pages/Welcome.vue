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
                        Full Stack Web Developer
                    </span>
                </div>
                <section class="intro">
                    <div>
                        <span>
                            <p>lorem</p>
                        </span>
                    </div>
                </section>
            </div>
        </guest_layout>
    </div>
</template>

<script>
import guest_layout from "../Layouts/Guest.vue";

export default {
    components:{
        guest_layout,
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
        padding: 5em;
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

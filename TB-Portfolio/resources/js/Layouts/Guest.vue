<template>
    <div>
        <navbar></navbar>
        <main>
          <slot/>
        </main>
    </div>
</template>

<script>
import navbar from "../Components/frontend/navbar/navbar.vue";

export default {
    components:{
       navbar,
    },
    mounted(){
        let addScript = document.createElement('script');
        addScript.setAttribute('src', 'frontend/js/js/main.js');
        document.head.appendChild(addScript);
    }
}
</script>

<style scoped>

</style>

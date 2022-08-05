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
    }
}
</script>

<style scoped>

</style>

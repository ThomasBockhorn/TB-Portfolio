<template>
    <div>
        <header>
            <navbar></navbar>
        </header>
        <main>
            <slot/>
        </main>
        <footer></footer>
    </div>
</template>

<script>
import navbar from "../Components/frontend/navbar/navbar.vue";

export default {
    components:{
        navbar
    }
}
</script>

<style scoped>

</style>

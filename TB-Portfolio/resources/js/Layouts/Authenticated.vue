<template>
    <div class = "mx-auto bg-grey-400">
        <div class = "min-h-screen flex flex-col">
            <navbar></navbar>
            <div class = "flex flex-1">
                <sidebar></sidebar>
                <main class = "bg-white-300 flex-1 p-3 overflow-hidden">
                    <slot />
                </main>
            </div>
            <Footer></Footer>
        </div>
    </div>
</template>
<script>
import navbar from "../Components/backend/navbar/navbar.vue";
import sidebar from "../Components/backend/sidebar/sidebar.vue";
import Footer from "../Components/backend/footer/footer.vue";

export default {
    components: {
        navbar,
        sidebar,
        Footer,
    },

    mounted() {
        let addScript = document.createElement('script');
        addScript.setAttribute('src', 'backend/js/js/main.js');
        document.head.appendChild(addScript);
    }
}
</script>

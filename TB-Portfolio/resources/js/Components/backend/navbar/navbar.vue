<template>
    <!--Header Section Starts Here-->
    <nav class = "bg-nav">
        <div class = "flex justify-between">
            <div class = "pl-1 mx-3 inline-flex items-center">
                <a class = "menu-toggle" href = "#" @click = "sidebarToggle"><span></span></a>
                <h1 class = "text-white p-2">Thomas Bockhorn</h1>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "navbar",
    data() {
        return {
            show: true
        }
    },
    methods: {
        sidebarToggle() {
            this.show = !this.show;
            this.$emit('sidebarToggle', this.show);
        },
    }
}
</script>

<style scoped>
.menu-toggle {
    margin-top: -1px;
}
</style>

<template>
    <!--Sidebar-->
    <aside id = "sidebar"
           class = "bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav md:block lg:block">

        <ul class = "list-reset flex flex-col">
            <li class = " w-full h-full py-3 px-2 border-b border-light-border">
                <Link class = "font-sans text-white text-sm text-nav-item no-underline"
                      href = "/dashboard">
                    <i class = "fas fa-tachometer-alt float-left mx-2"></i>
                    Dashboard
                    <span><i class = "fas fa-angle-right float-right"></i></span>
                </Link>
            </li>
            <li class = "w-full h-full py-3 px-2 border-b border-light-border">
                <a class = "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                   href = "forms.html">
                    <i class = "fab fa-wpforms float-left mx-2"></i>
                    Forms
                    <span><i class = "fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class = "w-full h-full py-3 px-2 border-b border-light-border">
                <a class = "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                   href = "buttons.html">
                    <i class = "fas fa-grip-horizontal float-left mx-2"></i>
                    Buttons
                    <span><i class = "fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class = "w-full h-full py-3 px-2 border-b border-light-border">
                <a class = "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                   href = "tables.html">
                    <i class = "fas fa-table float-left mx-2"></i>
                    Tables
                    <span><i class = "fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class = "w-full h-full py-3 px-2 border-b border-light-border">
                <a class = "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                   href = "ui.html">
                    <i class = "fab fa-uikit float-left mx-2"></i>
                    Ui components
                    <span><i class = "fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class = "w-full h-full py-3 px-2 border-b border-300-border">
                <a class = "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                   href = "modals.html">
                    <i class = "fas fa-square-full float-left mx-2"></i>
                    Modals
                    <span><i class = "fa fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class = "w-full h-full py-3 px-2">
                <a class = "font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                   href = "#" @click = "displayDropdown">
                    <i class = "far fa-file float-left mx-2"></i>
                    Pages
                    <span><i class = "fa fa-angle-down float-right"></i></span>
                </a>
                <ul v-show = "show" class = "list-reset -mx-2 bg-white-medium-dark">
                    <li class = "border-t mt-2 border-light-border w-full h-full px-2 py-3">
                        <a class = "mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                           href = "login.html">
                            Login Page
                            <span><i class = "fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class = "border-t border-light-border w-full h-full px-2 py-3">
                        <a class = "mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                           href = "register.html">
                            Register Page
                            <span><i class = "fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class = "border-t border-light-border w-full h-full px-2 py-3">
                        <a class = "mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"
                           href = "404.html">
                            404 Page
                            <span><i class = "fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</template>

<script>
export default {
    name: "sidebar",
    data() {
        return {
            show: false
        }
    },
    methods: {
        displayDropdown() {
            this.show = !this.show;
        }

    }

}
</script>

<style scoped>
ul > li {
    background-color: black;
    border: 0;
}

a {
    color: white;
}
</style>


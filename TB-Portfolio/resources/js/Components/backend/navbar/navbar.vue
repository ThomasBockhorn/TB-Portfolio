<template>
    <!--Header Section Starts Here-->
    <nav class = "bg-nav">
        <div class = "flex justify-between">
            <div class = "p-1 mx-3 inline-flex items-center">
                <i class = "fas fa-bars pr-2 text-white" onclick = "sidebarToggle()"></i>
                <h1 class = "text-white p-2">Logo</h1>
            </div>
            <div class = "p-1 flex flex-row items-center">
                <a class = "text-white p-2 mr-2 no-underline hidden md:block lg:block"
                   href = "https://github.com/tailwindadmin/admin">Github</a>


                <img alt = "" class = "inline-block h-8 w-8 rounded-full" onclick = "profileToggle()"
                     src = "https://avatars0.githubusercontent.com/u/4323180?s=460&v=4">
                <a class = "text-white p-2 no-underline hidden md:block lg:block" href = "#"
                   onclick = "profileToggle()">Adam Wathan</a>
                <div id = "ProfileDropDown" class = "rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                    <ul class = "list-reset">
                        <li><a class = "no-underline px-4 py-2 block text-black hover:bg-grey-light" href = "#">My
                                                                                                                account</a>
                        </li>
                        <li><a class = "no-underline px-4 py-2 block text-black hover:bg-grey-light" href = "#">Notifications</a>
                        </li>
                        <li>
                            <hr class = "border-t mx-2 border-grey-ligght">
                        </li>
                        <li><a class = "no-underline px-4 py-2 block text-black hover:bg-grey-light"
                               href = "#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "navbar"
}
</script>

<style scoped>

</style>

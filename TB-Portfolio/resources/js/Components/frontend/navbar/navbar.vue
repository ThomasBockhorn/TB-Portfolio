<template>
    <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-transparent mb-3">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start">
                <button class="text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" v-on:click="toggleNavbar()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div v-bind:class="{'hidden': !showMenu, 'flex': showMenu}" class="lg:flex lg:flex-grow items-center">
                <ul class="flex flex-col lg:flex-row list-none ml-auto">
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#about">
                            <span class="ml-2">About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#projects">
                            <span class="ml-2">Projects</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75" href="#pablo">
                            <span class="ml-2">Contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "navbar",
    data() {
        return {
            showMenu: false
        }
    },
    methods: {
        toggleNavbar: function(){
            this.showMenu = !this.showMenu;
        }
    }
}
</script>
<style scoped>
  nav{
      z-index: 999;
  }

   .nav-item a span {
       color: #FFF;
       padding: 5px;
       font-family: "lato", sans-serif;
       font-weight: 300;
       font-size: 15px;
       letter-spacing: 10px;
       background: -webkit-linear-gradient(white, #38495a);
       background-clip:text;
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
    }
</style>

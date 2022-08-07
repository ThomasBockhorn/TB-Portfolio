<template>
    <div class="h-screen font-sans login bg-cover">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" @submit.prevent="submit">
                        <p class="text-gray-800 font-medium">Register</p>
                        <div class="">
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Your Name" v-model="form.name" aria-label="Name">
                        </div>
                        <div class="mt-2">
                            <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Your Email" v-model="form.email" aria-label="Email">
                        </div>
                        <div class="mt-2">
                            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="Password" v-model="form.password" aria-label="Password">
                        </div>
                        <div class="mt-2">
                            <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="password_confirmation" name="password_confirmation" type="password" required="" placeholder="Confirm Password" v-model="form.password_confirmation" aria-label="Confirm Password">
                        </div>
                        <div class="mt-4">
                            <button class = "px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type = "submit">Submit
                            </button>
                        </div>
                        <Link class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="/login"> Already have an account ?</Link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {Inertia} from '@inertiajs/inertia';
import {reactive} from 'vue';

export default {
    setup() {
        const form = reactive({
            name: null,
            email: null,
            password: null,
            password_confirmation: null,
        });

        function submit(){
            Inertia.post( '/register', form);
        }

        return{ form, submit}
    }
}
</script>


<template>
    <div class = "h-screen font-sans login bg-cover">
        <div class = "container mx-auto h-full flex flex-1 justify-center items-center">
            <div class = "w-full max-w-lg">
                <div class = "leading-loose">
                    <form class = "max-w-xl m-4 p-10 bg-white rounded shadow-xl" @submit.prevent = "submit">
                        <p class = "text-gray-800 font-medium">Login</p>
                        <div>
                            <input id = "email" v-model = "form.email" aria-label = "Email"
                                   class = "w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name = "email"
                                   placeholder = "Email" required = "" type = "text">
                        </div>
                        <div class = "mt-2">
                            <input id = "password" v-model = "form.password" aria-label = "Password"
                                   class = "w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" name = "password"
                                   placeholder = "Password" required = "" type = "password">
                        </div>
                        <div class = "mt-4 items-center justify-between">
                            <button class = "px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type = "submit">Submit
                            </button>
                        </div>
                        <Link
                            class = "block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800 mb-5 mt-5"
                            href = "#">
                            Not registered ?
                        </Link>
                        <Link
                            class = "block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800"
                            href = "/register">
                            Forgot Password?
                        </Link>
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
            email: null,
            password: null,
        });

        function submit() {
            Inertia.post('/login', form);
        }

        return {form, submit}
    }
}
</script>

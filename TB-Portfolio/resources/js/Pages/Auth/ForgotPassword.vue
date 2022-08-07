<script setup>
import {useForm} from '@inertiajs/inertia-vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <div class = "h-screen font-sans login bg-cover">
        <div class = "container mx-auto h-full flex flex-1 justify-center items-center">
            <div class = "w-full max-w-lg">
                <div class = "leading-loose">
                    <div class = "mb-4 text-sm text-gray-600">
                        Forgot your password? No problem. Just let us know your email address and we will email you a
                        password reset link that will allow you to choose a new one.
                    </div>
                    <div v-if = "status" class = "mb-4 font-medium text-sm text-green-600">
                        {{ status }}
                    </div>
                    <form class = "max-w-xl m-4 p-10 bg-white rounded shadow-xl" @submit.prevent = "submit">
                        <p class = "text-gray-800 font-medium">Login</p>
                        <div>
                            <input id = "email" v-model = "form.email" aria-label = "Email"
                                   autocomplete = "username"
                                   class = "w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                                   name = "email" placeholder = "Email" required = "" type = "text">
                        </div>
                        <div class = "mt-4 items-center justify-between">
                            <button class = "px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type = "submit">Email Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

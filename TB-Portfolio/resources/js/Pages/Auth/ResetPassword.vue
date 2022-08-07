<script setup>
import {useForm} from '@inertiajs/inertia-vue3';

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <div class = "h-screen font-sans login bg-cover">
        <div class = "container mx-auto h-full flex flex-1 justify-center items-center">
            <div class = "w-full max-w-lg">
                <div class = "leading-loose">
                    <form class = "max-w-xl m-4 p-10 bg-white rounded shadow-xl" @submit.prevent = "submit">
                        <p class = "text-gray-800 font-medium">Reset Password</p>
                        <div class = "mt-2">
                            <input id = "email" v-model = "form.email" aria-label = "Email" autocomplete = "username"
                                   autofocus class = "w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"
                                   name = "email" placeholder = "Your Email" required = "" type = "text">
                        </div>
                        <div class = "mt-2">
                            <input id = "password" v-model = "form.password" aria-label = "Password"
                                   autocomplete = "new-password"
                                   class = "w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" name = "password"
                                   placeholder = "Password" required = "" type = "password">
                        </div>
                        <div class = "mt-2">
                            <input id = "password_confirmation" v-model = "form.password_confirmation"
                                   aria-label = "Confirm Password" autocomplete = "new-password"
                                   class = "w-full px-2 py-2 text-gray-700 bg-gray-200 rounded"
                                   name = "password_confirmation" placeholder = "Confirm Password" required = ""
                                   type = "password">
                        </div>
                        <div class = "mt-4">
                            <button :disabled = "form.processing"
                                    class = "px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type = "submit">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>


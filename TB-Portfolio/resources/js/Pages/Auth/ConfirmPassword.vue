<script setup>
import {useForm} from '@inertiajs/inertia-vue3';

const form = useForm({
    password: '',
});

const submit = () => {
    form.post(route('password.confirm'), {
        onFinish: () => form.reset(),
    })
};
</script>

<template>
    <div class = "h-screen font-sans login bg-cover">
        <div class = "container mx-auto h-full flex flex-1 justify-center items-center">
            <div class = "w-full max-w-lg">
                <div class = "leading-loose">
                    <div class = "mb-4 text-sm text-gray-600">
                        This is a secure area of the application. Please confirm your password before continuing.
                    </div>

                    <form class = "max-w-xl m-4 p-10 bg-white rounded shadow-xl" @submit.prevent = "submit">
                        <div>
                            <input id = "password" v-model = "form.password" aria-label = "password"
                                   autocomplete = "username"
                                   class = "w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                                   name = "password" placeholder = "password" required = "" type = "text">
                        </div>
                        <div class = "mt-4 items-center justify-between">
                            <button :disabled = "form.processing"
                                    class = "px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type = "submit">Confirm
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

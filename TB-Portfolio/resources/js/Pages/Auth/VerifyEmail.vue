<template>
    <div class = "h-screen font-sans login bg-cover">
        <div class = "container mx-auto h-full flex flex-1 justify-center items-center">
            <div class = "w-full max-w-lg">
                <div class = "leading-loose max-w-xl m-4 p-10 bg-white rounded shadow-xl">

                    <p class = "text-black font-medium">Email Verification</p>
                    <div class = "mb-4 text-large text-black">
                        Thanks for signing up! Before getting started,
                        could you verify your email address by clicking on
                        the link we just emailed to you? If you didn't receive the email,
                        we will gladly send you another.
                    </div>
                    <div v-if = "verificationLinkSent" class = "mb-4 font-medium text-large text-black">
                        A new verification link has been sent to the email address you provided during registration.
                    </div>

                    <form @submit.prevent = "submit">
                        <div class = "mt-4 flex items-center justify-between">
                            <button :disabled = "form.processing"
                                    class = "px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                    type = "submit">Resend Verification Email
                            </button>
                        </div>
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
        const form = reactive({});

        function submit() {
            Inertia.post('email/verification-notification', form);
        }

        return {form, submit}
    },
    data() {
        return {
            verificationLinkSent: Boolean
        }

    },
    props: {
        status: String,
    },
    computed: {
        verify() {
            this.verificationLinkSent = this.$props.status === 'verification-link-sent';
        }
    }
}


</script>

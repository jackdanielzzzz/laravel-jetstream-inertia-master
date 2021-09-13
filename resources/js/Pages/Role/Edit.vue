<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Role
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

                <jet-validation-errors class="mt-4 mb-4 bg-red-100 p-4 border border-red-500 rounded-lg" />

                <form @submit.prevent="submit">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow-xl sm:rounded-tl-md sm:rounded-tr-md">
                        
                        <div>
                            <jet-label for="title" value="Title" />
                            <jet-input id="title" type="text" class="mt-1 block w-full" v-model="form.title" required autofocus />
                        </div>

                    </div>
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow-xl sm:rounded-bl-md sm:rounded-br-md">
                        
                        <jet-button class="text-right" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Save
                        </jet-button>

                    </div>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetInput from '@/Jetstream/Input'
    import JetButton from '@/Jetstream/Button'
    import JetLabel from '@/Jetstream/Label'
    import JetValidationErrors from '@/Jetstream/ValidationErrors'

    export default {
        components: {
            AppLayout,
            JetInput,
            JetLabel,
            JetButton,
            JetValidationErrors,
        },
        props:{
            Role: Object,
        },
        data() {
            return {
                form: this.$inertia.form({
                    title: this.Role.title,
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                    }))
                    .patch(this.route('roles.update', this.Role.id), {
                    })
            }
        }
    }
</script>

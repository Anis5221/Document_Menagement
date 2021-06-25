<template>
    <app-layout>
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="w-6/12 mx-auto my-4">
                            <div class="col-span-6 sm:col-span-4">
                                <jet-label for="head_line" value="Head Line" />
                                <jet-input id="head_line" type="text" class="mt-1 block w-full" v-model="form.head_line" ref="current_password" autocomplete="current-password" />
                                <jet-input-error :message="form.errors.head_line" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <jet-label for="details" value="Description" />
                                <textarea v-model="form.details" id="" class="w-full resize-none border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                                <jet-input-error :message="form.errors.details" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <jet-label for="branch_name" value="Brach Name" />
                                <jet-input id="branch_name" type="text" class="mt-1 block w-full" v-model="form.branch_name" />
                                <jet-input-error :message="form.errors.branch_name" class="mt-2" />
                            </div>

                             <div class="col-span-6 sm:col-span-4">
                                <jet-label for="branch_code" value="Brach Code" />
                                <jet-input id="branch_code" type="text" class="mt-1 block w-full" v-model="form.branch_code" />
                                <jet-input-error :message="form.errors.branch_code" class="mt-2" />
                            </div>

                             <div class="col-span-6 sm:col-span-4">
                                <jet-label for="occur_time" value="When Occur" />
                                <jet-input id="occur_time" type="date" class="mt-1 block w-full" v-model="form.occur_time" />
                                <jet-input-error :message="form.errors.occur_time" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4 my-2">
                                <jet-label for="file" value="Optional Upload Document" />
                                <input id="file" @input="form.file = $event.target.files[0]" type="file" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
                                <jet-input-error :message="form.errors.file" class="mt-2" />
                            </div>

                            <div class="flex items-center">
                                    <div class="col-span-6 sm:col-span-4 my-2 flex  items-center mr-8">
                                        <jet-label for="request_type" value="Request Type" />

                                        <select v-model="form.request_type" class="ml-4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="One">Argent</option>
                                            <option value="two">Normal</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4 my-2 flex  items-center">
                                        <jet-label for="priority" value="Priority" />

                                        <select v-model="form.priority" class="ml-4 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                            <option value="Argent">Argent</option>
                                            <option value="Normal">Normal</option>
                                        </select>
                                    </div>
                            </div>


                            <div class="col-span-6 sm:col-span-4">
                                <jet-label for="problem_url" value="Problem URL" />
                                <jet-input id="problem_url" type="text" class="mt-1 block w-full" v-model="form.problem_url" />
                                <jet-input-error :message="form.errors.problem_url" class="mt-2" />
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <jet-label for="contact_persone" value="Contact Person" />
                                <jet-input id="contact_persone" type="text" class="mt-1 block w-full" v-model="form.contact_persone" />
                                <jet-input-error :message="form.errors.contact_persone" class="mt-2" />
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <jet-label for="phone" value="Pone" />
                                <jet-input id="phone" type="number" class="mt-1 block w-full" v-model="form.phone"/>
                                <jet-input-error :message="form.errors.phone" class="mt-2" />
                            </div>

                            <div class="col-span-6 sm:col-span-4 my-4 flex left-0">
                                <jet-button @click.prevent="send" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Send
                                </jet-button>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetInput from '@/Jetstream/Input'
    import JetInputError from '@/Jetstream/InputError'
    import JetLabel from '@/Jetstream/Label'
    import JetButton from '@/Jetstream/Button'
    import JetFormSection from '@/Jetstream/FormSection'
    export default {
        components: {
            AppLayout,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetButton,
        },

        data() {
            return {
                form: this.$inertia.form({
                    head_line:'',
                    details:'',
                    branch_name:'',
                    branch_code:'',
                    occur_time:'',
                    file: '',
                    request_type:'select',
                    priority:'select',
                    problem_url:'',
                    contact_persone:'',
                    phone:'',

                })
            }
        },

        methods: {

            send () {
                this.form.post(route('complain.store'), {
                            // errorBag: 'updatePassword',
                            forceFormData: true,
                            preserveScroll: true,
                            onSuccess: () => {this.form.reset(), console.log("success")},
                            onError: () => {

                            }
                        })
            }
        }

    }
</script>

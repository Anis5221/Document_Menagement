<template>
    <app-layout>


        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <single-complain :data="data" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import SingleComplain from '../../Components/SingleComponent/SingleComplain.vue'

    export default {
        props:{
            complain:{}
        },
        components: {
            AppLayout,
            SingleComplain
        },
        data () {
            return {
                data:{}
            }
        },
        mounted () {
            this.data = this.complain
            
        }
    }
</script>

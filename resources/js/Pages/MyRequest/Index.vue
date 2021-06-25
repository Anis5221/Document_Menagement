<template>
    <app-layout>


        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <MyTable :data="data"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import MyTable from '../../Components/MyComplain/Table.vue'
    export default {
        props:{
            complains:{}
        },
        components: {
            AppLayout,
            MyTable,
        },
        data () {
            return {
                data:{}
            }
        },
        mounted () {
            this.data = this.complains
        }
    }
</script>

<template>
    <app-layout>


        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Table :data="data"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Table from '../Components/Complains/Table.vue'
    export default {
        props:{
            complains:{}
        },
        components: {
            AppLayout,
            Table,
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

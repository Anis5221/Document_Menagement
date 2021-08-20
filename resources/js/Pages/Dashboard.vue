<template>
    <app-layout>


        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-row justify-between my-2 mx-2">
                        <div class="flex flex-row">
                                <input type="text"  class="outline-none px-1 rounded w-28 mr-2" placeholder="From" >
                                <input type="text" class="outline-none px-1 rounded w-28 mr-2" placeholder="To" >
                                <button class="bg-gray-700 uppercase px-2 text-gray-50 hover:bg-gray-500 rounded-md outline-none">Search</button>

                        </div>
                        <div class="flex flex-row justify-center items-center">
                            <label for="" class="mr-2 text-lg font-medium" >Status:</label>
                            <select class="rounded-md" @change="onChange($event)"> name="" id="">
                                <option selected value="all">All</option>
                                <option value="panding">Panding</option>
                                <option value="inProccess">In Proccess</option>
                                <option value="resolved">Resolved</option>
                            </select>
                        </div>
                        <div class="flex flex-row">
                            <input type="text" class="outline-none px-1 rounded w-40 mr-2 " placeholder="Request Id">
                            <button class="bg-gray-700 px-2 uppercase text-gray-50 border-none hover:bg-gray-500 rounded-md outline-none ">Search</button>
                        </div>
                    </div>
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
                data: this.complains,
                pandingData:[]
            }
        },

        methods: {
            onChange (event) {
                this.pandingData = []
                const value = event.target.value
                if(value === "panding"){
                    this.data = this.complains.filter((complain, index) => complain.status === "panding")

                }else if (value === "inProccess") {
                    this.data = this.complains.filter((complain, index) => complain.status === "inProccess")

                }else if (value === "resolved") {
                    this.data = this.complains.filter((complain, index) => complain.status === "resolved")
                }else{
                    this.data = this.complains
                }

            }
        }

    }
</script>

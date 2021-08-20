<template>
    <app-layout>


        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                         <h2>Vue Js Google Pie Chart Demo</h2>

                         <div class="a" id="chart1">

                         </div>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>

</template>
<script>
    import AppLayout from '@/Layouts/AppLayout'

    import {GoogleCharts} from 'google-charts';

    export default {
        name: "Welcomme",
        // extends: GChart,
        components: {
            AppLayout,
            // VueGoogleCharts
        },
        props: {inProccess:Object, inRosolved:Object},
        data () {
            return {
                data: [
          ['Daily Routine', 'Hours per Day'],
          ['Work',     14],
          ['Eat',      1],
          ['Reading',  2],
          ['Exercise', 2],
          ['Sleep',    5]
      ],
      options: {
        width: 1100,
        height: 400
      }
            }
        },

        created() {
            console.log("hello")
             console.log(this.inProccess)
            console.log(this.inResolved)

        },

        method: {
            drawChart() {


            }
        },

        created(){


            GoogleCharts.load(function(){

                const data = GoogleCharts.api.visualization.arrayToDataTable([
                    ['Chart thing', 'Chart amount'],
                    ['Lorem ipsum', 60],
                    ['Dolor sit', 22],
                ]);

                const pie_1_chart = new GoogleCharts.api.visualization.PieChart(document.getElementById('chart1'));
                pie_1_chart.draw(data);
            });



        }

    }
</script>

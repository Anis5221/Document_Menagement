<template>
  <div>
      <div v-if="data" class="border-t-2 border-red-600 ">
          <div class="h-10 py-4 flex justify-center items-center bg-gray-500">
                <h1>{{data.head_line}}</h1>
          </div>

          <div class="mt-2 py-4">
              <table class="table-fixed w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                      <tr>
                          <th class="w-1/5 py-2 px-4 ">Name</th>
                          <th class="w-4/5 py-2 px-4 ">Data</th>
                      </tr>
                  </thead>

                  <tbody class="divide-y divide-gray-200">
                      <tr v-for="one in 10" :key="one">
                          <td class="py-2 px-4">Request Id: </td>
                          <td class="flex justify-center items-center py-2">{{data.request_id}}</td>
                      </tr>

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    props: {
        data:{}
    },

    data() {
        return {
            propsData: {},

            // name: {
            //     'Request Id': '', 'Rising Data': '', 'Product/Project': 'MiCrofin 310 Service', 'Document File': this.data.file, 'Complain': this.data.details,
            //     'Branch Name': this.data.branch_name, 'Branch Code': this.data.branch_code, 'Request Type': this.data.request_type, 'Priority': this.data.priority,
            //     'Status': this.data.status, 'Person Contact Details': this.data.contact_person, 'Problem URL': this.data.problem_url, 'Phone Nubber': this.data.problem_url
            // }
        }
    },

    mounted () {
        this.propsData = this.data

    }




}
</script>

<style>

</style>

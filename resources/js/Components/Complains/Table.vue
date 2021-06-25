<template>
  <div>
      <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table v-if="data" class="table-fixed divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-1 py-2  w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Serial
                            </th>
                            <th scope="col" class="px-1 py-2 w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Id
                            </th>
                            <th scope="col" class="px-1 py-2  w-1/15 font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col" class="px-1 py-2  w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Raiging Data
                            </th>
                            <th scope="col" class="px-1 py-2  w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Assign To
                            </th>
                            <th scope="col" class="px-1 py-2  w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Product/Project
                            </th>
                            <th scope="col" class="px-1 py-2  w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="px-1 py-2  w-1/20 font-medium text-gray-500 uppercase tracking-wider">
                                Comments
                            </th>
                            <th scope="col" class="px-1 py-2  w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Resolving Data
                            </th>
                            <th scope="col" class="px-1 py-2  w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-green-400 hover:text-white" v-for="complain in data" :key="complain">
                        <td class="py-4 px-2">
                            {{complain.id}}.
                        </td>
                        <td class="py-4 px-2 ">
                            {{complain.request_id}}
                        </td>
                        <td class="py-4 px-2 ">
                            <inertia-link class="hover:underline text-blue-500 hover:text-blue-800" :href="route('complain.show',{id:complain.id})">{{complain.head_line}}</inertia-link>
                        </td>
                        <td class="py-4 px-2 ">
                            {{complain.occur_time}}
                        </td>
                        <td class="py-4 px-2 ">
                            Tomal Ahmed
                        </td>
                        <td class="py-4 px-2 ">
                            MiCrofin 310 Service
                        </td>
                        <td class="py-4 px-2 ">
                            {{complain.status}}
                        </td>
                        <td class="py-4 px-2 ">
                            this a comments
                        </td>
                        <td class="py-4 px-2 ">
                            {{complain.occur_time}}
                        </td>

                        <td class="py-4 px-2 ">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                        </tr>
                    </tbody>
                </table>

                <table v-else class="table-fixed divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class=" w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Serial
                            </th>
                            <th scope="col" class="w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Id
                            </th>
                            <th scope="col" class=" w-1/15 font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col" class=" w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Raiging Data
                            </th>
                            <th scope="col" class=" w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Assign To
                            </th>
                            <th scope="col" class=" w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Product/Project
                            </th>
                            <th scope="col" class=" w-1/10 font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class=" w-1/20 font-medium text-gray-500 uppercase tracking-wider">
                                Comments
                            </th>
                            <th scope="col" class=" w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Resolving Data
                            </th>
                            <th scope="col" class=" w-2/10 font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="flex justify-center items-center">
                            <td>Data not Found!!!</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>

  </div>
</template>

<script>
export default {

    props: {
        data:{}
    }
}
</script>

<style>

</style>

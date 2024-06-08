<script setup>
import Pagination from '../../Shared/Pagination.vue';
import { ref, watch } from "vue"
import { router } from '@inertiajs/vue3'
import debounce  from 'lodash/debounce';

let props = defineProps({
    users: Object,
    filter:Object,
    can:Object
})

const search = ref(props.filter.search);

watch(search, debounce( function (value) {
    console.log('triggered');
    router.get('/users',{ search: value },{preserveState: true,replace:true,});
},300));

</script>
<template>
    <div class="container">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
            <h1 class="text-3xl mb-4">Users</h1>
            <Link v-if="props.can.create" href="users/create" class="text-sm ml-3 text-blue-500">New User</Link>
            </div>
            <input type="text" placeholder="Search" v-model="search" class="rounded border  px-3 py-2">
        </div>
        <!-- users table -->
        <div v-if="props.users.data.length" class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users.data" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ user.name }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td v-if="user.can.edit" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <Link :href="`/users/${user.id}/edit`"
                                            class="text-indigo-600 hover:text-indigo-900">
                                        Edit
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div v-else>
            <h1 class="text-xl text-gray-400 font-semibold text-center p-5">No User's Exists</h1>
        </div>


        <!-- paginator -->
        <Pagination :links="users.links" class="mt-6" />
    </div>
</template>

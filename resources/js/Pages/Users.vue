<script setup>
defineProps({
    users:Array
})
</script>
<template>
    <div class="container">
        <h1>Users</h1>
        <ul>
            <li v-for="user in users" v-text="user.name" :key="user.id"></li>
        </ul>
    </div>
</template>

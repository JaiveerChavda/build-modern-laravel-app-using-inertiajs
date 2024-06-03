<script setup>
import NavLink from './NavLink.vue';
</script>

<template>
     <nav>
        <ul class="space-x-6 flex">
            <li><NavLink href="/" :active="$page.url == '/'">Home</NavLink></li>
            <li><NavLink href="/about" :active="$page.url.startsWith('/about')">About</NavLink></li>
            <li><NavLink href="/users" :active="$page.url.startsWith('/users')">Users</NavLink></li>
        </ul>
    </nav>
</template>

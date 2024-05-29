<script>
import {Link} from '@inertiajs/vue3';
import NavLink from './NavLink.vue';
export default{
    components:{
        Link,NavLink
    }
}

</script>

<template>
     <nav class="mt-6">
        <ul class="list">
            <li><NavLink href="/" :active="$page.url == '/'">Home</NavLink></li>
            <li><NavLink href="/about" :active="$page.url.startsWith('/about')">About</NavLink></li>
            <li><NavLink href="/settings" :active="$page.url.startsWith('/settings')">Settings</NavLink></li>
        </ul>
    </nav>
</template>

<script>
import {Link} from '@inertiajs/vue3';
export default{
    components:{
        Link
    }
}

</script>

<template>
     <nav class="mt-6">
        <ul class="list">
            <li><Link class="text-blue-500 hover:underline" href="/">Home</Link></li>
            <li><Link class="text-blue-500 hover:underline" href="/about">About</Link></li>
            <li><Link class="text-blue-500 hover:underline" href="/settings">Settings</Link></li>
            <li><Link class="text-blue-500 hover:underline" href="/logout" method="post" as="button" :data="{foo:'bar'}">Logout</Link></li>
        </ul>
    </nav>
</template>

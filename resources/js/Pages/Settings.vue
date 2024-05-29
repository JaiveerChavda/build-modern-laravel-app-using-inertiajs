<script>
import Nav from "../Shared/Nav.vue"
import { Link } from "@inertiajs/vue3";
export default{
    components:{
        Nav,Link
    },
    props:{
        time:String
    }
}
</script>
<template>
    <div class="card">
        <h1>Settings</h1>
    </div>

    <Nav/>

    <div class="mt-[800px]">

        <p>{{ time }} <span><Link href="/settings" class="text-blue-500" preserve-scroll>refresh</Link></span></p>
    </div>

</template>

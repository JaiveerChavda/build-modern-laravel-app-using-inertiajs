<script>
import Layout from "../Shared/Layout.vue";
import { Link } from "@inertiajs/vue3";
export default {
    components: {
        Layout, Link
    },
    props: {
        time: String
    }
}
</script>
<template>
    <Layout>
        <div class="card">
            <h1 class="text-3xl">Settings</h1>
        </div>

        <div class="mt-[800px]">

            <p>{{ time }} <span>
                    <Link href="/settings" class="text-blue-500" preserve-scroll>refresh</Link>
                </span></p>
        </div>
    </Layout>
</template>

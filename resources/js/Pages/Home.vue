<script>
export default{
    props : {
        name: String,
        frameworks: Array,
    }
}
</script>
<template>
    <div class="card">
        <h1>{{ name }}</h1>
        <ul>
            <li v-for="framework of frameworks" v-text="framework"></li>
        </ul>
    </div>
</template>

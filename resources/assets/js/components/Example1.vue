<template>
    <div class="container">
        <div class="row">
            <h1>Hello</h1>
        </div>
        <li v-for:"users in user">user.name</li>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

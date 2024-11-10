<!-- resources/js/App.vue -->
<template>
    <div>
        <nav class="bg-gray-800 text-white p-4">
            <router-link to="/" class="mr-4">Home</router-link>
            <router-link to="/about">About</router-link>
        </nav>

        <router-view></router-view>
    </div>
</template>

<script setup>
// App component logic goes here
</script>

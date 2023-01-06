<script setup>
import HeaderView from "./components/views/partials/HeaderView.vue";
import FooterView from "./components/views/partials/FooterView.vue";
</script>
<template>
    <HeaderView />
    <div class="bg-white">
        <div class="container">
            <RouterView></RouterView>
        </div>
    </div>
    <FooterView />
</template>

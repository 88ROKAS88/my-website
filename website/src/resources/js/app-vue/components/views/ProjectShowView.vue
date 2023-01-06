<script setup>
import axios from "axios";
import { ref, onBeforeMount } from "vue";

import { useRoute } from "vue-router";
const route = useRoute();

const project = ref(false);

axios
    .get(`/api/v1/projects/${route?.params?.project}/show/`)
    .then((response) => (project.value = response.data.project));
</script>
<template>
    <div class="py-2">
        <div v-if="project" class="">
            <div class="card my-1">
                <img :src="project.image" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">{{ project.title }}</h5>
                    <p class="card-text">{{ project.description }}</p>

                    <RouterLink
                        :to="{
                            name: 'projects.index',
                        }"
                        type="button"
                        class="btn btn-outline-dark"
                        active-class="active"
                    >
                        Go back
                    </RouterLink>
                </div>
            </div>
        </div>
        <h3 v-else>Loading...</h3>
    </div>
</template>

<script setup>
import axios from "axios";
import { ref, onBeforeMount } from "vue";

const projects = ref([]);

onBeforeMount(async () => {
    projects.value = await (await axios.get("/api/v1/projects")).data.projects;
});
</script>
<template>
    <div class="py-2">
        <div v-if="projects.length > 0" class="">
            <div v-for="project in projects" class="col">
                <div class="card d-flex flex-row my-1">
                    <img
                        :src="project.image"
                        class="card-img-top"
                        style="width: 18rem"
                        alt="..."
                    />
                    <div class="card-body">
                        <h5 class="card-title">{{ project.title }}</h5>
                        <p class="card-text">{{ project.short_description }}</p>
                        <RouterLink
                            :to="{
                                name: 'project.show',
                                params: { project: project.id },
                            }"
                            class="btn btn-outline-dark"
                        >
                            Read more
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>
        <h3 v-else>Loading...</h3>
    </div>
</template>

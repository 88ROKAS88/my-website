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
                <div class="card my-1">
                    <div class="d-flex flex-column flex-md-row">
                        <div class="col-md-6 col-lg-4">
                            <img
                                :src="project.image"
                                class="card-img-top"
                                alt="image"
                            />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                {{ project.title }}
                            </h5>
                            <p class="card-text">
                                {{ project.short_description }}
                            </p>
                            <h6 class="card-title text-center">Tools</h6>
                            <p style="white-space: pre-wrap" class="card-text">
                                {{ project.tools }}
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-1">
                        <RouterLink
                            :to="{
                                name: 'project.show',
                                params: { project: project.id },
                            }"
                            class="btn btn-outline-dark my-1"
                        >
                            Read more
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>
        <h3 v-else class="py-5 text-center">Loading...</h3>
    </div>
</template>

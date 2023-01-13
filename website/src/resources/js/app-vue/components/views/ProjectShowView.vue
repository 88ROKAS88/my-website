<script setup>
import axios from "axios";
import { ref, onBeforeMount } from "vue";

import { useRoute } from "vue-router";
const route = useRoute();

const project = ref(false);
const links = ref(false);

axios
    .get(`/api/v1/projects/${route?.params?.project}/show/`)
    .then((response) => {
        project.value = response.data.project;
        links.value = response.data.links;
    });
</script>
<template>
    <div class="py-2">
        <div v-if="project" class="">
            <div class="card my-1">
                <div class="row">
                    <div class="col-lg-6">
                        <img
                            :src="project.image"
                            class="card-img-top col-lg-6"
                            alt="project-image"
                        />
                    </div>
                    <div class="card-body col-lg-6">
                        <h4 class="card-title text-center">
                            {{ project.title }}
                        </h4>
                        <p style="white-space: pre-wrap" class="card-text">
                            {{ project.short_description }} <br />
                            <br />
                            {{ project.description }}
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Tools</h5>
                    <p style="white-space: pre-wrap" class="card-text">
                        {{ project.tools }}
                    </p>
                    <h5 v-if="links" class="card-title text-center">Links</h5>
                    <ul v-if="links">
                        <li
                            v-for="link in links"
                            class="text-center list-group-item mt-1"
                        >
                            <a
                                target="_blank"
                                class="text-black text-uppercase text-decoration-none"
                                :href="link.link"
                            >
                                {{ link.title }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-center my-1">
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

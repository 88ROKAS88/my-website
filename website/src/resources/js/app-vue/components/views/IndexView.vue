<script setup></script>
<template>
    <div class="py-5">
        <h4 class="text-center mt-5">Junior full stack developer</h4>
        <h5 class="text-center">Rokas Misevičius</h5>
        <div>
            <div class="col-md-6 text-center mt-5">
                <h4>My stack:</h4>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://laravel.com/"
                                >
                                    <span class="fw-bold">Laravel</span>
                                </a>
                                <br />
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://laravel.com/docs/9.x/blade"
                                >
                                    Blade
                                </a>
                                <br />
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://laravel.com/docs/9.x/starter-kits#laravel-breeze"
                                >
                                    Breeze
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://vuejs.org/"
                                >
                                    <span class="fw-bold">Vue.js</span>
                                </a>
                                <br />
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://router.vuejs.org/"
                                >
                                    Vue-router
                                </a>
                                <br />
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://pinia.vuejs.org/"
                                >
                                    Pinia
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://getbootstrap.com/"
                                >
                                    <span class="fw-bold">Bootstrap</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://www.php.net/"
                                >
                                    <span class="fw-bold">PHP</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
                                >
                                    <span class="fw-bold">Javascript</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://en.wikipedia.org/wiki/SQL"
                                >
                                    <span class="fw-bold">SQL</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://en.wikipedia.org/wiki/HTML"
                                >
                                    <span class="fw-bold">HTML</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a
                                    target="_blank"
                                    class="text-black text-decoration-none"
                                    href="https://en.wikipedia.org/wiki/CSS"
                                >
                                    <span class="fw-bold">CSS</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6"></div>
        </div>

        <div class="col-md-6 text-center mt-5">
            <h4>Software I'm using:</h4>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>
                            <a
                                target="_blank"
                                class="text-black text-decoration-none"
                                href="https://git-scm.com/"
                            >
                                <span class="fw-bold">Git</span>
                            </a>
                            <br />
                            <a
                                target="_blank"
                                class="text-black text-decoration-none"
                                href="https://github.com/"
                            >
                                GitHub Desktop
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a
                                target="_blank"
                                class="text-black text-decoration-none"
                                href="https://www.docker.com/"
                            >
                                <span class="fw-bold">Docker</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a
                                target="_blank"
                                class="text-black text-decoration-none"
                                href="https://www.npmjs.com/"
                            >
                                <span class="fw-bold">NPM</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a
                                target="_blank"
                                class="text-black text-decoration-none"
                                href="https://code.visualstudio.com/"
                            >
                                <span class="fw-bold">VS Code</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a
                                target="_blank"
                                class="text-black text-decoration-none"
                                href="https://www.heidisql.com/"
                            >
                                <span class="fw-bold">HeidiSQL</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row my-3">
            <div class="col-md-6">
                <RouterLink
                    :to="{
                        name: 'projects.index',
                    }"
                    type="button"
                    class="btn btn-outline-dark my-1 mx-1 col-12"
                    active-class="active"
                >
                    Projects
                </RouterLink>
            </div>
            <div class="col-md-6">
                <RouterLink
                    :to="{
                        name: 'contact',
                    }"
                    type="button"
                    class="btn btn-outline-dark my-1 mx-1 col-12"
                    active-class="active"
                >
                    Contact
                </RouterLink>
            </div>
        </div>
    </div>
</template>

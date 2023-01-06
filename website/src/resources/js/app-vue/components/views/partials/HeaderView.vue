<template>
    <header class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Portfolio Website</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <RouterLink
                            :to="{
                                name: 'index',
                            }"
                            type="button"
                            class="nav-link"
                            active-class="active"
                        >
                            Home
                        </RouterLink>
                        <RouterLink
                            :to="{
                                name: 'projects.index',
                            }"
                            type="button"
                            class="nav-link"
                            active-class="active"
                        >
                            Projects
                        </RouterLink>
                        <RouterLink
                            :to="{
                                name: 'contact',
                            }"
                            type="button"
                            class="nav-link"
                            active-class="active"
                        >
                            Contact
                        </RouterLink>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

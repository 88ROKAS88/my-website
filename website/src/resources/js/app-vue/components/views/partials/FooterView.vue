<template>
    <footer class="p-3 container text-light">
        The website is under construction.
        <br />
        Visit websites <a href="http://web-dev-rm.com/welcome/">WEB version</a>.
        <br />
        Website is using only essential cookies. Here u can read
        <RouterLink
            :to="{
                name: 'cookiepolicy',
            }"
        >
            Cookie Policy </RouterLink
        >.
    </footer>
</template>

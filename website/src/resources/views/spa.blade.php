<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/bootstrap.bundle.min.js','resources/css/bootstrap.min.css', 'resources/js/app-vue/main.js'])
    <title>{{ config('app.name') }}</title>
</head>

<body>
    <div class="min-vh-100 bg-dark" id="app">
    </div>
</body>

</html>
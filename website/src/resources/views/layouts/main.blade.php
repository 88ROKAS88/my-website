<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    @vite(['resources/js/bootstrap.bundle.min.js','resources/css/bootstrap.min.css'])
    <title>{{ config('app.name') }} - @yield('title')</title>
</head>

<body>
    <div class="min-vh-100 bg-secondary-subtle">
        @include('partials.header')

        <div class="bg-white">
            <main class="container py-3">
                @yield('content')
            </main>
        </div>

        @include('partials.footer')
    </div>
</body>

</html>
@extends('layouts.main')
@section('title','Cookie policy')
@section('content')

<div class="py-5">
    <h1 class="my-5">Cookie Policy</h1>
    <p>This website uses only essential cookies</p>
    <ul>
        <li>Laravel session cookie</li>
        <li>
            <a target="_blank" class="" href="https://laravel.com/docs/9.x/csrf">
                XSRF-TOKEN
            </a>
        </li>
    </ul>
</div>

@endsection
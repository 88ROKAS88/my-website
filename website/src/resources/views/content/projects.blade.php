@extends('layouts.main')
@section('title','Projects')
@section('content')

<h1>CONTENT- projects</h1>
@foreach ($projects as $project)


<div class="card d-flex flex-row">
    <img src="{{ $project->image }}" class="card-img-top" style="width: 18rem;" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $project->title }}</h5>
        <p class="card-text">{{ $project->short_description }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>

@endforeach
@endsection
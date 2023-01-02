@extends('layouts.main')
@section('title','Projects')
@section('content')


<div class="card my-1">
    <img src="{{ $project->image }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $project->title }}</h5>
        <p class="card-text">{{ $project->description }}</p>
        <a href="{{ route('projects.index') }}" class="btn btn-outline-dark">Go back</a>
    </div>
</div>


@endsection
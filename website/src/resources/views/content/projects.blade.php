@extends('layouts.main')
@section('title','Projects')
@section('content')

<p>Here u can find my previos projects and theirs github repositories.</p>

@foreach ($projects as $project)
<div class="card my-1">
    <div class="d-flex flex-column flex-md-row">
        <div class="col-md-6 col-lg-4">
            <img src="{{ $project->image }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->short_description }}</p>
            <h6 class="card-title text-center">Tools</h6>
            <p class="card-text">{!! nl2br(e($project->tools)) !!}</p>
        </div>
    </div>
    <div class="d-flex justify-content-center my-1">

        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-dark my-1">Read more</a>
    </div>
</div>
@endforeach

@endsection
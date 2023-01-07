@extends('layouts.main')
@section('title','Projects')
@section('content')

<p>Here u can find my previos projects and theirs github repositories.</p>

@foreach ($projects as $project)
<div class="card d-flex  flex-md-row my-1">

    <div class="col-md-5 col-lg-3">
        <img src="{{ $project->image }}" class="card-img-top" alt="...">
    </div>

    <div class="card-body">
        <h5 class="card-title">{{ $project->title }}</h5>
        <p class="card-text">{{ $project->short_description }}</p>
        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-dark">Read more</a>
    </div>


</div>
@endforeach

@endsection
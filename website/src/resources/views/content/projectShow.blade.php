@extends('layouts.main')
@section('title','Projects')
@section('content')


<div class="card my-1 ">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ $project->image }}" class="card-img-top col-lg-6" alt="...">
        </div>
        <div class="card-body col-lg-6">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text">{{ $project->description }}</p>
            <a href="{{ route('projects.index') }}" class="btn btn-outline-dark">Go back</a>
        </div>
    </div>
</div>


@endsection
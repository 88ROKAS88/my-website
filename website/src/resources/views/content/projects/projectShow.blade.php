@extends('layouts.main')
@section('title','Projects')
@section('content')


<div class="card my-1 ">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ $project->image }}" class="card-img-top col-lg-6" alt="...">
        </div>
        <div class="card-body col-lg-6">
            <h4 class="card-title text-center">{{ $project->title }}</h4>
            <p class="card-text"> {{ $project->short_description }} <br /> <br /> {!! nl2br(e($project->description)) !!} </p>

        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title text-center">Tools</h5>
        <p class="card-text">{!! nl2br(e($project->tools)) !!}</p>
        <h5 class="card-title text-center">Links</h5>
        <ul>
            @foreach ($links as $link)
            <li class="text-center list-group-item mt-1">
                <a target="_blank" class="text-black text-uppercase text-decoration-none" href="{{ $link->link }}"> {{ $link->title }} </a>
            </li>
            @endforeach
        </ul>
    </div>
    @auth
    @if( Auth::user()->is_admin )
    <div class="d-flex justify-content-center my-1">
        <a href="{{ route('projects.admin.createlink', $project->id) }}" class="mx-1 btn btn-outline-danger my-1">Add link</a>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <a href="{{ route('projects.admin.edit', $project->id) }}" class="mx-1 btn btn-outline-danger my-1">Edit project</a>
    </div>
    @endif
    @endauth
    <div class="d-flex justify-content-center my-1">
        <a href="{{ route('projects.index') }}" class="btn btn-outline-dark">Go back</a>
    </div>
</div>


@endsection
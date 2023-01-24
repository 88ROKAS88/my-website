@extends('layouts.main')
@section('title','Projects')
@section('content')


<div class=" my-1 ">


    <form action="{{ route('projects.admin.saveChanges', $project->id) }}" method="POST">
        <h1 class="text-center">Edit</h1>
        @csrf

        <input name="id" value="{{ $project->id }}" type="hidden">
        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-title">Title</span>
            <input type="text" class="form-control" value="{{ $project->title }}" name="title">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text " id="my-forn-short_description">Short_description</span>
            <textarea class="form-control" name="short_description">{{ $project->short_description }}</textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-description">Description</span>
            <textarea class="form-control" name="description">{{ $project->description }}</textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-tools">Tools</span>
            <textarea class="form-control" name="tools"> {{ $project->tools }} </textarea>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-image">Image</span>
            <input type="text" class="form-control" value="{{ $project->image }}" name="image">
        </div>

        <button class="btn btn-outline-secondary" type="submit">Save</button>

    </form>




</div>


@endsection
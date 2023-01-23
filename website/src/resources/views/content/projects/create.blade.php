@extends('layouts.main')
@section('title','Projects')
@section('content')


<div class=" my-1 ">


    <form action="{{ route('projects.admin.save') }}" method="POST">
        <h1 class="text-center">Create</h1>
        @csrf


        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-title">Title</span>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text " id="my-forn-short_description">Short_description</span>
            <textarea class="form-control" name="short_description"></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-description">Description</span>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-tools">Tools</span>
            <textarea class="form-control" name="tools"></textarea>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-image">Image</span>
            <input type="text" class="form-control" name="image">
        </div>

        <button class="btn btn-outline-secondary" type="submit">Save</button>

    </form>




</div>


@endsection
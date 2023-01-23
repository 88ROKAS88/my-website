@extends('layouts.main')
@section('title','Projects')
@section('content')


<div class=" my-1 ">


    <form action="{{ route('projects.admin.savelink') }}" method="POST">
        <h1 class="text-center">Create </h1>
        @csrf

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Project id</span>
            <input type="number" class="form-control" name="project_id" value="{{$project}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-title">Title</span>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="my-form-image">Link</span>
            <input type="text" class="form-control" name="link">
        </div>

        <button class="btn btn-outline-secondary" type="submit">Save</button>

    </form>




</div>


@endsection
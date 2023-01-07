<?php

namespace App\Http\Controllers\Projects;

use App\Models\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        return view('content.projects', compact('projects'));
    }
    public function show(Project $project)
    {
        return view('content.projectShow', compact('project'));
    }
}

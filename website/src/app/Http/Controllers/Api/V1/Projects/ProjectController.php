<?php

namespace App\Http\Controllers\Api\V1\Projects;

use App\Models\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::get();
        return compact('projects');
    }

    public function show(Project $project)
    {
        // dd($project);
        // $project = Project::get();
        return compact('project');
    }
}

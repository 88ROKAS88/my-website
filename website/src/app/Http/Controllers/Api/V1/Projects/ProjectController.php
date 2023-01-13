<?php

namespace App\Http\Controllers\Api\V1\Projects;

use App\Models\Project;
use App\Models\ProjectLink;

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
        $links = ProjectLink::where('project_id', '=', $project->id)->get();
        return compact('project', 'links');
    }
}

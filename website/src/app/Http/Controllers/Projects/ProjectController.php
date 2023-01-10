<?php

namespace App\Http\Controllers\Projects;

use App\Models\Project;
use App\Models\ProjectLink;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('content.projects', compact('projects'));
    }
    public function show(Project $project)
    {
        // TEMPORARY SOLUTION
        $links = ProjectLink::where('project_id', '=', $project->id)->get();
        return view('content.projectShow', compact('project', 'links'));
    }
}

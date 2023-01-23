<?php

namespace App\Http\Controllers\Projects;

use Illuminate\Support\Facades\Auth;
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


    public function create()
    {
        return view('content.projects.create');
    }
    public function save(Request $request)
    {
        if (Auth::user()->is_admin) {
            $project = new Project();
            $project->title             = $request->get('title');
            $project->short_description = $request->get('short_description');
            $project->description       = $request->get('description');
            $project->tools             = $request->get('tools');
            $project->image             = $request->get('image');
            $project->save();
            return redirect()->route('projects.show', $project->id);
        }
        return redirect()->route('projects.index');
    }
    public function delete(Project $project)
    {
        if (Auth::user()->is_admin) {
            $project->delete();
        }
        return redirect()->route('projects.index');
    }



    public function createlink(Request $request)
    {
        $project = $request->project;
        return view('content.projects.createlink', compact('project'));
    }
    public function savelink(Request $request)
    {
        if (Auth::user()->is_admin) {
            $projectLink = new ProjectLink();
            $projectLink->project_id = $request->get('project_id');
            $projectLink->title      = $request->get('title');
            $projectLink->link       = $request->get('link');
            $projectLink->save();
        }
        return redirect()->route('projects.show', $request->get('project_id'));
    }
}

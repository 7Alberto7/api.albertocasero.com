<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function index() {
        $repo = new ProjectRepository;
        return response()->json($repo->all());
    }

    public function image(Project $project)
    {
        $path = '/projects/'.$project->image;
        return Storage::disk('public')->response($path);
    }
}

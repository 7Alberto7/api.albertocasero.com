<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{

    public function index() {
        $repo = new ProjectRepository;
        return response()->json($repo->all());
    }
}

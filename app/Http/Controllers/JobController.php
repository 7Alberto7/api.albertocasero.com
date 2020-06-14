<?php

namespace App\Http\Controllers;

use App\Repositories\JobRepository;

class JobController extends Controller
{

    public function index() {
        $repo = new JobRepository;
        return response()->json($repo->all());
    }
}

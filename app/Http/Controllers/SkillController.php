<?php

namespace App\Http\Controllers;

use App\Repositories\SkillRepository;


class SkillController extends Controller
{
    public function index() {
        $repo = new SkillRepository;
        return response()->json($repo->all());
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Repositories\SkillRepository;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index() {
        $repo = new SkillRepository;
        return response()->json($repo->all());
    }

    public function image(Skill $skill)
    {
        $path = '/skills/'.$skill->image;
        return Storage::disk('public')->response($path);
    }

    public function imageByName($name)
    {
        $skill = Skill::where('name', 'like', $name)->first();
        if ($skill) {
            $path = '/skills/'.$skill->image;
            return Storage::disk('public')->response($path);
        }
        abort(404);
    }
}

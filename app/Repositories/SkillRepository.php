<?php

namespace App\Repositories;

class SkillRepository extends Repository {

    function model()
    {
        return 'App\Models\Skill';
    }

    public function all()
    {
        return $this->model->select(
            [
                'name',
                'image',
                'description',
                'level_of_knowledge',
                'currently',
            ]
        )->get();
    }

}

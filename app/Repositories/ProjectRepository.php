<?php

namespace App\Repositories;

class ProjectRepository extends Repository {

    function model()
    {
        return 'App\Models\Project';
    }

    public function all()
    {
        return $this->model->select(
            [
                'name',
                'image',
                'description',
                'relevance',
                'started_at',
                'finished_at',
                'skills',
                'url',
                'resources',
            ]
        )->get();
    }

}

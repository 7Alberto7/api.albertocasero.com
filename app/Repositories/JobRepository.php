<?php

namespace App\Repositories;

class JobRepository extends Repository {

    function model()
    {
        return 'App\Models\Job';
    }

    public function all()
    {
        return $this->model->select(
            [
                'company',
                'position',
                'description',
                'begin_at',
                'end_at',
            ]
        )->get();
    }

}

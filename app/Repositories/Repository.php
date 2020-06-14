<?php

namespace App\Repositories;

use App\Exceptions\RepositoryException;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{

    /**
     * @var
     */
    protected $model;

    /**
     * @param App $app
     */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * Specify Model class name in
     *
     * @return mixed
     */
    abstract function model();

    /**
     * @return Model
     */
    public function makeModel()
    {
        $model = app()->make($this->model());

        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        return $this->model = $model;
    }


}

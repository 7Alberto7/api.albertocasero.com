<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Job extends Model
{
    protected $dates = ['created_at', 'updated_at'];
}

<?php 

namespace App\Repositories\Criteria;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;

class ViewLow extends Criteria
{

    public function apply($model, Repository $repository)
    {
        $model = $model->orderBy('created_at', 'asc');

        return $model;
    }
}
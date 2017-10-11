<?php 

namespace App\Repositories\Criteria;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;

class ViewHign extends Criteria
{

    public function apply($model, Repository $repository)
    {
        $model = $model->orderBy('created_at', 'desc');

        return $model;
    }
}

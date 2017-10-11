<?php

namespace App\Repositories;

use App\Repositories\Eloquent\Repository;
use App\Models\Comment;

class HomeRepository extends Repository
{
	public function model() 
    {
        return 'App\Models\Comment';
    }

    public function transformer()
    {
        return "App\\Transformers\\HomeTransformer";
    }

    public function add($data)
    {    	
        $uid = auth()->id() ? auth()->id() : 0;
        $data['uid'] = $uid;
        $comment = $this->skipTransformer()->create($data);
    }
}
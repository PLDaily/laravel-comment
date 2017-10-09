<?php

namespace App\Repositories;

use App\Repositories\Eloquent\Repository;
use App\Models\Comment;
use App\Events\HomeView;

class HomeRepository extends Repository
{
	public function model() 
    {
        return 'App\Models\Comment';
    }

    public function transfomer()
    {
        return "App\\Transformers\\HomeTransformer";
    }

    public function add($data)
    {
    	$uid = auth()->id() ? auth()->id() : 0;
    	
    	event(new HomeView($data));
    }
}
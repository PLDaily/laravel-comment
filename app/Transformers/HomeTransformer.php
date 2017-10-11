<?php

namespace App\Transformers;

use App\Models\Comment;
use League\Fractal\TransformerAbstract;
use App\Models\Redis\Home;

class HomeTransformer extends TransformerAbstract
{
	public function transform(Comment $model)
	{
		$redis_comment = new Home();

		$view_count = $redis_comment->getCount();

		$model->view_count = $view_count ? $view_count : 0;

		return $model->toArray();
	}
}
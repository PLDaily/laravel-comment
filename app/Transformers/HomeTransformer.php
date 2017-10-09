<?php

namespace App\Transformers;

use App\Models\Comment;
use League\Fractal\TransformerAbstract;
use App\Models\Redis\Home as HomeRedis;

class HomeTransformer extends TransformerAbstract
{
	public function transform(Comment $model)
	{
		$redis_comment = new HomeRedis();

		$view_count = redis_article->getCount('view');

		$model->view_count = $view_count ? $view_count : 0;

		return $model->array();
	}
}
<?php

namespace App\models\Redis;

use Illuminate\Support\Facades\Redis;

class Base
{
	static $view_num;

	protected function increment()
	{
		return Redis::incr($view_num);
	}

	protected function decrement()
	{
		return Redis::decr($view_num);
	}

	protected function get()
	{
		return Redis::get($view_num);
	}
}
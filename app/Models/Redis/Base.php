<?php

namespace App\models\Redis;

use Illuminate\Support\Facades\Redis;

class Base
{
	protected function increment($key)
	{
		return Redis::incr($key);
	}

	protected function decrement($key)
	{
		return Redis::decr($key);
	}

	protected function setValue($key, $value)
	{
		return Redis::set($key, $value);
	}

	protected function get($key)
	{
		return Redis::get($key);
	}
}
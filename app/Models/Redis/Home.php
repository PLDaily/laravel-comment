<?php

namespace App\Models\Redis;

class Home extends Base
{
	public function add()
	{
		$this->increment('view');
	}

	public function getCount()
	{
		return $this->get('view');
	}

	public function setPageViewBase($value)
    {
        $this->setValue('view', $value);
    }
}
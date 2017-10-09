<?php

namespace App\Models\Redis\Home;

class Home
{
	public function subscribe($events)
	{
		$events->listen('App\Events\HomeView', 'App\Listeners\Home\homeView')
	}

	public function homeView($event)
	{
		$data = $event->data;
        if(isset($data['view'])){
            (new Article())->setPageViewBase($data['view']);
        }else{
            (new Article())->add();
	}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\HomeRepository;
use App\Events\HomeView;
use App\Repositories\Criteria\ViewLow;
use App\Repositories\Criteria\ViewHign;

class HomeController extends Controller
{

    protected $home;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeRepository $home)
    {
        $this->home = $home;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->home->pushCriteria(new ViewHign());
        $comment_list = $this->home->all();
        dd($comment_list);
        event(new HomeView($comment_list));
        return view('home');
    }

    public function comment(Request $request)
    {
        $data = $request->all();
        $ret = $this->home->add($data);
    }
}

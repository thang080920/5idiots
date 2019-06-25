<?php

namespace App\Http\Controllers;
use App\Campaign;
use App\Event;
use App\Help;
use App\Story;
use App\Donate;
use App\Manager;
use App\User;
use App\Volunteer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lấy danh sách users từ database
        $getData = DB::table('story')->select('story_id','title','text','author')
            ->orderBy('story_id', 'desc')
            ->take(5)
            ->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
//        $getDataEvent = DB::table('story')->select('id','title','text','author')
//            ->orderBy('id', 'desc')
//            ->take(5)
//            ->get();


        return view('public.index')->with('lisstory',$getData);

    }
    public function login()
        {
        return view('public.login');
        }

    public function register()
    {
        return view('public.register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Event;
use App\Help;
use App\Story;
use App\Donate;
use App\Manager;
use App\User;
use App\Volunteer;
use Session;
use App\Http\Requests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AdminController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('master.Admin');
    }

    public function DataUser()
    {
        //Lấy danh sách users từ database
        $getData =User::orderBy('user_id','asc')->select('user_id','firstname','lastname','phone','email','is_admin')->where('active',1)->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-User',compact('getData'));
    }
    public function DataUserRequest()
    {
        return view('master.Data-UserRequest');
    }
    public function DataAlert()
    {
        //Lấy danh sách users từ database
        $getData = Help::orderBy('help_id','asc')->select('help_id','lat','lng','phone','firstname','lastname','status')->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-Alert',compact('getData'));
    }
    public function DataStory()
    {
        //Lấy danh sách story từ database
        $getData =Story::orderBy('story_id','asc')->select('story_id','title','author','category','text')->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-Story',compact('getData'));
    }
    public function DataEvent()
    {
        //tạo Event từ database
        $getData =Event::orderBy('event_id','asc')->select('event_id','title','location','start','end','description')->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-Event',compact('getData'));
    }
    public function DataCampaign()
    {
        $getData =Campaign::orderBy('campaign_id','asc')->select('campaign_id','title','location','start','end','phone','description')->get();
        return view('master.Data-Campaign',compact('getData'));
    }
    public function DataVolunteerRequest()
    {
        $getData =Volunteer::orderBy('volunteer_id','asc')->select('volunteer_id','firstname','lastname','phone','email')->get();
        return view('master.Data-VolunteerRequest',compact('getData'));
    }
    public function DataVolunteerList()
    {
        //Lấy danh sách users từ database
        $getData =Volunteer::orderBy('volunteer_id','asc')->select('volunteer_id','firstname','lastname','purpose','phone','email')->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-VolunteerList',compact('getData'));
    }
    public function DataDonate()
    {
        //Lấy danh sách users từ database
        $getData =Donate::orderBy('donate_id','asc')->select('donate_id','name','datetime','accountnumber','money')->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-Donate',compact('getData'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return(view('layout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

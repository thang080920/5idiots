<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;

class EventController extends BaseController
{
    public function index()
    {
        return view('public.events');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('master.Data-CreateEvent');
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
        $allRequest  = $request->all();
        $title  = $allRequest['title'];
        $location  = $allRequest['location'];
        $start  = $allRequest['start'];
        $end  = $allRequest['end'];
        $description  = $allRequest['description'];


        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'title'  => $title,
            'location'  => $location,
            'start' => $start,
            'end'  => $end,
            'description' => $description,

        );
        //Insert vào bảng tbl_hocsinh
        $insertData = Event::insert($dataInsertToDatabase);

        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'New Event Added!');
        }else {
            Session::flash('error', 'Failed to adding Event!');
        }
        return redirect('master/data-create-event');
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
        $getData = Event::select('event_id','title','location','start','end','description')->where('event_id',$id)->get();


        return view('master.Data-EditEvent')->with('getEventById',$getData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $updateData = Event::where('event_id', $request->id)->update([
            'title' => $request->title,
            'location' => $request->location,
            'start' => $request->start,
            'end' => $request->end,

            'description' => $request->description,

            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa users thành công!');
        }else {
            Session::flash('error', 'Sửa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-event');
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
        $deleteData = Event::where('event_id', '=', $id)->delete();

        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa users thành công!');
        }else {
            Session::flash('error', 'Xóa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-event');
    }
}

<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests;
use App\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function VolunteerRequest() {
        $getData =Volunteer::orderBy('volunteer_id','asc')->select('volunteer_id','firstname','lastname','purpose','phone','email')->where('active',0)->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-VolunteerRequest',compact('getData'));
    }
    public function index()
    {
        //
    }


    public function accept($id)
    {
        $volunteer = Volunteer::find($id);
        $volunteer->update([

            'active' => 1

        ]);

        //Thực hiện chuyển trang
        return redirect('master/data-volunteer-request');
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
        $getData = Volunteer::select('volunteer_id','firstname','lastname','purpose','phone','email')->where('volunteer_id',$id)->get();

        return view('master.Data-EditVolunteer')->with('getVolunteerById',$getData);
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
        $updateData = Volunteer::where('volunteer_id', $request->id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'purpose'=>$request->purpose,
            'phone' => $request->phone,
            'email' => $request->email,


            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa volunteer thành công!');
        }else {
            Session::flash('error', 'Sửa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-volunteer-list');

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
        $deleteData = Volunteer::where('id', '=', $id)->delete();

        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa volunteer thành công!');
        }else {
            Session::flash('error', 'Xóa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-volunteer-list');
    }
}

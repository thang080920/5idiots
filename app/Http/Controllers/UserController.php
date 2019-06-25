<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function acceptRequest($id)
    {
        $user = User::find($id);
        $user->update([

            'active' => 1,

        ]);

        //Thực hiện chuyển trang
        return redirect('master/data-user-request');
    }
    public function DataUserRequest()
    {
        //Lấy danh sách users từ database
        $getData =User::orderBy('user_id','asc')->select('user_id','firstname','lastname','phone','email')->where('active',0)->get();
        //Gọi đến file list.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên listhocsinh = $getData
        return view('master.Data-UserRequest',compact('getData'));
    }
    public function index()
    {
        //
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
        $getData = User::select('user_id','firstname','lastname','phone','email','is_admin','active')->where('user_id',$id)->get();

        return view('master.Data-EditUser')->with('getUsersById',$getData);
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
        $updateData = User::where('user_id', $request->id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'is_admin'=> $request->is_admin,
            'active'=> $request->active,


            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa users thành công!');
        }else {
            Session::flash('error', 'Sửa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if($user->is_admin == 0)
        {
            $deleteData = User::where('user_id', '=', $id)->delete();
        }
        else{

            Session::flash('error', 'Cannot Delete An Administer!');

        }


        return Redirect('master/data-user');
    }
    public function destroyRequest($id)
    {
        //
        $deleteData = User::where('id', '=', $id)->delete();

        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa users thành công!');
        }else {
            Session::flash('error', 'Xóa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-user-request');
    }
}

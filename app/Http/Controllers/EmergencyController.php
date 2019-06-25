<?php
/**
 * Created by PhpStorm.
 * User: VDuy
 * Date: 3/26/2019
 * Time: 11:02 AM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmergencyController
{
    public function index() {
        return view('emergency');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone' => ['required', 'numeric'],
        ]);
    }

    public function help(Request $request) {
        $allRequest  = $request->all();
        $user = Auth::user();
        $lat = $allRequest['lat'];
        $lng = $allRequest['lng'];
        $phone = $user -> phone;
        $firstname = $user -> firstname;
        $lastname = $user -> lastname;
        $status = $allRequest['status'];

        $dataInsertToDatabase = array(
        	'lat' => $lat,
        	'lng' => $lng,
        	'phone' => $phone,
        	'firstname' => $firstname,
        	'lastname' => $lastname,
            'status' => $status,
        );

        $insertData = DB::table('help')->insert($dataInsertToDatabase);

        return redirect('home');
    }

//    public function view(){
//        $getData = DB::table('help')->select('id','status','lat','lng','phone','firstname','lastname')->get();
//        return view('listemergency')->with('listemergency',$getData);
//    }
//
//    public function change(Request $request, $id)
//    {
//        $updateData = Help::find($request->id)->update([
//            'status' => $request->status
//        ]);
//
//        return redirect('listemer');
//    }
}
<?php
/**
 * Created by PhpStorm.
 * User: duy-pham
 * Date: 3/26/2019
 * Time: 12:19 AM
 */

namespace App\Http\Controllers;
use App\Story;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use Illuminate\Http\Request;

class StoryController
{
    public function stories()
    {
        return view('public.Stories');
    }

    public function WomanHeroes()
    {
        return view('public.WomanHero');
    }
    public function Witness()
    {
        return view('public.Witness');
    }

    public function create()
    {
        //Hiển thị trang thêm
        return view('story.create');
    }
    public function store(Request $request)
    {
        //Them moi users
        //Set timezone
        date_default_timezone_set("Asia/Ho_Chi_Minh");

        //Lấy giá trị đã nhập
        $allRequest  = $request->all();
        $title =$allRequest['title'];
        $author=$allRequest['author'];
        $category=$allRequest['category'];
        $text=$allRequest['text'];


        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            'title'  => $title,
            'author'  => $author,
            'category' => $category,
            'text' => $text,


            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        );

        //Insert vào bảng story
        $insertData = Story::insert($dataInsertToDatabase);

        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới thành công!');
        }else {
            Session::flash('error', 'Thêm thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('story/create');
    }
    public function index()
    {
        //Lấy danh sách từ database
        $getData = Story::select('story_id','title','author','text')->get();


        return view('story.list')->with('list',$getData);
    }

    public function edit($id)
    {
        //
        $getData = Story::select('story_id','title','author','category','text')->where('story_id',$id)->get();

        return view('master.Data-EditStory')->with('getStoryById',$getData);
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
        $updateData = Story::where('story_id', $request->id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'category'=>$request->category,
            'text' => $request->text,


            'updated_at' => date('Y-m-d H:i:s')
        ]);

        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa volunteer thành công!');
        }else {
            Session::flash('error', 'Sửa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-story');

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
        $deleteData = Story::where('story_id', '=', $id)->delete();

        //Kiểm tra lệnh delete để trả về một thông báo
        if ($deleteData) {
            Session::flash('success', 'Xóa Story thành công!');
        }else {
            Session::flash('error', 'Xóa thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('master/data-story');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 10:17 AM
 */
?>
@extends('layout')
@section('content')
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - STORY
            </h1>
        </section>
        <!-- Main content -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped ">
                    <thead>
                    <tr>
                        <th>Number</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Edit/Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    @foreach($getData as $key => $story)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy tiêu đề?>
                            <td>{{ $story->title }}</td>
                            <?php //Lấy tác giả?>
                            <td>{{ $story->author }}</td>
                            <?php //Lấy loại?>
                            <td>{{ $story->category }}</td>
                            <?php //Lấy nội dung?>
                            <td>{{ $story->text }}</td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-info" href="{{ $story->story_id }}/edit-story">edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="{{ $story->story_id }}/delete-story">delete</a></td>
                        </tr>
                        <?php //Kết thúc vòng lập foreach?>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection

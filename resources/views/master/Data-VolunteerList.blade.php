<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 4:02 PM
 */
?>
@extends('layout')
@section('content')
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - VOLUNTEER LIST
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Purpose</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    @foreach($getData as $key => $vol)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy tên?>
                            <td>{{ $vol->firstname }}</td>
                            <?php //Lấy họ?>
                            <td>{{ $vol->lastname }}</td>
                            <?php //Lấy mục đích?>
                            <td>{{ $vol->purpose }}</td>
                            <?php //Lấy số điện thoại?>
                            <td>{{ $vol->phone }}</td>
                            <?php //Lấy email?>
                            <td>{{ $vol->email }}</td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-danger" href="{{ $vol->volunteer_id }}/edit-volunteer">edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="{{ $vol->volunteer_id }}/delete-volunteer">delete</a></>
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

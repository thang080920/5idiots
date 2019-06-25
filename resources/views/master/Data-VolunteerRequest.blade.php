<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 3:57 PM
 */
?>
@extends('layout')
@section('content')
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - VOLUNTEER REQUEST
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
                        <th>Accept/
                        Decline</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    @foreach($getData as $key => $volunteer)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy tên?>
                            <td>{{ $volunteer->firstname }}</td>
                            <?php //Lấy họ?>
                            <td>{{ $volunteer->lastname }}</td>
                            <?php //Lấy mục đích?>
                            <td>{{ $volunteer->purpose }}</td>
                            <?php //Lấy số điện thoại?>
                            <td>{{ $volunteer->phone }}</td>
                            <?php //Lấy email?>
                            <td>{{ $volunteer->email }}</td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-danger" href="{{ $volunteer->volunteer_id }}/accept-volunteer">Accept</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="{{ $volunteer->volunteer_id }}/delete-volunteer">Delete</a></td>
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

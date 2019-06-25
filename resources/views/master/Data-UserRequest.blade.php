<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/27/2019
 * Time: 10:47 AM
 */
?>
@extends('layout')
@section('content')
<div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            DATA TABLE - USER REQUEST
        </h1>
    </section>
    <!-- Main content -->
    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped ">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                @foreach($getData as $key => $user)
                    <tr>
                        <?php //Điền số thứ tự?>
                        <td>{{ $key+1 }}</td>
                        <?php //Lấy tên?>
                        <td>{{ $user->firstname }}</td>
                        <?php //Lấy họ?>
                        <td>{{ $user->lastname }}</td>
                        <?php //Lấy số điện thoại?>
                        <td>{{ $user->phone }}</td>
                        <?php //Lấy email?>
                        <td>{{ $user->email }}</td>
                        <?php //Tạo nút sửa ?>
                        <td><a class="btn btn-success" href="{{ $user->user_id }}/accept-user">Accept</a>
                        <?php //Tạo nút xóa?>
                        <a class="btn btn-danger" href="{{ $user->user_id }}/delete-user-request">Decline</a></td>
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
<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 10:13 AM
 */
?>
@extends('layout')
@section('content')
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - DONATE
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
                        <th>Name</th>
                        <th>Date/Time</th>
                        <th>Account Number</th>
                        <th>Money</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    @foreach($getData as $key => $donate)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy nội dung?>
                            <td>{{ $donate->name }}</td>
                            <?php //Lấy vĩ độ?>
                            <td>{{ $donate->datetime }}</td>
                            <?php //Lấy kinh độ?>
                            <td>{{ $donate->accountnumber }}</td>
                            <?php //Lấy số điện thoại?>
                            <td>{{ $donate->money }}</td>
                            <?php //Tạo nút xóa?>
                            <td><a class="btn btn-danger" href="{{ $donate->donate_id }}/delete-donate">delete</a></td>
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

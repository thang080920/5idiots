<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 9:12 AM
 */
?>
@extends('layout')
@section('content')
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - ALERT
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
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Telephone</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Status</th>
                        <th>Edit/
                        Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    @foreach($getData as $key => $help)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy vĩ độ?>
                            <td>{{ $help->lat }}</td>
                            <?php //Lấy kinh độ?>
                            <td>{{ $help->lng }}</td>
                            <?php //Lấy số điện thoại?>
                            <td>{{ $help->phone }}</td>
                            <?php //Lấy tên?>
                            <td>{{ $help->firstname }}</td>
                            <?php //Lấy họ?>
                            <td>{{ $help->lastname }}</td>
                            <?php //Lấy họ?>
                            <td>{{ $help->status }}</td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-info" href="{{ $help->id }}/edit">edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="{{ $help->id }}/delete">delete</a></td>
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
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>

@endsection


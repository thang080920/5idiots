<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 4:07 PM
 */
?>
@extends('layout')
@section('content')
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DATA TABLE - CAMPAIGN LIST
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
                        <th>Location</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Telephone</th>
                        <th>Description</th>
                        <th>Edit/Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    @foreach($getData as $key => $campaign)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy nội dung?>
                            <td>{{ $campaign->title }}</td>
                            <?php //Lấy vĩ độ?>
                            <td>{{ $campaign->location }}</td>
                            <?php //Lấy kinh độ?>
                            <td>{{ $campaign->start }}</td>
                            <?php //Lấy số điện thoại?>
                            <td>{{ $campaign->end }}</td>
                            <?php //Lấy tên?>
                            <td>{{ $campaign->phone }}</td>
                            <?php //Lấy miêu tả?>
                            <td>{{ $campaign->description }}</td>
                            <?php //Tạo nút sửa ?>
                            <td><a class="btn btn-info" href="{{ $campaign->campaign_id }}/edit-campaign">Edit</a>
                            <?php //Tạo nút xóa?>
                            <a class="btn btn-danger" href="{{ $campaign->campaign_id }}/delete-campaign">Delete</a></td>
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

@extends('templates.master')

@section('title','Quản lý')

@section('content')

    <?php //Hiển thị thông báo thành công?>
    <div class="page-header"><h4>danh sách users</h4></div>

    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php //Hiển thị danh sách users?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
                <p><a class="btn btn-primary" href="{{ url('/hocsinh/create') }}">Thêm mới</a></p>
                <table id="DataList" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
                    @foreach($listuser as $key => $users)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy tên?>
                            <td>{{ $users->firstname }}</td>
                                <?php //Lấy tên?>
                                <td>{{ $users->lastname }}</td>
                                <?php //Lấy email?>
                                <td>{{ $users->email }}</td>
                            <?php //Lấy số điện thoại?>
                            <td>{{ $users->phone }}</td>
                            <?php //Tạo nút sửa ?>
                            <td><a href="/blog/public/hocsinh/{{ $users->id }}/edit">edit</a></td>
                            <?php //Tạo nút xóa?>
                            <td><a href="/blog/public/hocsinh/{{ $users->id }}/delete">delete</a></td>
                        </tr>
                        <?php //Kết thúc vòng lập foreach?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
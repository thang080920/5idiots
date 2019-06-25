@extends('templates.master')

@section('title','Quản lý user')

@section('content')

    <div class="page-header"><h4>Quản lý users</h4></div>

    <?php //Hiển thị thông báo thành công?>
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

    <?php //Hiển thị form sửa?>
    <p><a class="btn btn-primary" href="{{ url('/hocsinh') }}">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-4">
        <center><h4>Sửa user</h4></center>
        <form action="{{ url('/hocsinh/update') }}" method="post">
            <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
            <input type="hidden" id="id" name="id" value="{!! $getUsersById[0]->id !!}" />
            <div class="form-group">
                <label for="firstname">firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Tên users" maxlength="255" value="{{ $getUsersById[0]->firstname }}" required />
            </div>
            <div class="form-group">
                <label for="lastname">lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" maxlength="255" value="{{ $getUsersById[0]->lastname }}" required />
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email" maxlength="255" value="{{ $getUsersById[0]->email }}" required />
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" maxlength="15" value="{{ $getUsersById[0]->phone }}" required />
            </div>
            <center><button type="submit" class="btn btn-primary">Lưu lại</button></center>
        </form>
    </div>

@endsection
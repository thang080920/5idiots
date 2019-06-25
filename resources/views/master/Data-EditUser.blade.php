<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/27/2019
 * Time: 10:02 AM
 */
?>
<?php //Hiển thị form sửa?>
@extends('layout')

@section('content')
<p><a class="btn btn-primary" href="{{ url('master/data-user') }}">Về danh sách</a></p>
<div class="col-xs-4 col-xs-offset-4">
    <center><h4>Sửa User</h4></center>
    <form action="{{ url('master/update-user') }}" method="post">
        <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
        <input type="hidden" id="id" name="id" value="{!! $getUsersById[0]->id !!}" />
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Tên users" maxlength="255" value="{{ $getUsersById[0]->firstname }}" required />
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" maxlength="255" value="{{ $getUsersById[0]->lastname }}" required />
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" maxlength="15" value="{{ $getUsersById[0]->phone }}" required />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email" maxlength="255" value="{{ $getUsersById[0]->email }}" required />
        </div>
        <div class="form-group">
            <label for="is_admin">User Level</label>
            <input type="number" class="form-control" id="is_admin" name="is_admin" placeholder="User Level" maxlength="255" value="{{ $getUsersById[0]->is_admin }}" required />
        </div>
        <div class="form-group">
            <label for="active">Active</label>
            <input type="number" class="form-control" id="email" name="active" placeholder="Active" maxlength="255" value="{{ $getUsersById[0]->active }}" required />
        </div>


        <center><button type="submit" class="btn btn-primary">Lưu lại</button></center>
    </form>
</div>

@endsection

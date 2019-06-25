<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/29/2019
 * Time: 1:15 AM
 */
?>
@extends('layout')

@section('content')
    <p><a class="btn btn-primary" href="{{ url('master/data-story') }}">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-4">
        <center><h4>Sửa Story</h4></center>
        <form action="{{ url('master/update-story') }}" method="post">
            {!! csrf_field() !!}
            <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
            <input type="hidden" id="id" name="id" value="{!! $getStoryById[0]->id !!}" />
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" maxlength="255" value="{{ $getStoryById[0]->title }}" required />
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Author" maxlength="255" value="{{ $getStoryById[0]->author }}" required />
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Category" maxlength="15" value="{{ $getStoryById[0]->category }}" required />
            </div>
            <div class="form-group">
                <label for="text">Description</label>
                <input type="text" class="form-control" id="text" name="text" placeholder="Description" maxlength="255" value="{{ $getStoryById[0]->text }}" required />
            </div>
            <center><button type="submit" class="btn btn-primary">Lưu lại</button></center>
        </form>
    </div>

@endsection

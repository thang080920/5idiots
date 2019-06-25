<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/27/2019
 * Time: 3:09 PM
 */
?>
@extends('layout')
@section('content')

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
    <p><a class="btn btn-primary" href="{{ url('master/data-campaign') }}">Về danh sách</a></p>
    <div class="col-xs-4 col-xs-offset-4">
        <center><div class="page-header"><h4>Edit Campaign</h4></div></center>
        <form action="{{ url('master/update-campaign') }}" method="post">
            <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
            <input type="hidden" id="id" name="id" value="{!! $getCampaignById[0]->id !!}" />
            <div class="form-group col-lg-12">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" maxlength="255" value="{{ $getCampaignById[0]->title }}" required />
            </div>
            <div class="form-group col-lg-12">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location" maxlength="255" value="{{ $getCampaignById[0]->location }}" required />
            </div>
            <div class="form-group col-lg-12">
                <div class="form-group col-lg-6">
                    <label for="start">Start Day</label>
                    <input type="text" class="form-control" id="start" name="start" placeholder="Start Day" value="{{ $getCampaignById[0]->start }}" required />
                </div>
                <div class="form-group col-lg-6">
                    <label for="end">End Day</label>
                    <input type="text" class="form-control" id="end" name="end" placeholder="End Day" value="{{ $getCampaignById[0]->end }}" required />
                </div>
            </div>

            <div class="form-group col-lg-12">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" maxlength="11" value="{{ $getCampaignById[0]->phone }}" required />
            </div>
            <div class="form-group col-lg-12">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description" required>{{ $getCampaignById[0]->description }}</textarea>
            </div>
            <center><button type="submit" class="btn btn-primary">SAVE</button></center>
        </form>
    </div>

@endsection

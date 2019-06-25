@extends('layout')
@section('content')
    <div class="content-wrapper" style="min-height: 454px;margin-left: 22px; padding: 20px;">
        <!-- Content Header (Page header) -->
        <section class="col-lg-12 content-header" style="text-align: center">
            <h1>
                <u>DATA TABLE - CREATE CAMPAIGN</u>
            </h1>
        </section>
        <!-- Main content -->

        <!-- /.box-header -->
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
        <div class="col-lg-12">
            <div class="col-lg-2 form1"></div>
            <div class="col-lg-8 form2">
                <form class="form" action="{{ url('master/create-campaign') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="col-lg-12 form-row">
                        <div class="col-lg-8 form-group">
                            <label for="title" style="margin-top: 2vh;">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="location" style="margin-top: 2vh;">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="location" required>
                        </div>
                    </div>
                    <div class="col-lg-12 form-row">
                        <div class="col-lg-4 form-group">
                            <label for="start">Start</label>
                            <input type="date" class="form-control" id="start" name="start" placeholder="tart" required>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="End">End</label>
                            <input type="date" class="form-control" id="end" name="end" placeholder="end" required>
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="phone">Telephone</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" required>
                        </div>
                    </div>
                    <div class="col-lg-12 form-row">
                        <div class="col-lg-12 form-group">
                            <label for="description">Description</label>
                            <textarea  class="form-control" id="description" name="description" placeholder="description" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 2vh;">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- /.box-body -->

        <!-- /.box -->
    </div>
@endsection

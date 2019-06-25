<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 7:54 PM
 */
?>
@extends('Homepage)
@section('content')
    <link rel="stylesheet" href="{{url('css/donate.css')}}">
    <div class="s-section donate register">
        <div class="register-container">
            <h1>donate.</h1>
            <form class="needs-validation" novalidate method="POST" action="{{url('up-donate')}}">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" class="form-control signup-modal" id="name" name="name" placeholder="Name" required minlength="2">
                        <div class="invalid-feedback">
                            Please enter your first name.
                        </div>
                    </div>
                <div class="form-group">
                    <input type="text" class="form-control signup-modal" id="phone" name="phone" placeholder="Phone Number" required maxlength="11">
                    <div class="invalid-feedback">
                        Please enter your phone number.
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control signup-modal" id="email" name="email" placeholder="Email" required>
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control signup-modal" id="accountnumber" name="accountnumber" placeholder="Account Number" required minlength="10">
                    <div class="invalid-feedback">
                        Please enter your account number.
                    </div>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control signup-modal" id="money" name="money" placeholder="Amount Of Money ($)" required minlength="5">
                    <div class="invalid-feedback">
                        Please enter amount of money.
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control signup-modal" id="text" name="text" placeholder="Comment">
                </div>
                <button type="submit" class="signup-btn">Donate</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    @endsection

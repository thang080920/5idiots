<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 3:47 PM
 */
?>
@extends('Homepage')
@section('content')
    <link rel="stylesheet" href="{{url('css/register.css')}}">
    <div class="s-section register home">
        <div class="register-container">
            <h1>register.</h1>
            <form class="needs-validation" method="POST" action="{{ route('register') }}" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-6 {{ $errors->has('name') ? ' is-invalid' : '' }}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control signup-modal" id="firstName" name="firstname" placeholder="First Name" required minlength="2">
                        <div class="invalid-feedback">
                            Please enter your first name.
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control signup-modal" id="lastName" name="lastname" placeholder="Last Name" required minlength="2">
                        <div class="invalid-feedback">
                            Please enter your last name.
                        </div>
                    </div>
                </div>
                <div class="form-group {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                    <input type="text" class="form-control signup-modal" id="phone" name="phone" placeholder="Phone Number" required maxlength="11">
                    <div class="invalid-feedback">
                        Please enter your phone number.
                    </div>
                </div>
                <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                    <input type="email" class="form-control signup-modal" id="email" name="email" placeholder="Email" required>
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                    <input type="password" class="form-control signup-modal" id="password" name="password" placeholder="Password" required minlength="6">
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" minlenght="6" required>
                    <div class="invalid-feedback">
                        Please retype your password.
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control signup-modal" id="address" name="address" placeholder="Address" required minlength="3">
                    <div class="invalid-feedback">
                        Please enter your address.
                    </div>
                </div>
                <div class="form-group">
                    <select class="custom-select signup-modal" id="gender" name="gender" required aria-required="true">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Another">Another</option>
                    </select>
                    <div class="invalid-feedback">
                        Please choose your gender.
                    </div>
                </div>
                <div class="form-group">
                    <span>By clicking Sign Up, you agree to our <a href="#" class="Terms">Terms and Conditions.</a></span>
                </div>
                <button type="submit" class="signup-btn">Sign Up</button>
            </form>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection

@extends('Homepage')
@section('content')
    <div class="s-section register home">
        <div class="register-container">
            <h1>reset password.</h1>
            <!-- <form class="needs-validation" novalidate>
                <div class="form-group">
                    <input type="email" class="form-control signup-modal" id="email" placeholder="Email" required minlength="6">
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control signup-modal" id="Password" placeholder="Password" required minlength="6">
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control signup-modal" id="Retype-Password" placeholder="Retype Password" required minlength="6">
                    <div class="invalid-feedback">
                        Please retype your password.
                    </div>
                </div>
                <button type="submit" class="signup-btn">Reset</button>                        
            </form> -->
            <form class="needs-validation" method="POST" action="{{ route('password.update') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-12">
                                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-12">
                                <input placeholder="Retype-Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
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

        var password = document.getElementById('Password');
        var retype = document.getElementById('Retype-Password');

        function validatePassword() {
            if(password.value != retype.value) {
                retype.setCustomValidity("Password don't match");
            }else {
                retype.setCustomValidity("");
            }
        }

        password.onchange = validatePassword;
        retype.onkeyup = validatePassword;
    </script>
@endsection
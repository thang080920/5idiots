@extends('Homepage')
@section('content')
    <div class="s-section register home">
        <div class="register-container">
            <h1>reset password.</h1>
          <!--   <form class="needs-validation" novalidate>
                <div class="form-group" id="resetyourpass">
                <input type="email" class="form-control signup-modal" id="ResetPassword" placeholder="Email" required>
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>
                <button type="submit" class="signup-btn">Send</button>                        
            </form> -->
            <form class="needs-validation" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="form-group row">
                    <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
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
    </script>
@endsection
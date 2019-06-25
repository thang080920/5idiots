<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 6:24 PM
 */
?>

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(url('css/register.css')); ?>">
    <div class="s-section register home">
        <div class="register-container">
            <h1>log in.</h1>
            <form class="needs-validation" method="POST" action="<?php echo e(route('login')); ?> " novalidate>
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> signup-modal" id="email" name="email" placeholder="email" required>
                    <div class="invalid-feedback">
                        Please enter your email.
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> signup-modal" id="password" name="password" placeholder="Password" required minlength="6">
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
                <div class="form-group">
                    <span><a href="<?php echo e(route('password.request')); ?>" class="Terms">Forgot your password?</a></span>
                </div>
                <button type="submit" class="signup-btn">Log In</button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
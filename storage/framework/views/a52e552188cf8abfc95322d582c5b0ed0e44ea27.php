<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/28/2019
 * Time: 2:01 PM
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe City - Women Safety</title>
    <link rel="icon" href="<?php echo e(asset('images/icon.png')); ?>" sizes="32x32">
    <link rel="icon" href="<?php echo e(asset('images/icon.png')); ?>" sizes="192x192">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo e(asset('owlcarousel/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('owlcarousel/owl.theme.default.min.css')); ?>">

</head>
<body>
<div id='flag'></div>
<div class="s-navigation">
    <div class="s-nav">
        <div class="s-container">
            <div class="s-nav-inner">
                <a href="<?php echo e(url('home')); ?>" id="logo">safëcity.</a>
                <ul id="nav-ul">
                    <li class="s-mobile-nav" id="open-mobile-nav"><i class="fas fa-bars"></i></li>
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <li class="nav-content" id="nav-8">
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                            <li cclass="nav-content" id="nav-7" style="letter-spacing: 1px;"><a>Profile</a></li>
                        <?php else: ?>
                            <li class="nav-content" id="nav-8"><a href="<?php echo e(route('login')); ?>">Log In</a></li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-content" id="nav-7"><a href="<?php echo e(route('register')); ?>">Register</a></li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <li class="nav-content" id="nav-6"><a href="<?php echo e(url('danger-zone')); ?>">Unsafe Areas</a></li>
                    <li class="nav-content" id="nav-5"><a href="#about">About Us</a></li>
                    <li class="nav-content" id="nav-4"><a href="#events">Events</a></li>
                    <li class="nav-content" id="nav-3"><a href="#donate">Donate</a></li>
                    <li class="nav-content" id="nav-2"><a href="#stories">Stories</a></li>
                    <li class="nav-content" id="nav-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <div class="nav-underline nav-content" id="nav-underline"></div>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-nav col-12 pad0" id="mobile-nav">
        <div class="mobile-nav-header">
            <span>safëcity.</span>
            <i class="fas fa-times" id="close"></i>
        </div>
        <p><a href="<?php echo e(url('/')); ?>">Home</a></p>
        <p><a href="<?php echo e(url('stories')); ?>">Stories</a></p>
        <p><a href="<?php echo e(url('donate')); ?>">Donate</a></p>
        <p><a href="<?php echo e(url('events')); ?>">Events</a></p>
        <p><a href="#about">About Us</a></p>
        <p><a href="<?php echo e(url('danger-zone')); ?>">Unsafe Areas</a></p>
        <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
                <p class="nav-content" id="nav-8">
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                    </form>
                </p>
                <p cclass="nav-content" id="nav-7" style="letter-spacing: 1px;"><a>Profile</a></p>
            <?php else: ?>
                <p class="nav-content" id="nav-8"><a href="<?php echo e(route('login')); ?>">Log In</a></p>
                <?php if(Route::has('register')): ?>
                    <p class="nav-content" id="nav-7"><a href="<?php echo e(route('register')); ?>">Register</a></p>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <div class="mobile-nav-bottom">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
    <?php if(Route::has('login')): ?>
    <?php if(auth()->guard()->check()): ?>
    <div class="bell">
        <div class="bell-inner">
            <a id="clicksos"><i class="fas fa-bell"></i></a>
            <div class="bell-border"></div>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>

    <?php echo $__env->yieldContent('content'); ?>


<div class="s-section about">
    <div class="about-inner">
        <div class="about-content">
            <h1>safëcity.</h1>
            <span>Tel: (+84) 88 8888 8888.</span>
            <span>Email: contact@safecity.com.</span>
            <span>Address: 8 Ton That Huyet, My Dinh, Ha Noi.</span>
        </div>
        <hr>
        <div class="about-icon">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
</div>
<?php if(Route::has('login')): ?>

    <div style="display: none;">
        <?php if(auth()->guard()->check()): ?>
            <form method="POST" action="<?php echo e(url('emergency')); ?>">
                <?php echo e(csrf_field()); ?>

                <div>Latitude: <input type="hidden" name="lat" ><span id="latitude"></span></div></br>
                <div>Longitude: <input type="hidden" name="lng"><span id="longitude"></span></div></br>
                <div>My PhoneNumber: <input type="tel" name="phone" value="<?php echo e(Auth::user()->phone); ?>"></div></br>
                <div>TextMessage: <input id="status" type="hidden" name="status" value="waiting"><span>I need to help!!!</span></div></br>
                <button id="sos" type="submit"><?php echo e(__('emergency')); ?></button>
            </form>
        <?php endif; ?>
    </div>
<?php endif; ?>
<script src="<?php echo e(asset('scrollmagic/TweenMax.min.js')); ?>"></script>
<script src="<?php echo e(asset('jquery/jquery-3.3.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('scrollmagic/ScrollMagic.min.js')); ?>"></script>
<script src="<?php echo e(asset('scrollmagic/animation.gsap.min.js')); ?>"></script>
<script src="<?php echo e(asset('scrollmagic/debug.addIndicators.min.js')); ?>"></script>
<script src="<?php echo e(asset('owlcarousel/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/owlcarousel.js')); ?>"></script>
<script src="<?php echo e(asset('js/scrollmagic.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script type="text/javascript">
    $.ajax({
        url: "https://geoip-db.com/jsonp",
        jsonpCallback: "callback",
        dataType: "jsonp",
        success: function( location ) {
            $('#latitude').html(location.latitude);
            $('#longitude').html(location.longitude);
            $('input[type=hidden][name=lat]').val(location.latitude);
            $('input[type=hidden][name=lng]').val(location.longitude);
        }
    });
    $('#clicksos').click(function () {
        document.getElementById("sos").click();
    });
</script>
</body>
</html>

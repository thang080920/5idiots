<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe City - Women Safety</title>
    <link rel="icon" href="images/icon.png" sizes="32x32">
    <link rel="icon" href="images/icon.png" sizes="192x192">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.theme.default.min.css">
</head>
<body>
<div id='flag'></div>
<div class="s-navigation">
    <div class="s-nav">
        <div class="s-container">
            <div class="s-nav-inner">
                <a href="#" id="logo">safëcity.</a>
                <ul id="nav-ul">
                    <li class="s-mobile-nav" id="open-mobile-nav"><i class="fas fa-bars"></i></li>
                    <li class="nav-content" id="nav-8"><a href="LogIn.html">Log In</a></li>
                    <li class="nav-content" id="nav-7"><a href="Register.html">Register</a></li>
                    <li class="nav-content" id="nav-6"><a>Unsafe Areas</a></li>
                    <li class="nav-content" id="nav-5"><a href="#about">About Us</a></li>
                    <li class="nav-content" id="nav-4"><a href="#events">Events</a></li>
                    <li class="nav-content" id="nav-3"><a href="#donate">Donate</a></li>
                    <li class="nav-content" id="nav-2"><a href="#stories">Stories</a></li>
                    <li class="nav-content" id="nav-1"><a href="#home">Home</a></li>
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
        <p><a href="#">Home</a></p>
        <p><a href="Stories.html">Stories</a></p>
        <p><a href="">Donate</a></p>
        <p><a href="Events.html">Events</a></p>
        <p><a href="#about">About Us</a></p>
        <p><a href="">Unsafe Areas</a></p>
        <p><a href="Register.html">Register</a></p>
        <p><a href="LogIn.html">Log In</a></p>
        <div class="mobile-nav-bottom">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
    <div class="bell">
        <div class="bell-inner">
            <a href=""><i class="fas fa-bell"></i></a>
            <div class="bell-border"></div>
        </div>
    </div>
</div>
<div class="s-section home" id="home">
    <div class="intro" id="intro-bg">
        <div class="intro-inner">
            <h1>Stand up for women's safety.</h1>
            <h3><i>Take a look in to our website.</i></h3>
            <a href="#stories" class="intro-btn">Let's Go</a>
            <a href="#stories"><p><i class="fas fa-angle-down"></i></p></a>
        </div>
    </div>
</div>
<div class="s-section stories navbar-active" id="stories">
    <div class="owl-carousel">
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>


        <div class="stories-inner" id="stories-3">
            <div class="col-md-6 stories-1">
                <div class="stories-1-inner">
                    <h3>Story Name.</h3>
                    <hr>
                    <span>"</span>
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting, remaining essentially unchanged.
                        </span>
                    <span>"</span>
                    <p><i>-Author-</i></p>
                    <a href="Stories.html">
                        All Stories
                    </a>
                </div>
            </div>
            <div class="col-md-6 stories-2" id="stories-bg-3"></div>
        </div>
    </div>
</div>
<div class="s-section donate" id="donate">
    <div class="donate-inner">
        <h1>DONATE.</h1>
        <hr>
    </div>
    <div class="s-container">
        <div class="donate-main-inner">
            <div class="donate-picture" id="donate-bg">
                <h1>Help Us Stop <p> Violence Against Women.</p></h1>
            </div>
            <div class="donate-content">
                <div class="donate-content-inner col-md-4">
                    <a href=""><i class="fas fa-hands-helping"></i></a>
                    <a href=""><p>VOLUNTEER</p></a>
                    <h4>Join Safe City Team</h4>
                </div>
                <div class="donate-content-inner col-md-4">
                    <a href=""><i class="fas fa-hand-holding-usd"></i></a>
                    <a href=""><p>DONATE</p></a>
                    <h4>One Time Gift</h4>
                </div>
                <div class="donate-content-inner col-md-4">
                    <a href=""><i class="fas fa-donate"></i></a>
                    <a href=""><p>DONATE MONTHLY</p></a>
                    <h4>Monthly Gift</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="s-section events" id="events">
    <div class="events-container">
        <div class="events-title">
            <h1>Events.</h1>
            <i><a href="Events.html">View all.</a></i>
        </div>
        <div class="events-content">
            <?php $__env->startSection('story'); ?>
                <?php echo $__env->yieldSection(); ?>
        </div>
    </div>
</div>
<div class="s-section our-work" id="about">
    <div class="our-work-inner">
        <div class="col-12 our-work-1">
            <div class="our-work-content">
                <h1>OUR WORK.</h1>
                <span>THE MISSION OF WOMENSAFE IS TO PROVIDE EMERGENCY SHELTER AND RESOURCES TO SURVIVORS OF DOMESTIC VIOLENCE THROUGHOUT GLOBAL.</span>
            </div>
        </div>
    </div>
</div>
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

<script src="vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/scrollmagic/TweenMax.min.js"></script>
<script src="vendor/scrollmagic/ScrollMagic.min.js"></script>
<script src="vendor/scrollmagic/animation.gsap.min.js"></script>
<script src="vendor/scrollmagic/debug.addIndicators.min.js"></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="js/owlcarousel.js"></script>
<script src="js/scrollmagic.js"></script>
<script src="js/script.js"></script>
</body>
</html>
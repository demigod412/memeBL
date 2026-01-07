<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
     <title><?php echo e($title); ?></title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Meme BULL - Advanced crypto automated trading ecosystem combining algorithmic trading, real-time analytics, and meme-finance culture.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   


    <link rel="shortcut icon" href="<?php echo e(asset('public/images/favicon.png')); ?>" type="images/x-icon">

    <!-- css include -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/fontawesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/odometer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/main.css')); ?>">
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
/>

</head>

<body>

<!-- backtotop - start -->
<div class="xb-backtotop">
    <a href="#" class="scroll">
        <i class="far fa-arrow-up"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader start -->

<!-- preloader end -->

<div class="body_wrap">

    <!-- header start -->
    <header id="xb-header-area" class="header-area">
        <div class="xb-header stricky">
            <div class="container">
                <div class="header__wrap ul_li_between">
                    <div class="header-logo">
                        <a href="/"><img src="<?php echo e(asset('public/images/logo.png')); ?>" alt=""></a>
                    </div>
                    <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                        <nav class="main-menu collapse navbar-collapse">
                            <ul>
                                 <li>
                                    <a class="scrollspy-btn" href="/"><span>Home</span></a>
                                </li>
                                 <li>
                                    <a class="scrollspy-btn" href="about"><span>Overview</span></a>
                                </li>

                                 <li>
                                    <a class="scrollspy-btn" href="features"><span>Features</span></a>
                                </li>

                                  <li>
                                    <a class="scrollspy-btn" href="education"><span>Education</span></a>
                                </li>

                                <li>
                                    <a class="scrollspy-btn" href="login"><span>Documentation</span></a>
                                </li>


                               
                                <li>
                                    <a href="events"><span>Events</span></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="xb-header-wrap">
                            <div class="xb-header-menu">
                                <div class="xb-header-menu-scroll">
                                    <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                    <div class="xb-logo-mobile xb-hide-xl">
                                        <a href="/" rel="home"><img src="<?php echo e(asset('public/images/logo.png')); ?>" alt=""></a></div>
                                  
                                    <nav class="xb-header-nav">
                                        <ul class="xb-menu-primary clearfix">

                                             <li class="menu-item">
                                    <a class="scrollspy-btn" href="/"><span>Home</span></a>
                                </li>
                                 <li class="menu-item">
                                    <a class="scrollspy-btn" href="about"><span>Overview</span></a>
                                </li>

                                 <li class="menu-item">
                                    <a class="scrollspy-btn" href="features"><span>Features</span></a>
                                </li>

                                  <li class="menu-item">
                                    <a class="scrollspy-btn" href="education"><span>Education </span></a>
                                </li>

                                <li class="menu-item">
                                    <a class="scrollspy-btn" href="/login"><span>Documentation</span></a>
                                </li>


                               
                                <li class="menu-item">
                                    <a href="events"><span>Events</span></a>
                                </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="xb-header-menu-backdrop"></div>
                        </div>
                    </div>
                    <div class="header-btn ul_li">
                        <a class="login-btn" href="/login"><i class="fas fa-user"></i> Sign in</a>
                        <div class="header-bar-mobile side-menu d-lg-none ml-20">
                            <a class="xb-nav-mobile" href="javascript:void(0);"><i class="far fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- main area start  -->

    	  <?php echo $__env->yieldContent('content'); ?>


    <!-- main area end  -->

    <!-- footer strt -->
    <footer class="footer bg_img pos-rel mt-110" data-background="<?php echo e(asset('public/images/footer-bg.png')); ?>">
        <div class="container">
            <div class="xb-contact">
                <div class="row g-0 mt-none-30">
                    <div class="col-lg-7 mt-30">
                        <div class="xb-inner bg_img" data-background="<?php echo e(asset('public/images/form_bg.png')); ?>">
                            <h2 class="xb-item--title">Ready to Start Automated Trading?</h2>
                            <form class="xb-item--form" action="#!">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="<?php echo e(asset('public/images/contact-user.svg')); ?>" alt="Name"></span>
                                            <input type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="xb-item--field">
                                            <span><img src="<?php echo e(asset('public/images/contact-email.svg')); ?>" alt="Email"></span>
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="xb-item--field">
                                            <span><img src="<?php echo e(asset('public/images/contact-massage.svg')); ?>" alt="Message"></span>
                                            <input type="text" placeholder="Your Trading Experience Level">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-check xb-item--checkbox">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree to the <a href="#!">Terms of Service</a> and <a href="#!">Privacy Policy</a>
                                        </label>
                                    </div>
                                    <div class="col-lg-12 xb-item--contact-btn">
                                        <button class="them-btn" type="submit">
                                            <span class="btn_label" data-text="Get Started">Get Started</span>
                                            <span class="btn_icon">
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-30">
                        <div class="testimonial-wrap bg_img" data-background="<?php echo e(asset('public/images/tm_bg.png')); ?>">
                            <div class="testimonial-slider swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="xb-testimonial">
                                            <div class="xb-item--avater ul_li">
                                                <div class="xb-item--img">
                                                    <img src="<?php echo e(asset('public/images/testimonial.jpg')); ?>" alt="User Testimonial">
                                                </div>
                                                <div class="xb-item--holder">
                                                    <div class="xb-item--nationality ul_li">
                                                        <img src="<?php echo e(asset('public/images/tes-flag.png')); ?>" alt="USA Flag">
                                                        <span>United States</span>
                                                    </div>
                                                    <h2 class="xb-item--title">Michael Thompson</h2>
                                                    <span class="xb-item--sub-title">Professional Trader</span>
                                                </div>
                                            </div>
                                            <p class="xb-item--comment">"Meme BULL's algorithms have consistently outperformed my manual trading. The combination of technical analysis and meme sentiment is revolutionary. My portfolio is up 47% in 3 months!"</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="xb-testimonial">
                                            <div class="xb-item--avater ul_li">
                                                <div class="xb-item--img">
                                                    <img src="<?php echo e(asset('public/images/testimonial.jpg')); ?>" alt="User Testimonial">
                                                </div>
                                                <div class="xb-item--holder">
                                                    <div class="xb-item--nationality ul_li">
                                                        <img src="<?php echo e(asset('public/images/tes-flag.png')); ?>" alt="UK Flag">
                                                        <span>United Kingdom</span>
                                                    </div>
                                                    <h2 class="xb-item--title">Sarah Johnson</h2>
                                                    <span class="xb-item--sub-title">Beginner Investor</span>
                                                </div>
                                            </div>
                                            <p class="xb-item--comment">"As someone new to crypto, Meme BULL made automated trading accessible. The educational public and intuitive interface helped me start confidently. I'm earning while learning!"</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="xb-testimonial">
                                            <div class="xb-item--avater ul_li">
                                                <div class="xb-item--img">
                                                    <img src="<?php echo e(asset('public/images/testimonial.jpg')); ?>" alt="User Testimonial">
                                                </div>
                                                <div class="xb-item--holder">
                                                    <div class="xb-item--nationality ul_li">
                                                        <img src="<?php echo e(asset('public/images/tes-flag.png')); ?>" alt="Singapore Flag">
                                                        <span>Singapore</span>
                                                    </div>
                                                    <h2 class="xb-item--title">David Chen</h2>
                                                    <span class="xb-item--sub-title">Crypto Enthusiast</span>
                                                </div>
                                            </div>
                                            <p class="xb-item--comment">"The risk management features give me peace of mind while the algorithms chase gains. Meme BULL strikes the perfect balance between automation and user control."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="xb-footer-bottom">
                <div class="xb-footer-wrap ul_li_between">
                    <div class="xb-item--footer_widget mb-30">
                        <span>Platform</span>
                        <ul class="xb-item--footer_widget-list">
                            <li><a href="about">About the Company</a></li>
                            <li><a href="features">Features</a></li>
                            <li><a href="whyus">Our Advantages</a></li>
                             <li><a href="values">What We Stand For</a></li>
                          
                        </ul>
                    </div>
                    <div class="xb-item--footer_widget mb-30">
                        <span>Public</span>
                        <ul class="xb-item--footer_widget-list">
                            <li><a href="education">Education Center</a></li>
                    
                            <li><a href="policy">Security & Compliance</a></li>
                            <li><a href="useragreement">User Agreement</a></li>
                            <li><a href="documentation">API Documentation</a></li>
                        </ul>
                    </div>
                    <div class="xb-item--footer_widget mb-30">
                        <span>Support</span>
                        <ul class="xb-item--footer_widget-list">
                            <li><a href="tel:+11234567890">+1 (123) 456-7890</a></li>
                            <li class="underline"><a href="mailto:support@memebull.com">support@memebull.com</a></li>
                            <li class="underline"><a href="mailto:partners@memebull.com">partners@memebull.com</a></li>
                        </ul>
                        <ul class="ul_li xb-item--social-link">
                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#!"><i class="fab fa-discord"></i></a></li>
                            <li><a href="#!"><i class="fab fa-telegram-plane"></i></a></li>
                            <li><a href="#!"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                   <div class="xb-item--footer_widget-community mb-30">
                        <h3>Join Our Popular  ICO Community</h3>
                        <a class="them-btn" href="#!">
                            <span class="btn_icon">
                                <img src="<?php echo e(asset('public/images/discord-f-icon.svg')); ?>" alt="">
                            </span>
                            <span class="btn_label" data-text="join">join</span>
                          </a>
                    </div>
                </div>
                <div class="footer-copyright text-center">
                    Copyright © 2026 Meme BULL. All rights reserved.
                </div>
            </div>
        </div>
        <div class="footer-shape">
            <div class="shape shape--1">
                <img class="leftToRight" src="<?php echo e(asset('public/images/team-sp_01.svg')); ?>" alt="">
            </div>
            <div class="shape shape--2">
                <img class="topToBottom" src="<?php echo e(asset('public/images/team-sp_02.svg')); ?>" alt="">
            </div>
        </div>
    </footer>
    <!-- footer end -->
</div>

<!-- jquery include -->
<script src="<?php echo e(asset('public/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/appear.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/odometer.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/jquery.magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/easing.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/scrollspy.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/countdown.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/parallax-scroll.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\appx\resources\views/layouts/base.blade.php ENDPATH**/ ?>
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
   <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
/>
    <link rel="stylesheet" href="<?php echo e(asset('public/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/odometer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/main.css')); ?>">
    
    <!-- Inline CSS for Hamburger Menu Fix -->
    <style>
        /* Mobile Menu Button - Force Visibility */
        .header-bar-mobile {
            display: flex !important;
            align-items: center;
            margin-left: 20px;
            z-index: 1001;
        }
        
        .xb-nav-mobile {
            background: none;
            border: none;
            cursor: pointer;
            padding: 12px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 4px;
            transition: all 0.3s ease;
            z-index: 1002;
        }
        
        .xb-nav-mobile:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        
        /* Custom Hamburger Icon with 3 bars */
        .hamburger-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 24px;
            height: 18px;
        }
        
        .hamburger-icon span {
            display: block;
            width: 100%;
            height: 3px;
            background-color: #ffffff;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        
        /* Mobile Menu Styles */
        .xb-header-menu {
            position: fixed;
            top: 0;
            right: -400px;
            width: 320px;
            height: 100vh;
            background: #0a0e17;
            z-index: 9999;
            transition: right 0.4s ease;
            overflow-y: auto;
            padding: 30px;
            box-shadow: -5px 0 20px rgba(0,0,0,0.3);
        }
        
        .xb-header-menu.active {
            right: 0;
        }
        
        .xb-header-menu-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 9998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .xb-header-menu-backdrop.active {
            opacity: 1;
            visibility: visible;
        }
        
        .xb-menu-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
            color: #fff;
            transition: all 0.3s ease;
        }
        
        .xb-menu-close:hover {
            background: rgba(255,255,255,0.2);
            transform: rotate(90deg);
        }
        
        .xb-logo-mobile {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .xb-logo-mobile img {
            max-height: 40px;
        }
        
        .xb-header-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .xb-header-nav ul li {
            margin-bottom: 10px;
        }
        
        .xb-header-nav ul li a {
            display: block;
            padding: 12px 15px;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            font-size: 16px;
        }
        
        .xb-header-nav ul li a:hover {
            background: rgba(255,255,255,0.1);
            padding-left: 20px;
        }
        
        .menu-open {
            overflow: hidden;
        }
        
        /* Ensure visibility on mobile */
        @media (max-width: 991px) {
            .header-bar-mobile {
                display: flex !important;
                visibility: visible !important;
                opacity: 1 !important;
                order: 3;
            }
            
            .xb-nav-mobile {
                display: flex !important;
            }
            
            /* Hide desktop menu on mobile */
            .main-menu__wrap .main-menu {
                display: none;
            }
        }
        
        @media (min-width: 992px) {
            .header-bar-mobile {
                display: none !important;
            }
            
            .xb-header-menu,
            .xb-header-menu-backdrop {
                display: none !important;
            }
        }

        
    </style>
</head>

<body>

<!-- backtotop - start -->
<div class="xb-backtotop">
    <a href="#" class="scroll">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 5L12 19M12 5L6 11M12 5L18 11" 
                  stroke="currentColor" 
                  stroke-width="2" 
                  stroke-linecap="round" 
                  stroke-linejoin="round"/>
        </svg>
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
                                    <a class="scrollspy-btn" href="/login"><span>Documentation</span></a>
                                </li>

                               
                                <li>
                                    <a href="events"><span>Events</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn ul_li">
                        <a class="login-btn" href="/login"><i class="fas fa-user"></i> Sign in</a>
                        <div class="header-bar-mobile side-menu d-lg-none ml-20" style="display: none;">
                            <!-- Hamburger Button -->
                            <button class="xb-nav-mobile" type="button" aria-label="Toggle navigation" id="mobileMenuToggle">
                                <div class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- Mobile Menu Overlay -->
    <div class="xb-header-menu" id="mobileMenu">
        <div class="xb-header-menu-scroll">
            <div class="xb-menu-close xb-hide-xl xb-close" id="mobileMenuClose">
                <i class="fas fa-times"></i>
            </div>
            <div class="xb-logo-mobile xb-hide-xl">
                <a href="/" rel="home"><img src="<?php echo e(asset('public/images/logo.png')); ?>" alt=""></a>
            </div>
            
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
                        <a class="scrollspy-btn" href="education"><span>Education</span></a>
                    </li>
                    <li class="menu-item">
                        <a class="scrollspy-btn" href="/login"><span>Documentation</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="events"><span>Events</span></a>
                    </li>
                    <li class="menu-item">
                        <a href="/login" style="background: #4a6cf7; margin-top: 20px; text-align: center;">
                            <i class="fas fa-user" style="margin-right: 8px;"></i> Sign in
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="xb-header-menu-backdrop" id="mobileMenuBackdrop"></div>

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
                            <li><a href="https://www.facebook.com/share/1ARoAVNqiH/?mibextid=wwXIfr"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="https://www.youtube.com/@MemeBull_AI"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.tiktok.com/@memebull_?_t=ZS-8w6v6a5si0u&_r=1"><i class="fab fa-tiktok"></i></a></li>
                             <li><a href="https://medium.com/@zestful_mindaro_panda_6/how-ai-is-redefining-crypto-trading-the-meme-bull-approach-to-financial-freedom-07aae101e52c"><i class="fab fa-medium"></i></a></li>
                           
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

<!-- Inline JavaScript for Mobile Menu -->
<script>
    // Mobile Menu Functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuClose = document.getElementById('mobileMenuClose');
        const mobileMenuBackdrop = document.getElementById('mobileMenuBackdrop');
        const mobileMenuLinks = document.querySelectorAll('.xb-header-nav a');
        
        // Function to open mobile menu
        function openMobileMenu() {
            mobileMenu.classList.add('active');
            mobileMenuBackdrop.classList.add('active');
            document.body.classList.add('menu-open');
        }
        
        // Function to close mobile menu
        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            mobileMenuBackdrop.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
        
        // Toggle mobile menu when hamburger is clicked
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                openMobileMenu();
            });
        }
        
        // Close mobile menu when close button is clicked
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                closeMobileMenu();
            });
        }
        
        // Close mobile menu when backdrop is clicked
        if (mobileMenuBackdrop) {
            mobileMenuBackdrop.addEventListener('click', function(e) {
                if (e.target === mobileMenuBackdrop) {
                    closeMobileMenu();
                }
            });
        }
        
        // Close mobile menu when menu links are clicked
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                closeMobileMenu();
            });
        });
        
        // Close menu with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                closeMobileMenu();
            }
        });
        
        // Handle screen resize
        function handleResize() {
            const isMobile = window.innerWidth <= 991;
            const headerBarMobile = document.querySelector('.header-bar-mobile');
            
            if (headerBarMobile) {
                if (isMobile) {
                    headerBarMobile.style.display = 'flex';
                } else {
                    headerBarMobile.style.display = 'none';
                    // Ensure menu is closed on desktop
                    closeMobileMenu();
                }
            }
        }
        
        // Initial check and add resize listener
        handleResize();
        window.addEventListener('resize', handleResize);
        
        // Prevent body scroll when menu is open
        const originalBodyOverflow = document.body.style.overflow;
        
        // Observer for body class changes
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.attributeName === 'class') {
                    if (document.body.classList.contains('menu-open')) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = originalBodyOverflow;
                    }
                }
            });
        });
        
        observer.observe(document.body, { attributes: true });
    });
</script>


<script type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/695bb2f6b1e0d21980f0bf3c/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); </script> 



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
</html>




<?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/layouts/base.blade.php ENDPATH**/ ?>
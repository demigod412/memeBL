


<?php $__env->startSection('title', 'Home'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

    <main>
        <!-- hero section start  -->
        <section class="hero bg_img pos-rel pt-120" data-background="<?php echo e(asset('public/images/hero-bg1.svg')); ?>">
            <div class="hero-shape">
                <div class="shape--1">
                    <img class="leftToRight" src="<?php echo e(asset('public/images/hero-sp_01.svg')); ?>" alt="">
                </div>
                <div class="shape--2">
                    <img class="topToBottom" src="<?php echo e(asset('public/images/hero-sp_02.svg')); ?>" alt="">
                </div>
                <div class="shape--3">
                    <img class="leftToRight" src="<?php echo e(asset('public/images/hero-sp_04.svg')); ?>" alt="">
                </div>
                <div class="shape--4">
                    <img class="topToBottom" src="<?php echo e(asset('public/images/hero-sp_03.svg')); ?>" alt="">
                </div>
                <div class="shape--5">
                    <img class="topToBottom" src="<?php echo e(asset('public/images/hero-sp_05.svg')); ?>" alt="">
                </div>
                <div class="shape--6">
                    <img class="leftToRight" src="<?php echo e(asset('public/images/hero-sp_06.svg')); ?>" alt="">
                </div>
            </div>
            <div class="container">
                <div class="hero__content-wrap">
                    <div class="section-title hero--sec-titlt wow fadeInUp" data-wow-duration=".7s">
                        <h1 class="title">Automated Trading Meets Meme Finance</h1>
                      
                    </div>

                    <style>
                        .hero-description {
    font-size: 20px;
    line-height: 1.7;
    color: #C1C7DE;
    max-width: 800px;
    margin: 25px auto 40px;
    padding: 0 20px;
    text-align: center;
    font-weight: 400;
    opacity: 0.9;
}

/* Or match the button styling */
.hero-description {
    font-size: 22px;
    line-height: 34px;
    color: #B3B3C0;
    max-width: 850px;
    margin: 30px auto 50px;
    padding: 0 30px;
    text-align: center;
    font-weight: 400;
}

@media (max-width: 991px) {
    .hero-description {
        font-size: 18px;
        line-height: 28px;
        max-width: 90%;
        margin: 25px auto 40px;
    }
}

@media (max-width: 767px) {
    .hero-description {
        font-size: 16px;
        line-height: 26px;
        max-width: 100%;
        margin: 20px auto 30px;
        padding: 0 15px;
    }
}

/* Override the JavaScript background on mobile */
@media (max-width: 991px) {
    .hero.bg_img[data-background="<?php echo e(asset('public/images/hero-bg1.svg')); ?>"] {
        background-image: url('<?php echo e(asset("public/images/hero-mobile-bg5.jpg")); ?>') !important;
        background-size: cover !important;
        background-position: center center !important;
    }
}

/* Ensure proper sizing */
@media (max-width: 991px) {
    .hero {
        min-height: 700px !important;
    }
}

@media (max-width: 767px) {
    .hero {
        min-height: 500px !important;
        padding-top: 80px !important;
    }
}

                    </style>
                    <p class="hero-description">
    By combining automation, intelligent trade execution, and strategic market scanning, Meme BULL enhances investors’ chances of capturing profitable market positions. The system aims to optimize entries and exits for better overall performance.
</p>
                    <div class="hero__btn btns pt-50 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="350ms">
                        <a class="them-btn" href="/register">
                            <span class="btn_label" data-text="Start Trading">Start Trading</span>
                            <span class="btn_icon">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="policy" class="them-btn btn-transparent">
                            <span class="btn_label" data-text="View Documentation">View Documentation</span>
                            <span class="btn_icon">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="token-structure mt-145 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="450ms">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="hero-token">
                                <h3 class="xb-item--title">Platform Statistics</h3>
                                <p class="xb-item--content">
                                    Real-time performance metrics and trading insights from our advanced algorithmic ecosystem.
                                </p>
                                <div class="xb-item--accept">
                                    <h5 class="xb-item--acc-title">Supported Assets :</h5>
                                    <ul class="xb-item--list ul_li">
                                        <li><img src="<?php echo e(asset('public/images/hero-icon01.svg')); ?>" alt="Bitcoin">Bitcoin</li>
                                        <li><img src="<?php echo e(asset('public/images/hero-icon02.svg')); ?>" alt="Ethereum">Ethereum</li>
                                        <li><img src="<?php echo e(asset('public/images/hero-icon03.svg')); ?>" alt="Solana">Solana</li>
                                        <li><img src="<?php echo e(asset('public/images/hero-icon04.svg')); ?>" alt="Meme Tokens">Meme Tokens</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="hero-sale">
                                <div class="xb-item--sale_service ul_li_between">
                                    <span>Active Users</span>
                                    <span>Success Rate</span>
                                    <span>24h Volume</span>
                                </div>
                                <div class="xb-item--line ul_li_between">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="xb-item--progress">
                                    <div class="xb-item--pro-color"><span class="shape"></span></div>
                                </div>
                                <div class="xb-item--target ul_li_between">
                                    <span>15,892 Active Traders</span>
                                    <span>87.3% Avg. Success Rate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-scroll pt-105">
                    <span>Discover Our Ecosystem</span>
                    <div class="scroll-down text-center">
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end  -->

        <!-- partners section start  -->
        <section class="partners z-3 pt-135">
            <div class="patners-title text-center">
                <span><img src="<?php echo e(asset('public/images/partner_07.png')); ?>" alt=""> Integrated Exchanges & Protocols <img src="<?php echo e(asset('public/images/partner_08.png')); ?>" alt=""></span>
            </div>
            <div class="partner-active partner-slider ul_li">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="xb-item--brand">
                            <div class="xb-item--brand_logo">
                                <img src="<?php echo e(asset('public/images/partner_01.png')); ?>" alt="Uniswap">
                            </div>
                            <span>Uniswap</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="xb-item--brand">
                            <div class="xb-item--brand_logo">
                                <img src="<?php echo e(asset('public/images/partner_02.png')); ?>" alt="Chainlink">
                            </div>
                            <span>Chainlink</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="xb-item--brand">
                            <div class="xb-item--brand_logo">
                                <img src="<?php echo e(asset('public/images/partner_03.png')); ?>" alt="Binance">
                            </div>
                            <span>Binance</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="xb-item--brand">
                            <div class="xb-item--brand_logo">
                                <img src="<?php echo e(asset('public/images/partner_04.png')); ?>" alt="DEX Aggregator">
                            </div>
                            <span>1inch</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="xb-item--brand">
                            <div class="xb-item--brand_logo">
                                <img src="<?php echo e(asset('public/images/partner_05.png')); ?>" alt="Ethereum">
                            </div>
                            <span>Ethereum</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="xb-item--brand">
                            <div class="xb-item--brand_logo">
                                <img src="<?php echo e(asset('public/images/partner_06.png')); ?>" alt="Solana">
                            </div>
                            <span>Solana</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partners section end  -->

        <!-- about section start-->
        <section class="about pos-rel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-wrap pt-140 wow fadeInLeft" data-wow-duration=".7s">
                            <h2 class="xb-item--title">What is Meme BULL?</h2>
                            <p class="xb-item--content">
                                Meme BULL is an innovative crypto-based automated trading ecosystem designed to empower investors with smarter, data-driven opportunities in the digital asset market. Built at the intersection of advanced algorithmic trading, real-time market analytics, and the fast-growing meme-finance culture.
                            </p>
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-img bg_img">
                <img class="wow fadeInRight" data-wow-duration=".7s" data-wow-delay="200ms" src="<?php echo e(asset('public/images/about-img.png')); ?>" alt="Meme BULL Trading Dashboard">
            </div>
        </section>
        <!-- about section end-->

        <!-- process start -->
        <section class="process z-3 pb-150 pt-35">
            <div class="container pt-100">
                <div class="row justify-content-center mt-none-130">
                    <div class="col-xl-4 col-lg-6 process-col mt-130">
                        <div class="xb-process pos-rel">
                            <div class="xb-item--icon">
                                <img src="<?php echo e(asset('public/images/process_icon1.svg')); ?>" alt="Connect Wallet">
                            </div>
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Connect & Configure</h2>
                                <p class="xb-item--content">Connect your wallet and set up trading parameters tailored to your risk profile and investment goals.</p>
                            </div>
                            <div class="xb-item--shape">
                                <span>
                                    <svg width="410" height="274" viewBox="0 0 410 274" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                        <path d="M302.5 0C220.1 55.6 135.5 23.1667 103.5 0L0 274H410L302.5 0Z" fill="url(#p_shape1)"></path>
                                        <defs>
                                            <radialGradient id="p_shape1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205 12) rotate(90) scale(611.5 749.061)">
                                                <stop offset="0" stop-color="#EBF7FD"></stop>
                                                <stop offset="0.09" stop-color="#9162FF"></stop>
                                                <stop offset="0.26792" stop-color="#1C30A8"></stop>
                                                <stop offset="0.474094" stop-color="#080B18"></stop>
                                            </radialGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 process-col mt-130">
                        <div class="xb-process pos-rel">
                            <div class="xb-item--icon">
                                <img src="<?php echo e(asset('public/images/process_icon2.svg')); ?>" alt="Algorithm Setup">
                            </div>
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Algorithm Selection</h2>
                                <p class="xb-item--content">Choose from our library of proven trading algorithms or create custom strategies using our tools.</p>
                            </div>
                            <div class="xb-item--shape">
                                <span>
                                    <svg width="410" height="274" viewBox="0 0 410 274" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                        <path d="M302.5 0C220.1 55.6 135.5 23.1667 103.5 0L0 274H410L302.5 0Z" fill="url(#p_shape2)"></path>
                                        <defs>
                                            <radialGradient id="p_shape2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205 12) rotate(90) scale(611.5 749.061)">
                                                <stop offset="0" stop-color="#EBF7FD"></stop>
                                                <stop offset="0.09" stop-color="#9162FF"></stop>
                                                <stop offset="0.26792" stop-color="#1C30A8"></stop>
                                                <stop offset="0.474094" stop-color="#080B18"></stop>
                                            </radialGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 process-col mt-130">
                        <div class="xb-process pos-rel">
                            <div class="xb-item--icon">
                                <img src="<?php echo e(asset('public/images/process_icon3.svg')); ?>" alt="Automated Trading">
                            </div>
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Automate & Monitor</h2>
                                <p class="xb-item--content">Let our algorithms execute trades while you monitor performance through real-time analytics dashboards.</p>
                            </div>
                            <div class="xb-item--shape">
                                <span>
                                    <svg width="410" height="274" viewBox="0 0 410 274" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                                        <path d="M302.5 0C220.1 55.6 135.5 23.1667 103.5 0L0 274H410L302.5 0Z" fill="url(#p_shape3)"></path>
                                        <defs>
                                            <radialGradient id="p_shape3" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(205 12) rotate(90) scale(611.5 749.061)">
                                                <stop offset="0" stop-color="#EBF7FD"></stop>
                                                <stop offset="0.09" stop-color="#9162FF"></stop>
                                                <stop offset="0.26792" stop-color="#1C30A8"></stop>
                                                <stop offset="0.474094" stop-color="#080B18"></stop>
                                            </radialGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process end -->

        <!-- token section start  -->
        <section id="chart" class="token z-1 mt-70 pt-150 pb-150 bg_img pos-rel" data-background="<?php echo e(asset('public/token-bg.png')); ?>">
            <div class="container">
                <div class="section-title pb-55">
                    <h1 class="title">The Meme BULL Ecosystem <br> & Tokenomics</h1>
                </div>
                <div class="token-wrap">
                    <div class="row mt-none-30">
                        <div class="col-xl-5 col-lg-6 mt-30">
                            <div class="token-distribut">
                                <h2 class="xb-item--title">Token Distribution</h2>
                                <ul class="xb-item--list">
                                    <li>Ecosystem Development</li>
                                    <li>Community Rewards</li>
                                    <li>Liquidity & Staking</li>
                                    <li>Team & Advisors</li>
                                    <li>Marketing & Growth</li>
                                    <li>Algorithm Research</li>
                                    <li>Security & Compliance</li>
                                </ul>
                                <div class="xb-item--list-circle pos-rel">
                                    <div class="xb-item--circle"><span>35%</span></div>
                                    <div class="xb-item--circle"><span>25%</span></div>
                                    <div class="xb-item--circle"><span>15%</span></div>
                                    <div class="xb-item--circle"><span>10%</span></div>
                                    <div class="xb-item--circle"><span>7%</span></div>
                                    <div class="xb-item--circle"><span>5%</span></div>
                                    <div class="xb-item--circle"><span>3%</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 mt-30">
                            <div class="token-sale">
                                <h2 class="xb-item--title">Platform Revenue Allocation</h2>
                                <div class="xb-item--progress_bar">
                                    <div class="xb-item--parcenteg ul_li">
                                        <span>45%</span>
                                        <span>30%</span>
                                        <span>15%</span>
                                        <span>10%</span>
                                    </div>
                                    <div class="xb-item--token_progress ul_li">
                                        <span class="color1"></span>
                                        <span class="color2"></span>
                                        <span class="color3"></span>
                                        <span class="color4"></span>
                                    </div>
                                </div>
                                <ul class="xb-item--pro_list ul_li">
                                    <li>Algorithm Development</li>
                                    <li>Platform Enhancement</li>
                                    <li>Community Rewards</li>
                                    <li>Strategic Growth</li>
                                </ul>
                            </div>
                            <div class="token-sale model">
                                <h2 class="xb-item--title">Governance Structure</h2>
                                <div class="xb-item--progress_bar">
                                    <div class="xb-item--parcenteg ul_li">
                                        <span>40%</span>
                                        <span>25%</span>
                                        <span>20%</span>
                                        <span>10%</span>
                                        <span>5%</span>
                                    </div>
                                    <div class="xb-item--token_progress ul_li">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <ul class="xb-item--pro_list ul_li">
                                    <li>Token Holders</li>
                                    <li>Core Team</li>
                                    <li>Strategic Partners</li>
                                    <li>Community Leaders</li>
                                    <li>Ecosystem Fund</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toke-shape">
                <div class="shape--one">
                    <img class="leftToRight" src="<?php echo e(asset('public/images/token.svg')); ?>" alt="">
                </div>
                <div class="shape--two">
                    <img class="topToBottom" src="<?php echo e(asset('public/images/token1.svg')); ?>" alt="">
                </div>
            </div>
        </section>
        <!-- token section end -->

        <!-- roadmap section start -->
        <section id="roadmap" class="roadmap pt-135">
            <div class="section-title pb-50">
                <h1 class="title">Our Development Roadmap</h1>
            </div>
            <div class="roadmap-wrap">
                <div class="roadmap--top">
                    <div class="roadmap--item roadmap--first_item">
                        <h2 class="roadmap--head">Research & Development</h2>
                        <ul class="roadmap--info">
                            <li>Algorithm Design & Testing</li>
                            <li>Market Analysis Framework</li>
                            <li>Protocol Architecture</li>
                            <li>Security Audits</li>
                        </ul>
                        <div class="roadmap--year">
                            <div class="roadmap--circle"><span></span></div>
                            <span>Q1 2024</span>
                        </div>
                    </div>
                    <div class="roadmap--item">
                        <h2 class="roadmap--head">Alpha Platform Launch</h2>
                        <ul class="roadmap--info">
                            <li>Core Trading Algorithms</li>
                            <li>Basic Analytics Dashboard</li>
                            <li>Wallet Integration</li>
                            <li>Limited User Testing</li>
                        </ul>
                        <div class="roadmap--year">
                            <div class="roadmap--circle"><span></span></div>
                            <span>Q2 2024</span>
                        </div>
                    </div>
                </div>
                <div class="roadmap--line"></div>
                <div class="roadmap--bottom">
                    <div class="roadmap--item bottom-item">
                        <div class="roadmap--year">
                            <span>Q3 2024</span>
                            <div class="roadmap--circle"><span></span></div>
                        </div>
                        <h2 class="roadmap--head">Beta Testing Phase</h2>
                        <ul class="roadmap--info">
                            <li>Expanded Algorithm Library</li>
                            <li>Advanced Risk Management</li>
                            <li>Community Feedback Integration</li>
                            <li>Performance Optimization</li>
                        </ul>
                    </div>
                    <div class="roadmap--item bottom-item">
                        <div class="roadmap--year">
                            <span>Q4 2024</span>
                            <div class="roadmap--circle"><span></span></div>
                        </div>
                        <h2 class="roadmap--head">Full Ecosystem Launch</h2>
                        <ul class="roadmap--info">
                            <li>Complete Feature Suite</li>
                            <li>Multi-Chain Support</li>
                            <li>Advanced Analytics Tools</li>
                            <li>Institutional Features</li>
                        </ul>
                    </div>
                    <div class="roadmap--item bottom-item">
                        <div class="roadmap--year">
                            <span>Q1 2025</span>
                            <div class="roadmap--circle"><span></span></div>
                        </div>
                        <h2 class="roadmap--head">Advanced Features</h2>
                        <ul class="roadmap--info">
                            <li>AI-Powered Predictions</li>
                            <li>Cross-Protocol Integration</li>
                            <li>Institutional Portal</li>
                            <li>Global Expansion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- roadmap section end -->

        <!-- feature section start -->
        <section id="features" class="feature pos-rel pt-125 mb-170">
            <div class="container">
                <div class="section-title pb-65">
                    <h1 class="title">Core Trading Features</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Intelligent Algorithmic Trading</h2>
                                <p class="xb-item--content">Advanced AI-powered trading algorithms that analyze market patterns and execute trades with precision timing.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="<?php echo e(asset('public/images/fea-01.svg')); ?>" alt="Algorithmic Trading">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Real-Time Market Analytics</h2>
                                <p class="xb-item--content">Comprehensive market data, sentiment analysis, and predictive insights delivered in real-time.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="<?php echo e(asset('public/images/fea-02.svg')); ?>" alt="Market Analytics">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Risk Management Controls</h2>
                                <p class="xb-item--content">Advanced risk parameters, stop-loss mechanisms, and portfolio protection features.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="<?php echo e(asset('public/images/fea-03.svg')); ?>" alt="Risk Management">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-wrap ul_li">
                            <div class="xb-item--holder">
                                <h2 class="xb-item--title">Meme Market Intelligence</h2>
                                <p class="xb-item--content">Social sentiment analysis and meme-finance trend tracking integrated into trading strategies.</p>
                            </div>
                            <div class="xb-item--feature-icon">
                                <img src="<?php echo e(asset('public/images/fea-04.svg')); ?>" alt="Market Intelligence">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature-crypto bg_img" data-background="<?php echo e(asset('public/images/feature-bg.png')); ?>">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <div class="mobile-crypto">
                                <div class="xb-item--sub-title">
                                    <span><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.6448 8.99798C14.223 8.02696 13.6099 7.15543 12.8438 6.43787L12.2116 5.84453C12.1901 5.82499 12.1643 5.81106 12.1363 5.80409C12.1084 5.79704 12.0792 5.79721 12.0513 5.80443C12.0234 5.81165 11.9978 5.82584 11.9764 5.84555C11.9551 5.86535 11.9389 5.89016 11.9292 5.91786L11.6468 6.74682C11.4708 7.26683 11.1471 7.79797 10.6886 8.32018C10.6582 8.35349 10.6235 8.36241 10.5996 8.36462C10.5757 8.36683 10.5388 8.36241 10.5062 8.33132C10.4758 8.30464 10.4606 8.26462 10.4627 8.22459C10.5431 6.88685 10.1521 5.37789 9.29609 3.73562C8.58788 2.37114 7.60377 1.30668 6.3741 0.564432L5.47683 0.0244217C5.35957 -0.0466972 5.2096 0.0466409 5.21615 0.186644L5.26398 1.25334C5.29653 1.98225 5.21402 2.62671 5.01842 3.16227C4.77949 3.81784 4.43622 4.42675 3.99735 4.97343C3.69198 5.35333 3.34581 5.69703 2.96549 5.9979C2.04933 6.71827 1.3044 7.64137 0.786445 8.69796C0.269767 9.7638 0.000628769 10.9373 0 12.127C0 13.1759 0.202039 14.1914 0.601783 15.1492C0.987762 16.0714 1.54477 16.9083 2.24201 17.6137C2.94587 18.3248 3.76276 18.8849 4.67303 19.2738C5.61592 19.6782 6.61524 19.8826 7.64719 19.8826C8.67913 19.8826 9.67845 19.6782 10.6213 19.276C11.5293 18.8894 12.3551 18.3255 13.0523 17.6159C13.7563 16.9048 14.3081 16.0737 14.6925 15.1514C15.0917 14.1963 15.2965 13.1679 15.2944 12.1292C15.2944 11.0447 15.0771 9.99135 14.6448 8.99798Z" fill="#FF0000"></path>
                                    </svg>Trading Dashboard 2.0 <span class="new-btn">new</span>
                                    </span>
                                </div>
                                <h2 class="xb-item--title">Advanced Trading Dashboard</h2>
                                <p class="xb-item--content">
                                    Everything you need for successful crypto trading: real-time analytics, algorithm management, portfolio tracking, and risk controls in one intuitive interface.
                                </p>
                                <ul class="xb-item--crypto-list">
                                    <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z" fill="white"></path>
                                        <path d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z" fill="#080B18"></path>
                                    </svg> Real-time portfolio tracking and performance analytics</li>
                                    <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z" fill="white"></path>
                                        <path d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z" fill="#080B18"></path>
                                    </svg> Customizable algorithm parameters and strategy builder</li>
                                    <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z" fill="white"></path>
                                        <path d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z" fill="#080B18"></path>
                                    </svg> Advanced risk management and stop-loss controls</li>
                                    <li><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 9C18 9.768 17.0565 10.401 16.8675 11.109C16.6725 11.841 17.166 12.861 16.7955 13.5015C16.419 14.1525 15.2865 14.2305 14.7585 14.7585C14.2305 15.2865 14.1525 16.419 13.5015 16.7955C12.861 17.166 11.841 16.6725 11.109 16.8675C10.401 17.0565 9.768 18 9 18C8.232 18 7.599 17.0565 6.891 16.8675C6.159 16.6725 5.139 17.166 4.4985 16.7955C3.8475 16.419 3.7695 15.2865 3.2415 14.7585C2.7135 14.2305 1.581 14.1525 1.2045 13.5015C0.834 12.861 1.3275 11.841 1.1325 11.109C0.9435 10.401 0 9.768 0 9C0 8.232 0.9435 7.599 1.1325 6.891C1.3275 6.159 0.834 5.139 1.2045 4.4985C1.581 3.8475 2.7135 3.7695 3.2415 3.2415C3.7695 2.7135 3.8475 1.581 4.4985 1.2045C5.139 0.834 6.159 1.3275 6.891 1.1325C7.599 0.9435 8.232 0 9 0C9.768 0 10.401 0.9435 11.109 1.1325C11.841 1.3275 12.861 0.834 13.5015 1.2045C14.1525 1.581 14.2305 2.7135 14.7585 3.2415C15.2865 3.7695 16.419 3.8475 16.7955 4.4985C17.166 5.139 16.6725 6.159 16.8675 6.891C17.0565 7.599 18 8.232 18 9Z" fill="white"></path>
                                        <path d="M11.6674 6.85539L8.54986 9.88334L6.93376 8.31501C6.58297 7.9743 6.01379 7.9743 5.663 8.31501C5.3122 8.65572 5.3122 9.20854 5.663 9.54926L7.93018 11.7513C8.27141 12.0827 8.82558 12.0827 9.16682 11.7513L12.9368 8.08963C13.2876 7.74892 13.2876 7.1961 12.9368 6.85539C12.586 6.51468 12.0182 6.51468 11.6674 6.85539Z" fill="#080B18"></path>
                                    </svg> Multi-exchange integration and smart order routing</li>
                                </ul>
                                <div class="xb-item--crypto-btn">
                                  
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cry-mobile-img">
                                <img src="<?php echo e(asset('public/images/fea-mobile.png')); ?>" alt="Mobile Trading Dashboard">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-shape align-items-center">
                <img src="<?php echo e(asset('public/images/fea-color-sp.png')); ?>" alt="">
            </div>
        </section>
        <!-- feature section end -->

      

            <!-- 
           <section class="faq pt-130">
    <div class="container">
        <div class="section-title pb-55 wow fadeInUp" data-wow-duration=".7s">
            <h1 class="title">Frequently Asked Questions</h1>
        </div>
        <div class="faq__blockchain wow fadeInUp" data-wow-duration=".7s" data-wow-delay="200ms">
            <ul class="accordion_box clearfix">
                <li class="accordion block">
                    <div class="acc-btn">
                        How does automated trading work on Meme BULL?
                        <span class="arrow">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="acc_body">
                        <div class="content">
                            Our platform uses advanced algorithms that analyze market data, social sentiment, and trading patterns to execute trades automatically. You set your parameters, and our algorithms handle the rest, optimizing for profitability while managing risk.
                        </div>
                    </div>
                </li>
                <li class="accordion block active-block">
                    <div class="acc-btn">
                        What makes Meme BULL different from other trading platforms?
                        <span class="arrow">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="acc_body current">
                        <div class="content">
                            Meme BULL uniquely combines advanced algorithmic trading with meme-finance intelligence. We integrate real-time social sentiment analysis, market analytics, and proven trading algorithms into one seamless ecosystem designed for both beginners and experienced traders.
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">
                        Is there a minimum investment required?
                        <span class="arrow">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="acc_body">
                        <div class="content">
                            No, there's no minimum investment. Our platform is designed to be accessible to traders of all levels. You can start with any amount you're comfortable with and scale as you gain confidence in our algorithms.
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">
                        How are your trading algorithms developed and tested?
                        <span class="arrow">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="acc_body">
                        <div class="content">
                            Our algorithms are developed by quantitative analysts and data scientists using historical market data, machine learning models, and real-time testing. Each algorithm undergoes rigorous backtesting and paper trading before being deployed on the live platform.
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">
                        What security measures are in place?
                        <span class="arrow">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="acc_body">
                        <div class="content">
                            We employ bank-level security including multi-signature wallets, cold storage for funds, end-to-end encryption, regular security audits, and insurance coverage. Your assets remain in your control at all times.
                        </div>
                    </div>
                </li>
                <li class="accordion block">
                    <div class="acc-btn">
                        Can I customize the trading strategies?
                        <span class="arrow">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="acc_body">
                        <div class="content">
                            Yes, our platform offers both pre-configured algorithms and a strategy builder tool. You can adjust risk parameters, set custom indicators, and create personalized trading strategies based on your preferences and risk tolerance.
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
             faq end -->
            <div class="team-shape">
                <div class="shape shape--1">
                    <img class="leftToRight" src="<?php echo e(asset('public/images/team-sp_01.svg')); ?>" alt="">
                </div>
                <div class="shape shape--2">
                    <img class="topToBottom" src="<?php echo e(asset('public/images/team-sp_02.svg')); ?>" alt="">
                </div>
                <div class="shape shape--3">
                    <img class="leftToRight" src="<?php echo e(asset('public/images/team-sp_03.svg')); ?>" alt="">
                </div>
                <div class="shape shape--4">
                    <img class="topToBottom" src="<?php echo e(asset('public/images/team-sp_04.svg')); ?>" alt="">
                </div>
            </div>
        </div>
        <!-- team & faq section end -->

        <!-- event section start -->
        <section class="event pt-140 pb-150">
            <div class="container">
                <div class="section-title pb-55">
                    <h1 class="title">Upcoming Trading Events</h1>
                </div>
                <div class="row mt-none-30 justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="xb-event">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/event-img01.jpg')); ?>" alt="Algorithm Launch Event">
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--location"><i class="fas fa-map-marker-alt"></i><span>Virtual Event</span></div>
                                <h2 class="xb-item--title border_effect"><a href="/register">Advanced Algorithm Launch & Strategy Workshop</a></h2>
                                <div class="xb-item--date-time ul_li_between">
                                    <div class="xb-item--date xb-item--date-time1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.66663 1.66675V4.16675" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.3334 1.66675V4.16675" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83337 10.8333H12.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83337 14.1667H10" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.3333 2.91675C16.1083 3.06675 17.5 4.12508 17.5 8.04175V13.1917C17.5 16.6251 16.6667 18.3417 12.5 18.3417H7.5C3.33333 18.3417 2.5 16.6251 2.5 13.1917V8.04175C2.5 4.12508 3.89167 3.07508 6.66667 2.91675H13.3333Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg><span>24 / 08 / 2024</span>
                                    </div>
                                    <div class="xb-item--time xb-item--date-time1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2917 11.0417C17.2917 15.0667 14.025 18.3333 10 18.3333C5.97504 18.3333 2.70837 15.0667 2.70837 11.0417C2.70837 7.01667 5.97504 3.75 10 3.75C14.025 3.75 17.2917 7.01667 17.2917 11.0417Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 6.66675V10.8334" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.5 1.66675H12.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg><span>2:00 PM - 4:00 PM UTC</span>
                                    </div>
                                </div>
                                <div class="xb-item--event-btn">
                                    <a class="them-btn" href="/register">
                                        <span class="btn_label" data-text="Register Now">Register Now</span>
                                        <span class="btn_icon">
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="xb-event">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/event-img02.jpg')); ?>" alt="Market Analysis Summit">
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--location"><i class="fas fa-map-marker-alt"></i><span>Virtual Event</span></div>
                                <h2 class="xb-item--title border_effect"><a href="/register">Q4 Market Analysis & Trading Strategy Summit</a></h2>
                                <div class="xb-item--date-time ul_li_between">
                                    <div class="xb-item--date xb-item--date-time1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.66663 1.66675V4.16675" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.3334 1.66675V4.16675" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83337 10.8333H12.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83337 14.1667H10" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.3333 2.91675C16.1083 3.06675 17.5 4.12508 17.5 8.04175V13.1917C17.5 16.6251 16.6667 18.3417 12.5 18.3417H7.5C3.33333 18.3417 2.5 16.6251 2.5 13.1917V8.04175C2.5 4.12508 3.89167 3.07508 6.66667 2.91675H13.3333Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg><span>24 / 09 / 2024</span>
                                    </div>
                                    <div class="xb-item--time xb-item--date-time1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2917 11.0417C17.2917 15.0667 14.025 18.3333 10 18.3333C5.97504 18.3333 2.70837 15.0667 2.70837 11.0417C2.70837 7.01667 5.97504 3.75 10 3.75C14.025 3.75 17.2917 7.01667 17.2917 11.0417Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 6.66675V10.8334" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.5 1.66675H12.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg><span>3:00 PM - 5:00 PM UTC</span>
                                    </div>
                                </div>
                                <div class="xb-item--event-btn">
                                    <a class="them-btn" href="/register">
                                        <span class="btn_label" data-text="Register Now">Register Now</span>
                                        <span class="btn_icon">
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-30">
                        <div class="xb-event">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/event-img03.jpg')); ?>" alt="Community Governance">
                            </div>
                            <div class="xb-item--holder">
                                <div class="xb-item--location"><i class="fas fa-map-marker-alt"></i><span>Virtual Event</span></div>
                                <h2 class="xb-item--title border_effect"><a href="/register">Community Governance & Platform Roadmap Update</a></h2>
                                <div class="xb-item--date-time ul_li_between">
                                    <div class="xb-item--date xb-item--date-time1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.66663 1.66675V4.16675" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.3334 1.66675V4.16675" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83337 10.8333H12.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5.83337 14.1667H10" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.3333 2.91675C16.1083 3.06675 17.5 4.12508 17.5 8.04175V13.1917C17.5 16.6251 16.6667 18.3417 12.5 18.3417H7.5C3.33333 18.3417 2.5 16.6251 2.5 13.1917V8.04175C2.5 4.12508 3.89167 3.07508 6.66667 2.91675H13.3333Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg><span>24 / 10 / 2024</span>
                                    </div>
                                    <div class="xb-item--time xb-item--date-time1">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2917 11.0417C17.2917 15.0667 14.025 18.3333 10 18.3333C5.97504 18.3333 2.70837 15.0667 2.70837 11.0417C2.70837 7.01667 5.97504 3.75 10 3.75C14.025 3.75 17.2917 7.01667 17.2917 11.0417Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 6.66675V10.8334" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M7.5 1.66675H12.5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg><span>4:00 PM - 6:00 PM UTC</span>
                                    </div>
                                </div>
                                <div class="xb-item--event-btn">
                                    <a class="them-btn" href="/register">
                                        <span class="btn_label" data-text="Register Now">Register Now</span>
                                        <span class="btn_icon">
                                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- event section end -->
    </main>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/home/index.blade.php ENDPATH**/ ?>
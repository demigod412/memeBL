<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', '<?php echo e($title); ?>'); ?>

<?php $__env->startSection('content'); ?>
 <!-- breadcrumb end -->

    <!-- education hero section start -->
    <section class="hero-two pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="hero-style-two text-center">
                        <div class="hero--sec-titlt-two">
                            <h2 class="title">Master <span>Automated Bot Trading</span> with AI-Powered Intelligence</h2>
                        </div>
                        <p class="xb-item--content">Unlock the power of automated trading with our comprehensive educational resources. Learn from industry experts and leverage cutting-edge AI technology to maximize your trading potential.</p>
                        <div class="hero__btn mt-50">
                            <a href="#learning-path" class="them-btn">
                                <span class="btn_label" data-text="Start Learning">Start Learning</span>
                                <span class="btn_icon">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                    </svg>
                                </span>
                            </a>
                            <a href="#resources" class="them-btn btn-transparent ml-20">
                                <span class="btn_label" data-text="Explore Resources">Explore Resources</span>
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
    </section>
    <!-- education hero section end -->

    <!-- learning path section start -->
    <section class="feature-counter-wrap pb-100" id="learning-path">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h2 class="title">Structured Learning Path</h2>
                        <p class="mt-30">Follow our step-by-step curriculum designed for both beginners and experienced traders</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Level 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature">
                        <div class="xb-item--holder">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/education/beginner-icon.svg')); ?>" alt="Beginner Level">
                            </div>
                            <h3 class="xb-item--title">Beginner Level</h3>
                            <p class="xb-item--content">Learn the fundamentals of crypto trading, bot basics, and risk management principles.</p>
                            <div class="xb-item--feature-icon mt-30">
                                <ul class="ul_li_block">
                                    <li><i class="fas fa-check text-primary mr-2"></i> Crypto Trading Basics</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Bot Setup & Configuration</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Risk Management 101</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Market Analysis Fundamentals</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Level 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature">
                        <div class="xb-item--holder">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/education/intermediate-icon.svg')); ?>" alt="Intermediate Level">
                            </div>
                            <h3 class="xb-item--title">Intermediate Level</h3>
                            <p class="xb-item--content">Master advanced strategies, technical analysis, and portfolio optimization techniques.</p>
                            <div class="xb-item--feature-icon mt-30">
                                <ul class="ul_li_block">
                                    <li><i class="fas fa-check text-primary mr-2"></i> Advanced Trading Strategies</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Technical Analysis Mastery</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Portfolio Optimization</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Backtesting Methods</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Level 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature">
                        <div class="xb-item--holder">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/education/advanced-icon.svg')); ?>" alt="Advanced Level">
                            </div>
                            <h3 class="xb-item--title">Advanced Level</h3>
                            <p class="xb-item--content">Dive into AI-powered trading, algorithm development, and institutional strategies.</p>
                            <div class="xb-item--feature-icon mt-30">
                                <ul class="ul_li_block">
                                    <li><i class="fas fa-check text-primary mr-2"></i> AI & Machine Learning Integration</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Custom Algorithm Development</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Institutional Trading Strategies</li>
                                    <li><i class="fas fa-check text-primary mr-2"></i> Risk Assessment Models</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning path section end -->

    <!-- resources section start -->
    <section class="faq__blockchain-two pt-100 pb-100 bg-dark" id="resources">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h2 class="title">Comprehensive Learning Resources</h2>
                        <p class="mt-30">Access our extensive library of educational materials designed to elevate your trading skills</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Video Tutorials -->
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature xb-hover-zoom">
                        <div class="xb-item--holder">
                            <div class="xb-item--img mb-30">
                                <img src="<?php echo e(asset('public/images/education/video-tutorials.jpg')); ?>" alt="Video Tutorials">
                            </div>
                            <h3 class="xb-item--title">Video Tutorials</h3>
                            <p class="xb-item--content">Step-by-step video guides covering everything from basic setup to advanced strategies.</p>
                            <div class="xb-item--feature-icon mt-30">
                                <div class="xb-item--crypto-list">
                                    <li><i class="fas fa-play-circle text-primary mr-2"></i> 50+ HD Tutorial Videos</li>
                                    <li><i class="fas fa-chart-line text-primary mr-2"></i> Live Trading Sessions</li>
                                    <li><i class="fas fa-question-circle text-primary mr-2"></i> Q&A Webinars</li>
                                </div>
                                <div class="xb-item--crypto-btn mt-30">
                                    <a href="#!" class="them-btn">
                                        <span class="btn_label" data-text="Watch Now">Watch Now</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-play"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- E-Books & Guides -->
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature xb-hover-zoom">
                        <div class="xb-item--holder">
                            <div class="xb-item--img mb-30">
                                <img src="<?php echo e(asset('public/images/education/ebooks.jpg')); ?>" alt="E-Books & Guides">
                            </div>
                            <h3 class="xb-item--title">E-Books & Guides</h3>
                            <p class="xb-item--content">Comprehensive guides and whitepapers written by trading experts and analysts.</p>
                            <div class="xb-item--feature-icon mt-30">
                                <div class="xb-item--crypto-list">
                                    <li><i class="fas fa-book text-primary mr-2"></i> Trading Strategy Guides</li>
                                    <li><i class="fas fa-file-alt text-primary mr-2"></i> Market Analysis Reports</li>
                                    <li><i class="fas fa-graduation-cap text-primary mr-2"></i> Certification Materials</li>
                                </div>
                                <div class="xb-item--crypto-btn mt-30">
                                    <a href="#!" class="them-btn">
                                        <span class="btn_label" data-text="Download">Download</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-download"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Interactive Courses -->
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature xb-hover-zoom">
                        <div class="xb-item--holder">
                            <div class="xb-item--img mb-30">
                                <img src="<?php echo e(asset('public/images/education/interactive-courses.jpg')); ?>" alt="Interactive Courses">
                            </div>
                            <h3 class="xb-item--title">Interactive Courses</h3>
                            <p class="xb-item--content">Hands-on courses with practical exercises and real-world trading scenarios.</p>
                            <div class="xb-item--feature-icon mt-30">
                                <div class="xb-item--crypto-list">
                                    <li><i class="fas fa-laptop-code text-primary mr-2"></i> Interactive Exercises</li>
                                    <li><i class="fas fa-tasks text-primary mr-2"></i> Progress Tracking</li>
                                    <li><i class="fas fa-award text-primary mr-2"></i> Achievement Badges</li>
                                </div>
                                <div class="xb-item--crypto-btn mt-30">
                                    <a href="#!" class="them-btn">
                                        <span class="btn_label" data-text="Enroll Now">Enroll Now</span>
                                        <span class="btn_icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- resources section end -->

    <!-- strategy showcase section start -->
    <section class="feature pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h2 class="title">Proven Trading Strategies</h2>
                        <p class="mt-30">Learn and implement strategies that have been tested and optimized by our AI algorithms</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion__wrap">
                        <div class="accordion_box">
                            <!-- Strategy 1 -->
                            <div class="accordion block active-block">
                                <div class="accordion-inner">
                                    <div class="acc-btn active">
                                        <span>01</span>
                                        <span>Trend Following Strategy</span>
                                        <div class="arrow"></div>
                                    </div>
                                    <div class="acc_body current">
                                        <div class="content">
                                            <p>This strategy identifies and follows market trends using moving averages and momentum indicators. Our AI enhances this with predictive analytics to enter trends early and exit before reversals.</p>
                                            <div class="row mt-40">
                                                <div class="col-md-4">
                                                    <h5>Key Indicators:</h5>
                                                    <ul>
                                                        <li>EMA Crossovers</li>
                                                        <li>RSI Momentum</li>
                                                        <li>MACD Signals</li>
                                                        <li>Volume Analysis</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Success Rate:</h5>
                                                    <div class="xb-item--token_progress ul_li mt-20">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <p class="mt-2">78% Success Rate</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Best For:</h5>
                                                    <ul>
                                                        <li>Bull Markets</li>
                                                        <li>Established Trends</li>
                                                        <li>Medium-term Trading</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Strategy 2 -->
                            <div class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>02</span>
                                        <span>Mean Reversion Strategy</span>
                                        <div class="arrow"></div>
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <p>Capitalizes on price returning to its average after extreme movements. Our AI calculates optimal entry/exit points using statistical models and volatility analysis.</p>
                                            <div class="row mt-40">
                                                <div class="col-md-4">
                                                    <h5>Key Indicators:</h5>
                                                    <ul>
                                                        <li>Bollinger Bands</li>
                                                        <li>Standard Deviation</li>
                                                        <li>Statistical Models</li>
                                                        <li>Volatility Index</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Success Rate:</h5>
                                                    <div class="xb-item--token_progress ul_li mt-20">
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <p class="mt-2">82% Success Rate</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Best For:</h5>
                                                    <ul>
                                                        <li>Range-bound Markets</li>
                                                        <li>High Volatility Periods</li>
                                                        <li>Short-term Trading</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Strategy 3 -->
                            <div class="accordion block">
                                <div class="accordion-inner">
                                    <div class="acc-btn">
                                        <span>03</span>
                                        <span>Arbitrage Strategy</span>
                                        <div class="arrow"></div>
                                    </div>
                                    <div class="acc_body">
                                        <div class="content">
                                            <p>Exploits price differences across exchanges using high-frequency trading algorithms. Our AI monitors multiple exchanges simultaneously for arbitrage opportunities.</p>
                                            <div class="row mt-40">
                                                <div class="col-md-4">
                                                    <h5>Key Indicators:</h5>
                                                    <ul>
                                                        <li>Price Discrepancies</li>
                                                        <li>Exchange Rates</li>
                                                        <li>Transaction Speed</li>
                                                        <li>Liquidity Analysis</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Success Rate:</h5>
                                                    <div class="xb-item--token_progress ul_li mt-20">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    <p class="mt-2">91% Success Rate</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5>Best For:</h5>
                                                    <ul>
                                                        <li>Multi-exchange Trading</li>
                                                        <li>High-Frequency Trading</li>
                                                        <li>Low-risk Opportunities</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- strategy showcase section end -->

    <!-- tools & calculators section start -->
    <section class="token pt-100 pb-100 bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h2 class="title">Trading Tools & Calculators</h2>
                        <p class="mt-30">Essential tools to analyze, calculate, and optimize your trading performance</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="token-distribut">
                        <h3 class="xb-item--title">Risk Calculator</h3>
                        <p class="mb-40">Calculate optimal position sizes and risk parameters based on your trading capital and risk tolerance.</p>
                        
                        <div class="xb-item--field mb-20">
                            <input type="number" placeholder="Trading Capital ($)" id="capital">
                        </div>
                        <div class="xb-item--field mb-20">
                            <input type="number" placeholder="Risk Percentage (%)" id="riskPercent" value="2">
                        </div>
                        <div class="xb-item--field mb-20">
                            <input type="number" placeholder="Stop Loss Distance (%)" id="stopLoss" value="5">
                        </div>
                        
                        <div class="xb-item--contact-btn">
                            <button class="them-btn" id="calculateRisk">
                                <span class="btn_label" data-text="Calculate Risk">Calculate Risk</span>
                                <span class="btn_icon">
                                    <i class="fas fa-calculator"></i>
                                </span>
                            </button>
                        </div>
                        
                        <div class="mt-40" id="riskResult" style="display: none;">
                            <h5 class="text-white">Recommended Position Size: <span id="positionSize" class="text-primary">$0</span></h5>
                            <p class="mt-2">Maximum Risk Amount: <span id="riskAmount" class="text-primary">$0</span></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="token-sale">
                        <h3 class="xb-item--title">Profit/Loss Simulator</h3>
                        <p class="mb-40">Simulate different trading scenarios to understand potential outcomes before executing trades.</p>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="xb-item--field mb-20">
                                    <input type="number" placeholder="Entry Price ($)" id="entryPrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="xb-item--field mb-20">
                                    <input type="number" placeholder="Exit Price ($)" id="exitPrice">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="xb-item--field mb-20">
                                    <input type="number" placeholder="Position Size ($)" id="simPosition">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="xb-item--field mb-20">
                                    <input type="number" placeholder="Trading Fees (%)" id="fees" value="0.1">
                                </div>
                            </div>
                        </div>
                        
                        <div class="xb-item--contact-btn">
                            <button class="them-btn" id="calculatePnl">
                                <span class="btn_label" data-text="Calculate P&L">Calculate P&L</span>
                                <span class="btn_icon">
                                    <i class="fas fa-chart-bar"></i>
                                </span>
                            </button>
                        </div>
                        
                        <div class="mt-40" id="pnlResult" style="display: none;">
                            <h5 class="text-white">Profit/Loss: <span id="pnlAmount" class="text-primary">$0</span></h5>
                            <p class="mt-2">Percentage Return: <span id="pnlPercent" class="text-primary">0%</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tools & calculators section end -->

    <!-- community & support section start -->
    <section class="team pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h2 class="title">Community & Expert Support</h2>
                        <p class="mt-30">Join our thriving community and get support from trading experts</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="xb-event xb-hover-zoom">
                        <div class="xb-item--img">
                            <img src="<?php echo e(asset('public/images/education/community-forum.jpg')); ?>" alt="Trading Community Forum">
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--location">
                                <i class="fas fa-users text-primary"></i>
                                <span>Active Community</span>
                            </div>
                            <h3 class="xb-item--title">Trading Community Forum</h3>
                            <p>Connect with 10,000+ traders, share strategies, and get real-time market insights.</p>
                            <div class="xb-item--event-btn">
                                <a href="#!" class="them-btn btn-transparent">
                                    <span class="btn_label" data-text="Join Forum">Join Forum</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="xb-event xb-hover-zoom">
                        <div class="xb-item--img">
                            <img src="<?php echo e(asset('public/images/education/expert-sessions.jpg')); ?>" alt="Live Expert Sessions">
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--location">
                                <i class="fas fa-video text-primary"></i>
                                <span>Weekly Sessions</span>
                            </div>
                            <h3 class="xb-item--title">Live Expert Sessions</h3>
                            <p>Weekly live sessions with professional traders and market analysts.</p>
                            <div class="xb-item--date-time1">
                                <div class="xb-item--date">
                                    <i class="far fa-calendar text-primary"></i>
                                    <span>Every Wednesday</span>
                                </div>
                                <div class="xb-item--time ml-30">
                                    <i class="far fa-clock text-primary"></i>
                                    <span>7:00 PM UTC</span>
                                </div>
                            </div>
                            <div class="xb-item--event-btn">
                                <a href="#!" class="them-btn btn-transparent">
                                    <span class="btn_label" data-text="View Schedule">View Schedule</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="xb-event xb-hover-zoom">
                        <div class="xb-item--img">
                            <img src="<?php echo e(asset('public/images/education/mentorship.jpg')); ?>" alt="1-on-1 Mentorship">
                        </div>
                        <div class="xb-item--holder">
                            <div class="xb-item--location">
                                <i class="fas fa-graduation-cap text-primary"></i>
                                <span>Personal Guidance</span>
                            </div>
                            <h3 class="xb-item--title">1-on-1 Mentorship</h3>
                            <p>Get personalized coaching from experienced traders to accelerate your learning.</p>
                            <div class="xb-item--event-btn">
                                <a href="#!" class="them-btn btn-transparent">
                                    <span class="btn_label" data-text="Apply Now">Apply Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- community & support section end -->

    <!-- CTA section start -->
    <section class="feature-bottom pt-100 pb-100 bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="xb-freatue-crypto bg_img" data-background="<?php echo e(asset('public/images/cta-bg.jpg')); ?>">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="xb-item--holder">
                                    <h3 class="xb-item--title">Ready to Master Automated Trading?</h3>
                                    <p class="xb-item--content">Join thousands of successful traders who have transformed their trading with our educational resources and AI-powered tools.</p>
                                    <div class="hero__btn mt-50">
                                        <a href="#!" class="them-btn">
                                            <span class="btn_label" data-text="Get Started Free">Get Started Free</span>
                                            <span class="btn_icon">
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="#!" class="them-btn btn-transparent ml-20">
                                            <span class="btn_label" data-text="Schedule Demo">Schedule Demo</span>
                                            <span class="btn_icon">
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="xb-item--img">
                                    <img src="<?php echo e(asset('public/images/education/cta-image.png')); ?>" alt="Start Learning">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
$(document).ready(function() {
    // Risk Calculator
    $('#calculateRisk').on('click', function() {
        const capital = parseFloat($('#capital').val()) || 0;
        const riskPercent = parseFloat($('#riskPercent').val()) || 2;
        const stopLoss = parseFloat($('#stopLoss').val()) || 5;
        
        if (capital > 0) {
            const riskAmount = capital * (riskPercent / 100);
            const positionSize = riskAmount / (stopLoss / 100);
            
            $('#riskAmount').text('$' + riskAmount.toFixed(2));
            $('#positionSize').text('$' + positionSize.toFixed(2));
            $('#riskResult').slideDown();
        }
    });
    
    // P&L Calculator
    $('#calculatePnl').on('click', function() {
        const entryPrice = parseFloat($('#entryPrice').val()) || 0;
        const exitPrice = parseFloat($('#exitPrice').val()) || 0;
        const positionSize = parseFloat($('#simPosition').val()) || 0;
        const fees = parseFloat($('#fees').val()) || 0.1;
        
        if (entryPrice > 0 && exitPrice > 0 && positionSize > 0) {
            const units = positionSize / entryPrice;
            const grossPnl = (exitPrice - entryPrice) * units;
            const feeAmount = positionSize * (fees / 100) * 2; // Entry and exit fees
            const netPnl = grossPnl - feeAmount;
            const pnlPercent = (netPnl / positionSize) * 100;
            
            $('#pnlAmount').text('$' + netPnl.toFixed(2));
            $('#pnlPercent').text(pnlPercent.toFixed(2) + '%');
            $('#pnlResult').slideDown();
        }
    });
    
    // Accordion functionality
    $('.acc-btn').on('click', function() {
        var $this = $(this);
        var $parent = $this.parent();
        var $content = $parent.find('.acc_body');
        
        if ($parent.hasClass('active-block')) {
            $parent.removeClass('active-block');
            $content.slideUp();
            $this.removeClass('active');
        } else {
            $('.accordion.block').removeClass('active-block');
            $('.acc_body').slideUp();
            $('.acc-btn').removeClass('active');
            
            $parent.addClass('active-block');
            $content.slideDown();
            $this.addClass('active');
        }
    });
    
    // Testimonial Slider
    var testimonialSlider = new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/education.blade.php ENDPATH**/ ?>
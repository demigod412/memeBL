<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>

 <style>
        /* Custom enhancements */
        .section-spacing {
            padding: 80px 0;
        }
        
        @media (max-width: 768px) {
            .section-spacing {
                padding: 60px 0;
            }
        }
        
        .feature-card {
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 20px;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .strategy-card {
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            position: relative;
            z-index: 1;
        }
        
        .strategy-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(45, 217, 143, 0.1) 0%, rgba(74, 33, 239, 0.1) 100%);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .strategy-card:hover::before {
            opacity: 1;
        }
        
        .metric-card {
            padding: 40px 30px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .metric-card::before {
            content: '';
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            padding: 1px;
            border-radius: 20px;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: exclude;
            background: linear-gradient(135deg, #2dd98f 0%, #4a21ef 100%);
            z-index: -1;
            opacity: 0.2;
        }
        
        .hero-image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }
        
        .hero-image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(45, 217, 143, 0.3) 0%, rgba(74, 33, 239, 0.3) 100%);
            z-index: 1;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 50px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #2dd98f 0%, #4a21ef 100%);
            border-radius: 2px;
        }
        
        .process-step {
            position: relative;
            padding: 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.05);
            margin-bottom: 30px;
        }
        
        .process-step-number {
            position: absolute;
            top: -15px;
            left: 20px;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #2dd98f 0%, #4a21ef 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            color: white;
        }
        
        .cta-section {
            border-radius: 25px;
            overflow: hidden;
            position: relative;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #2dd98f 0%, #4a21ef 100%);
            opacity: 0.9;
            z-index: -1;
        }
        
        .security-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px 20px;
            border-radius: 50px;
            margin: 8px;
            transition: all 0.3s ease;
        }
        
        .security-badge:hover {
            background: rgba(45, 217, 143, 0.2);
            transform: translateY(-2px);
        }
        
        /* Improved spacing */
        .content-wrapper {
            padding: 30px 0;
        }
        
        .feature-icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 20px;
            background: rgba(45, 217, 143, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }
        
        .strategy-stats {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        /* Background overlay for sections with images */
        .section-with-bg {
            position: relative;
        }
        
        .section-with-bg .section-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: 1;
        }
        
        .section-with-bg .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(8, 11, 24, 0.85);
            z-index: 2;
        }
        
        .section-with-bg > .container {
            position: relative;
            z-index: 3;
        }
        
        /* Responsive improvements */
        @media (max-width: 768px) {
            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .hero-buttons .them-btn {
                width: 100%;
                margin: 5px 0;
            }
            
            .process-step {
                padding: 20px;
            }
            
            .feature-card {
                margin-bottom: 20px;
            }
            
            .security-badge {
                width: 100%;
                justify-content: center;
            }
            
            /* Remove parallax on mobile for better performance */
            .section-with-bg .section-bg {
                background-attachment: scroll !important;
            }
        }
        
        /* Animation enhancements */
        .wow-delay-1 { animation-delay: 0.2s; }
        .wow-delay-2 { animation-delay: 0.4s; }
        .wow-delay-3 { animation-delay: 0.6s; }
        .wow-delay-4 { animation-delay: 0.8s; }
    </style>

    <style>
        /* Premium Minimalist Additions */
        .hero-minimal {
            min-height: 70vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #080B18 0%, #0d0b33 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hero-minimal::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
            top: -200px;
            right: -100px;
        }
        
        .hero-minimal::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(74, 33, 239, 0.1) 0%, transparent 70%);
            bottom: -150px;
            left: -100px;
        }
        
        .section-minimal {
            padding: 100px 0;
            position: relative;
        }
        
        .section-minimal.bg-dark {
            background: #080B18;
        }
        
        .section-minimal.bg-light {
            background: #0d0b33;
        }
        
        .value-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2DD98F, #4a21ef);
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            border-color: rgba(45, 217, 143, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .value-card:hover::before {
            transform: translateX(0);
        }
        
        .value-icon {
            width: 70px;
            height: 70px;
            background: rgba(45, 217, 143, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #2DD98F;
        }
        
        .pillar-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 50px;
            position: relative;
        }
        
        .pillar-number {
            font-size: 48px;
            font-weight: 800;
            color: rgba(45, 217, 143, 0.2);
            margin-right: 30px;
            font-family: var(--font-heading);
            line-height: 1;
            min-width: 60px;
        }
        
        .pillar-content {
            flex: 1;
        }
        
        .divider {
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(45, 217, 143, 0.3), transparent);
            margin: 60px 0;
        }
        
        .quote-block {
            background: linear-gradient(135deg, rgba(45, 217, 143, 0.05), rgba(74, 33, 239, 0.05));
            border-left: 4px solid #2DD98F;
            padding: 40px;
            border-radius: 0 20px 20px 0;
            margin: 60px 0;
        }
        
        .stat-number {
            font-size: 48px;
            font-weight: 700;
            background: linear-gradient(135deg, #2DD98F, #4a21ef);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #2DD98F, #4a21ef);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .simple-accordion {
            background: transparent;
            border: none;
        }
        
        .simple-accordion .accordion-item {
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 0;
        }
        
        .simple-accordion .accordion-button {
            background: transparent;
            color: #fff;
            font-size: 22px;
            padding: 25px 0;
            border: none;
            box-shadow: none;
        }
        
        .simple-accordion .accordion-button:not(.collapsed) {
            color: #2DD98F;
            background: transparent;
        }
        
        .simple-accordion .accordion-button::after {
            filter: invert(1);
        }
        
        .simple-accordion .accordion-body {
            padding: 0 0 25px 0;
            color: rgba(255, 255, 255, 0.8);
            font-size: 18px;
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            .section-minimal {
                padding: 60px 0;
            }
            
            .value-card {
                padding: 30px;
            }
            
            .pillar-item {
                flex-direction: column;
            }
            
            .pillar-number {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
    </style>

    <section class="hero-minimal">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">What We Stand For</h1>
                    <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8); font-size: 22px;">
                        Democratizing algorithmic trading through transparency, innovation, and accessibility.
                    </p>
                    <div class="mt-5">
                        <span class="badge bg-primary px-4 py-2 me-2" style="background: rgba(45, 217, 143, 0.2); color: #2DD98F;">Transparent</span>
                        <span class="badge bg-primary px-4 py-2 me-2" style="background: rgba(74, 33, 239, 0.2); color: #4a21ef;">Innovative</span>
                        <span class="badge bg-primary px-4 py-2" style="background: rgba(45, 217, 143, 0.2); color: #2DD98F;">Accessible</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Bot Trading - With Background Image -->
    <section class="section-spacing section-with-bg" id="what-is-bot-trading">
        <div class="section-bg" style="background-image: url('<?php echo e(asset("public/images/about.jpg")); ?>');"></div>
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="position-relative wow fadeInLeft">
                        <img src="<?php echo e(asset('public/images/about.jpg')); ?>" alt="Automated Bot Trading" class="img-fluid rounded-3">
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary" style="opacity: 0.1; border-radius: 12px;"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-4 wow fadeInRight">
                        <h2 class="section-title mb-4">What is Automated Bot Trading?</h2>
                        <p class="mb-4 lead">
                            Automated bot trading uses sophisticated algorithms and artificial intelligence to execute trades in cryptocurrency markets 24/7, eliminating emotional decision-making and human error.
                        </p>
                        <div class="row g-3 mt-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="feature-icon-wrapper me-3 flex-shrink-0">
                                        <i class="fas fa-bolt text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-2">Lightning Fast</h5>
                                        <p class="small mb-0">Execute trades in milliseconds</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="feature-icon-wrapper me-3 flex-shrink-0">
                                        <i class="fas fa-brain text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-2">AI-Powered</h5>
                                        <p class="small mb-0">Advanced pattern recognition</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="feature-icon-wrapper me-3 flex-shrink-0">
                                        <i class="fas fa-shield-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-2">Risk Managed</h5>
                                        <p class="small mb-0">Automated risk controls</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="feature-icon-wrapper me-3 flex-shrink-0">
                                        <i class="fas fa-chart-line text-primary"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-2">Data-Driven</h5>
                                        <p class="small mb-0">Real-time market analysis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works - Improved -->
    <section class="section-spacing" id="how-it-works">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">How Our Trading Bot Works</h2>
                    <p class="lead">A seamless four-step process to automated trading success</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step wow fadeInUp">
                        <div class="process-step-number">1</div>
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-link fa-2x text-primary"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3 text-center">Connect Exchange</h4>
                        <p class="text-center mb-0">Securely connect your preferred cryptocurrency exchange via API keys with read-only permissions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step wow fadeInUp" data-wow-delay="0.2s">
                        <div class="process-step-number">2</div>
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-sliders-h fa-2x text-primary"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3 text-center">Configure Strategy</h4>
                        <p class="text-center mb-0">Choose from pre-built strategies or customize your own parameters with our intuitive interface.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step wow fadeInUp" data-wow-delay="0.4s">
                        <div class="process-step-number">3</div>
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-play-circle fa-2x text-primary"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3 text-center">Activate Bot</h4>
                        <p class="text-center mb-0">Set your investment amount and activate the trading bot. Your capital never leaves your exchange.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-step wow fadeInUp" data-wow-delay="0.6s">
                        <div class="process-step-number">4</div>
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-chart-bar fa-2x text-primary"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3 text-center">Monitor & Optimize</h4>
                        <p class="text-center mb-0">Track performance in real-time and adjust strategies based on comprehensive analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features - With Background Image -->
    <section class="section-spacing section-with-bg" id="features">
        <div class="section-bg" style="background-image: url('<?php echo e(asset('public/images/about.jpg')); ?>');"></div>
       
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Advanced Trading Features</h2>
                    <p class="lead">Powerful tools and capabilities for sophisticated trading</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 wow fadeInUp">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-brain fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">AI Market Analysis</h4>
                        <p class="mb-0">Our AI algorithms analyze market trends, sentiment, and historical data to predict price movements with high accuracy using machine learning models.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-shield-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Risk Management</h4>
                        <p class="mb-0">Advanced risk controls including dynamic stop-loss, take-profit, and position sizing algorithms to protect your capital in volatile markets.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-exchange-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Multi-Exchange Support</h4>
                        <p class="mb-0">Trade across 15+ exchanges simultaneously to take advantage of arbitrage opportunities and always get the best available prices.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 wow fadeInUp">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Backtesting Engine</h4>
                        <p class="mb-0">Test your strategies against 5+ years of historical data to optimize performance before going live with real funds. Validate with precision.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Real-time Analytics</h4>
                        <p class="mb-0">Comprehensive dashboard with real-time performance metrics, P&L tracking, trade history, and customizable reports for informed decisions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-icon-wrapper mb-4">
                            <i class="fas fa-code fa-2x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Custom Scripting</h4>
                        <p class="mb-0">Advanced users can create custom trading scripts using our Python-based scripting environment with full API access and documentation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trading Strategies - Improved -->
    <section class="section-spacing" id="strategies">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Popular Trading Strategies</h2>
                    <p class="lead">Choose from our library of proven trading strategies</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="strategy-card p-4 wow fadeInLeft">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h4 class="fw-bold mb-0">Trend Following</h4>
                            <span class="badge bg-primary rounded-pill">78% Success</span>
                        </div>
                        <div class="strategy-stats">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">15%</div>
                                    <small>Avg. ROI</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">Medium</div>
                                    <small>Risk Level</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">2-5</div>
                                    <small>Trades/Day</small>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Identifies and follows established market trends</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Uses moving averages and momentum indicators</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Best for trending markets with clear direction</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Includes automatic trend reversal detection</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="strategy-card p-4 wow fadeInRight">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h4 class="fw-bold mb-0">Mean Reversion</h4>
                            <span class="badge bg-primary rounded-pill">82% Success</span>
                        </div>
                        <div class="strategy-stats">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">12%</div>
                                    <small>Avg. ROI</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">Low</div>
                                    <small>Risk Level</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">5-10</div>
                                    <small>Trades/Day</small>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Capitalizes on price returning to average levels</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Uses Bollinger Bands and RSI indicators</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Ideal for ranging markets</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Includes volatility-based position sizing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="strategy-card p-4 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h4 class="fw-bold mb-0">Arbitrage Trading</h4>
                            <span class="badge bg-primary rounded-pill">95% Success</span>
                        </div>
                        <div class="strategy-stats">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">5-8%</div>
                                    <small>Avg. ROI</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">Very Low</div>
                                    <small>Risk Level</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">20-50</div>
                                    <small>Trades/Day</small>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Exploits price differences across exchanges</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Requires multi-exchange connectivity</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Low risk, consistent returns</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> High-frequency execution capability</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="strategy-card p-4 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h4 class="fw-bold mb-0">Market Making</h4>
                            <span class="badge bg-primary rounded-pill">88% Success</span>
                        </div>
                        <div class="strategy-stats">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">10-18%</div>
                                    <small>Avg. ROI</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">Medium-High</div>
                                    <small>Risk Level</small>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="fw-bold text-primary">100+</div>
                                    <small>Trades/Day</small>
                                </div>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Provides liquidity to the market</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Profits from bid-ask spreads</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Requires substantial capital</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Advanced order book analysis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Security - With Background Image -->
    <section class="section-spacing section-with-bg" id="security">
        <div class="section-bg" style="background-image: url('<?php echo e(asset('public/images/bg-security.jpg')); ?>');"></div>
 
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="wow fadeInLeft">
                        <h2 class="section-title mb-4">Bank-Grade Security</h2>
                        <p class="lead mb-4">
                            Your security is our top priority. We implement military-grade encryption and multiple layers of protection to ensure your funds and data remain absolutely safe.
                        </p>
                        <div class="d-flex flex-wrap mt-4">
                            <div class="security-badge">
                                <i class="fas fa-lock text-primary me-2"></i>
                                <span>End-to-End Encryption</span>
                            </div>
                            <div class="security-badge">
                                <i class="fas fa-key text-primary me-2"></i>
                                <span>Read-Only API Keys</span>
                            </div>
                            <div class="security-badge">
                                <i class="fas fa-mobile-alt text-primary me-2"></i>
                                <span>Two-Factor Authentication</span>
                            </div>
                            <div class="security-badge">
                                <i class="fas fa-database text-primary me-2"></i>
                                <span>Cold Storage Wallets</span>
                            </div>
                            <div class="security-badge">
                                <i class="fas fa-search text-primary me-2"></i>
                                <span>Regular Security Audits</span>
                            </div>
                            <div class="security-badge">
                                <i class="fas fa-shield-virus text-primary me-2"></i>
                                <span>DDoS Protection</span>
                            </div>
                        </div>
                        <div class="mt-5 pt-3">
                            <div class="alert alert-dark border-primary">
                                <i class="fas fa-info-circle text-primary me-2"></i>
                                <strong>Important:</strong> Funds never leave your exchange account. Our bots only have trading permissions, not withdrawal rights.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wow fadeInRight">
                        <div class="xb-inner bg_img" data-background="<?php echo e(asset('public/images/form_bg.png')); ?>" style="min-height: 400px;">
                            <div class="xb-item--holder h-100 d-flex flex-column justify-content-center align-items-center p-5">
                                <div class="feature-icon-wrapper mb-4" style="background: rgba(255, 255, 255, 0.2);">
                                    <i class="fas fa-shield-alt fa-3x text-white"></i>
                                </div>
                                <h3 class="xb-item--title text-white text-center mb-3">Security First Approach</h3>
                                <p class="text-white-50 text-center mb-4">Multiple layers of protection for your assets</p>
                                <div class="w-100 max-w-400 mx-auto">
                                    <div class="xb-item--token_progress ul_li mb-3">
                                        <span style="width: 100%"></span>
                                    </div>
                                    <div class="d-flex justify-content-between text-white small">
                                        <span>Security Score</span>
                                        <span>100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Performance Metrics - With Background Image -->
    <section class="section-spacing section-with-bg" id="metrics">
        <div class="section-bg" style="background-image: url('<?php echo e(asset('public/images/bg-metrics.jpg')); ?>');"></div>
   
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Proven Performance Metrics</h2>
                    <p class="lead">Real results from our global trading community</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="metric-card text-center wow fadeInUp">
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h3 class="fw-bold display-5 mb-2">
                            <span class="odometer" data-count="15.2">0</span><span class="suffix">%</span>
                        </h3>
                        <p class="fw-bold mb-0">Average Monthly ROI</p>
                        <small class="text-muted">Across all strategies</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="metric-card text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h3 class="fw-bold display-5 mb-2">
                            <span class="odometer" data-count="42">0</span><span class="suffix">K+</span>
                        </h3>
                        <p class="fw-bold mb-0">Active Traders</p>
                        <small class="text-muted">Global community</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="metric-card text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                        </div>
                        <h3 class="fw-bold display-5 mb-2">
                            <span class="odometer" data-count="98.7">0</span><span class="suffix">%</span>
                        </h3>
                        <p class="fw-bold mb-0">Uptime Reliability</p>
                        <small class="text-muted">Last 12 months</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="metric-card text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-icon-wrapper mx-auto mb-4">
                            <i class="fas fa-money-bill-wave fa-2x text-primary"></i>
                        </div>
                        <h3 class="fw-bold display-5 mb-2">
                            <span class="odometer" data-count="3.2">0</span><span class="suffix">B+</span>
                        </h3>
                        <p class="fw-bold mb-0">Total Volume Traded</p>
                        <small class="text-muted">Lifetime volume</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Improved -->
    <section class="section-spacing" id="getting-started">
        <div class="container">
            <div class="cta-section p-5 wow fadeInUp">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-5 fw-bold text-white mb-3">Ready to Automate Your Trading?</h2>
                        <p class="lead text-white mb-4">Join thousands of successful traders who have automated their cryptocurrency trading with Meme BULL.</p>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center text-white mb-2">
                                    <i class="fas fa-check-circle me-3"></i>
                                    <span>No trading experience required</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center text-white mb-2">
                                    <i class="fas fa-check-circle me-3"></i>
                                    <span>Start with as little as $100</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center text-white mb-2">
                                    <i class="fas fa-check-circle me-3"></i>
                                    <span>7-day free trial available</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center text-white mb-2">
                                    <i class="fas fa-check-circle me-3"></i>
                                    <span>24/7 customer support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                        <a href="#!" class="them-btn btn-light" style="background: white; color: #080b18;">
                            <span class="btn_label" data-text="Start Free Trial">Start Free Trial</span>
                            <span class="btn_icon">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="#080b18"></path>
                                </svg>
                            </span>
                        </a>
                        <p class="text-white-50 mt-3 mb-0">No credit card required</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ - With Background Image -->
    <section class="section-spacing section-with-bg" id="faq">
        <div class="section-bg" style="background-image: url('<?php echo e(asset('public/images/bg-faq.jpg')); ?>');"></div>
         <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Frequently Asked Questions</h2>
                    <p class="lead">Get answers to common questions about automated trading</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion_box">
                        <div class="accordion block active-block wow fadeInUp">
                            <div class="accordion-inner">
                                <div class="acc-btn active">
                                    <span>Is automated trading safe?</span>
                                </div>
                                <div class="acc_body current">
                                    <div class="content">
                                        <p>Yes, when implemented correctly. Our platform uses read-only API keys, meaning bots can only trade, not withdraw funds. We also implement multiple security layers including military-grade encryption, 2FA, and regular security audits. However, all trading carries risk, and past performance doesn't guarantee future results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion block wow fadeInUp" data-wow-delay="0.1s">
                            <div class="accordion-inner">
                                <div class="acc-btn">
                                    <span>How much capital do I need to start?</span>
                                </div>
                                <div class="acc_body">
                                    <div class="content">
                                        <p>You can start with as little as $100, though we recommend a minimum of $500 for optimal strategy performance. The amount depends on your chosen strategy and risk tolerance. Our platform allows you to start small and scale up as you gain confidence and see results.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion block wow fadeInUp" data-wow-delay="0.2s">
                            <div class="accordion-inner">
                                <div class="acc-btn">
                                    <span>Do I need coding or trading experience?</span>
                                </div>
                                <div class="acc_body">
                                    <div class="content">
                                        <p>No coding experience is required for our pre-built strategies. The platform is designed for both beginners and advanced traders. Beginners can use our one-click strategies with recommended settings, while advanced users can customize parameters or create their own scripts using our intuitive interface and Python SDK.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion block wow fadeInUp" data-wow-delay="0.3s">
                            <div class="accordion-inner">
                                <div class="acc-btn">
                                    <span>What exchanges do you support?</span>
                                </div>
                                <div class="acc_body">
                                    <div class="content">
                                        <p>We support all major exchanges including Binance, Coinbase Pro, Kraken, KuCoin, Bitfinex, and 10+ others. New exchanges are regularly added based on user demand, liquidity requirements, and API stability. You can trade across multiple exchanges simultaneously.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion block wow fadeInUp" data-wow-delay="0.4s">
                            <div class="accordion-inner">
                                <div class="acc-btn">
                                    <span>Can I run multiple strategies at once?</span>
                                </div>
                                <div class="acc_body">
                                    <div class="content">
                                        <p>Yes! Our platform allows you to run multiple trading strategies simultaneously on the same or different exchanges. Each strategy operates independently with its own risk parameters, capital allocation, and performance tracking. You can also allocate different percentages of your capital to different strategies.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Initialize animations
    new WOW().init();
    
    // Initialize odometer counters
    $(document).ready(function() {
        $('.odometer').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            $({ countNum: 0 }).animate({ countNum: countTo }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
        
        // Initialize FAQ accordion
        $('.acc-btn').on('click', function() {
            var $this = $(this);
            var $parent = $this.parent();
            var $content = $this.next('.acc_body');
            
            if ($parent.hasClass('active-block')) {
                $parent.removeClass('active-block');
                $content.slideUp(300);
            } else {
                $('.accordion.block').removeClass('active-block');
                $('.acc_body').slideUp(300);
                $parent.addClass('active-block');
                $content.slideDown(300);
            }
        });
        
        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/about.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Frequently Asked Questions'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

 <style>
        /* Custom styles to fix overlapping and improve design */
        .features-hero {
            min-height: 80vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        
        .features-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(8, 11, 24, 0.95) 0%, rgba(13, 11, 51, 0.9) 100%);
            z-index: 1;
        }
        
        .features-hero .container {
            position: relative;
            z-index: 2;
        }
        
        .feature-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(45, 217, 143, 0.1);
            overflow: hidden;
            position: relative;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(45, 217, 143, 0.3);
            box-shadow: 0 20px 40px rgba(45, 217, 143, 0.15);
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--color-primary), #4D57FF, #1BB8FF);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.6s ease;
        }
        
        .feature-card:hover::before {
            transform: scaleX(1);
        }
        
        .comparison-table {
            background: rgba(13, 11, 51, 0.5);
            border-radius: 15px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .comparison-row {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: background-color 0.3s ease;
        }
        
        .comparison-row:hover {
            background-color: rgba(45, 217, 143, 0.05);
        }
        
        .comparison-row:last-child {
            border-bottom: none;
        }
        
        .comparison-feature {
            flex: 2;
            font-weight: 600;
            color: var(--color-white);
        }
        
        .comparison-value {
            flex: 1;
            text-align: center;
            padding: 0 15px;
        }
        
        .feature-icon-wrapper {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: linear-gradient(135deg, rgba(45, 217, 143, 0.1), rgba(77, 87, 255, 0.1));
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon-wrapper {
            background: linear-gradient(135deg, rgba(45, 217, 143, 0.2), rgba(77, 87, 255, 0.2));
            transform: scale(1.1);
        }
        
        .integration-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }
        
        .integration-item {
            background: rgba(13, 11, 51, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .integration-item:hover {
            transform: translateY(-5px);
            border-color: var(--color-primary);
            box-shadow: 0 10px 20px rgba(45, 217, 143, 0.1);
        }
        
        .performance-metric {
            text-align: center;
            padding: 30px;
            background: rgba(13, 11, 51, 0.3);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .performance-metric:hover {
            background: rgba(45, 217, 143, 0.05);
            border-color: var(--color-primary);
        }
        
        .progress-container {
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
            margin: 20px 0;
        }
        
        .progress-fill {
            height: 100%;
            border-radius: 4px;
            transition: width 1.5s ease-in-out;
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--color-primary), #4D57FF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            .comparison-row {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .comparison-feature, .comparison-value {
                width: 100%;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .integration-grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 20px;
            }
        }
        
        /* Animation classes */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .stagger-delay-1 { transition-delay: 0.1s; }
        .stagger-delay-2 { transition-delay: 0.2s; }
        .stagger-delay-3 { transition-delay: 0.3s; }
        .stagger-delay-4 { transition-delay: 0.4s; }
        .stagger-delay-5 { transition-delay: 0.5s; }
        
        /* Fix for odometer positioning */
        .xb-feature-item {
            position: relative;
            overflow: hidden;
        }
        
        .xb-feature-item .title {
            min-height: 72px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Enhanced CTA section */
        .enhanced-cta {
            background: linear-gradient(135deg, rgba(13, 11, 51, 0.9), rgba(8, 11, 24, 0.9));
            border-radius: 20px;
            padding: 60px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(45, 217, 143, 0.2);
        }
        
        .enhanced-cta::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
            z-index: 0;
        }
        
        .enhanced-cta > * {
            position: relative;
            z-index: 1;
        }
    </style>



  <!-- Hero Section -->
    <section class="features-hero pt-150 pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-4 fw-bold mb-4">Revolutionary <span class="text-primary">AI-Powered</span> Trading Technology</h1>
                    <p class="lead mb-5">Our platform combines cutting-edge artificial intelligence with institutional-grade trading algorithms to deliver unprecedented performance and reliability in automated crypto trading.</p>
                    
                    <div class="row justify-content-center mt-60">
                        <div class="col-md-3 col-6 mb-4">
                            <div class="xb-feature-item">
                                <h2 class="title odometer" data-count="99.9">0</h2>
                                <span class="sub-title">Uptime</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="xb-feature-item">
                                <h2 class="title odometer" data-count="2.5">0</h2>
                                <span class="suffix">ms</span>
                                <span class="sub-title">Execution Speed</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="xb-feature-item">
                                <h2 class="title odometer" data-count="15">0</h2>
                                <span class="sub-title">AI Algorithms</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="xb-feature-item">
                                <h2 class="title odometer" data-count="50">0</h2>
                                <span class="suffix">+</span>
                                <span class="sub-title">Strategies</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Features Grid -->
    <section class="pt-100 pb-100 bg-dark">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">Comprehensive Feature Suite</h2>
                    <p class="text-muted">Everything you need for successful automated trading in one powerful platform</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 rounded-3 h-100 fade-in-up">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-brain text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">AI Intelligence</h4>
                        <p class="text-muted mb-4">Advanced machine learning algorithms analyze market patterns and adapt strategies in real-time.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Predictive Analytics</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Sentiment Analysis</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Adaptive Learning</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 rounded-3 h-100 fade-in-up stagger-delay-1">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-chart-line text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Trading Algorithms</h4>
                        <p class="text-muted mb-4">50+ proven trading strategies developed by quantitative analysts and institutional traders.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Market Making</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Arbitrage Strategies</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Trend Following</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 rounded-3 h-100 fade-in-up stagger-delay-2">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-shield-alt text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Risk Management</h4>
                        <p class="text-muted mb-4">Multi-layered protection with automated stop-losses and real-time risk assessment.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Dynamic Stop-Loss</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Portfolio Protection</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Correlation Analysis</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 rounded-3 h-100 fade-in-up stagger-delay-1">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-exchange-alt text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Multi-Exchange</h4>
                        <p class="text-muted mb-4">Trade across 20+ cryptocurrency exchanges simultaneously from one unified interface.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Unified Dashboard</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Simultaneous Execution</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Global Support</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 rounded-3 h-100 fade-in-up stagger-delay-2">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-tachometer-alt text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Performance Analytics</h4>
                        <p class="text-muted mb-4">Comprehensive performance tracking with detailed metrics and real-time reporting.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Live Dashboard</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Historical Analysis</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Custom Reports</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card p-4 rounded-3 h-100 fade-in-up stagger-delay-3">
                        <div class="feature-icon-wrapper">
                            <i class="fas fa-lock text-primary fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Bank-Grade Security</h4>
                        <p class="text-muted mb-4">Military-grade encryption and multi-signature wallets protect your assets and data.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> 256-bit Encryption</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> 2FA Authentication</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Cold Storage</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Performance Metrics -->
    <section class="pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">Performance Metrics</h2>
                    <p class="text-muted">Real-time performance tracking and detailed analytics for informed decision making</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="performance-metric fade-in-up">
                        <div class="stat-number">78%</div>
                        <h5>Win Rate</h5>
                        <div class="progress-container">
                            <div class="progress-fill" style="width: 78%; background: var(--color-primary);"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="performance-metric fade-in-up stagger-delay-1">
                        <div class="stat-number">2.4%</div>
                        <h5>Avg Monthly Profit</h5>
                        <div class="progress-container">
                            <div class="progress-fill" style="width: 60%; background: #4D57FF;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="performance-metric fade-in-up stagger-delay-2">
                        <div class="stat-number">1.8</div>
                        <h5>Sharpe Ratio</h5>
                        <div class="progress-container">
                            <div class="progress-fill" style="width: 90%; background: #1BB8FF;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-6">
                    <div class="performance-metric fade-in-up stagger-delay-3">
                        <div class="stat-number">-5.2%</div>
                        <h5>Max Drawdown</h5>
                        <div class="progress-container">
                            <div class="progress-fill" style="width: 26%; background: #7bd6ff;"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-60">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="xb-feature-item text-center fade-in-up">
                        <h2 class="title odometer" data-count="5000">0</h2>
                        <span class="suffix">+</span>
                        <span class="sub-title">Active Traders</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="xb-feature-item text-center fade-in-up stagger-delay-1">
                        <h2 class="title odometer" data-count="2.1">0</h2>
                        <span class="suffix">B</span>
                        <span class="sub-title">Total Volume Traded</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="xb-feature-item text-center fade-in-up stagger-delay-2">
                        <h2 class="title odometer" data-count="150">0</h2>
                        <span class="suffix">M</span>
                        <span class="sub-title">Profits Generated</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section class="pt-100 pb-100 bg-dark">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">Why Choose Meme Bull?</h2>
                    <p class="text-muted">See how we outperform traditional trading platforms and other bot solutions</p>
                </div>
            </div>
            
            <div class="comparison-table">
                <div class="comparison-row">
                    <div class="comparison-feature">
                        <i class="fas fa-brain me-2 text-primary"></i> AI Intelligence
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-success">Advanced AI</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-secondary">Limited</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-warning">Basic AI</span>
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-feature">
                        <i class="fas fa-chart-line me-2 text-primary"></i> Strategy Variety
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-success">50+ Strategies</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-secondary">Manual Only</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-warning">5-10 Strategies</span>
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-feature">
                        <i class="fas fa-shield-alt me-2 text-primary"></i> Risk Management
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-success">Multi-Layered</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-warning">Basic Stops</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-warning">Basic Stops</span>
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-feature">
                        <i class="fas fa-tachometer-alt me-2 text-primary"></i> Execution Speed
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-success">2.5ms</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-secondary">100-500ms</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-warning">10-50ms</span>
                    </div>
                </div>
                
                <div class="comparison-row">
                    <div class="comparison-feature">
                        <i class="fas fa-headset me-2 text-primary"></i> Support
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-success">24/7 Premium</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-warning">Business Hours</span>
                    </div>
                    <div class="comparison-value">
                        <span class="badge bg-secondary">Limited</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integration Section -->
    <section class="pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center mb-60">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-4">Seamless Integration</h2>
                    <p class="text-muted">Connect with your favorite tools and exchanges effortlessly</p>
                </div>
            </div>
            
            <div class="integration-grid">
                <div class="integration-item fade-in-up">
                    <i class="fab fa-bitcoin fa-3x mb-3 text-primary"></i>
                    <h6>Binance</h6>
                </div>
                <div class="integration-item fade-in-up stagger-delay-1">
                    <i class="fab fa-coinbase fa-3x mb-3 text-primary"></i>
                    <h6>Coinbase</h6>
                </div>
                <div class="integration-item fade-in-up stagger-delay-2">
                    <i class="fas fa-exchange-alt fa-3x mb-3 text-primary"></i>
                    <h6>Kraken</h6>
                </div>
                <div class="integration-item fade-in-up stagger-delay-3">
                    <i class="fas fa-chart-bar fa-3x mb-3 text-primary"></i>
                    <h6>TradingView</h6>
                </div>
                <div class="integration-item fade-in-up stagger-delay-1">
                    <i class="fab fa-ethereum fa-3x mb-3 text-primary"></i>
                    <h6>MetaMask</h6>
                </div>
                <div class="integration-item fade-in-up stagger-delay-2">
                    <i class="fas fa-wallet fa-3x mb-3 text-primary"></i>
                    <h6>Ledger</h6>
                </div>
                <div class="integration-item fade-in-up stagger-delay-3">
                    <i class="fab fa-slack fa-3x mb-3 text-primary"></i>
                    <h6>Slack</h6>
                </div>
                <div class="integration-item fade-in-up stagger-delay-4">
                    <i class="fas fa-plug fa-3x mb-3 text-primary"></i>
                    <h6>API Access</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced CTA Section -->
    <section class="pt-100 pb-100 bg-dark">
        <div class="container">
            <div class="enhanced-cta">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="mb-4">Ready to Experience Advanced Automated Trading?</h2>
                        <p class="mb-5">Join thousands of successful traders leveraging our AI-powered platform. Start with a free trial and see the difference for yourself.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#!" class="them-btn">
                                <span class="btn_label" data-text="Start Free Trial">Start Free Trial</span>
                                <span class="btn_icon">
                                    <i class="fas fa-rocket"></i>
                                </span>
                            </a>
                            <a href="#!" class="them-btn btn-transparent">
                                <span class="btn_label" data-text="Book Demo">Book Demo</span>
                                <span class="btn_icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mt-lg-0">
                        <div class="feature-icon-wrapper" style="width: 120px; height: 120px;">
                            <i class="fas fa-bolt text-primary fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
$(document).ready(function() {
    // Initialize odometers with proper configuration
    $('.odometer').each(function() {
        var $this = $(this);
        var count = $this.attr('data-count');
        var od = new Odometer({
            el: $this[0],
            value: 0,
            format: '(,ddd)',
            theme: 'minimal',
            animation: 'count'
        });
        
        // Use appear.js to trigger odometer when element comes into view
        $this.appear(function() {
            od.update(count);
        }, {accX: 0, accY: -100, one: true});
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
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
            }
        }
    });
    
    // Scroll animation for fade-in-up elements
    function animateOnScroll() {
        $('.fade-in-up').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('visible');
            }
        });
    }
    
    // Initial check
    animateOnScroll();
    
    // Check on scroll
    $(window).scroll(function() {
        animateOnScroll();
    });
    
    // Check on resize
    $(window).resize(function() {
        animateOnScroll();
    });
    
    // Feature card hover effects
    $('.feature-card').hover(
        function() {
            $(this).find('.feature-icon-wrapper').css('transform', 'scale(1.1) rotate(5deg)');
        },
        function() {
            $(this).find('.feature-icon-wrapper').css('transform', 'scale(1) rotate(0)');
        }
    );
    
    // Progress bar animation
    $('.progress-fill').each(function() {
        $(this).css('width', '0%');
    });
    
    $('.progress-container').appear(function() {
        var $progressBar = $(this).find('.progress-fill');
        var width = $progressBar.css('width');
        $progressBar.css('width', width);
    }, {accX: 0, accY: -100});
    
    // Active navigation highlighting
    var currentPage = window.location.pathname.split('/').pop();
    $('.main-menu ul li a').each(function() {
        var linkPage = $(this).attr('href');
        if (linkPage === currentPage) {
            $(this).closest('li').addClass('active');
        }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/features.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', 'Advanced Trading Features'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

<style>
    /* Premium Features Page Design */
    .features-hero {
        min-height: 70vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #080B18 0%, #0a0f28 100%);
        position: relative;
        overflow: hidden;
        padding: 100px 0;
    }
    
    .features-hero::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        top: -300px;
        right: -200px;
    }
    
    .features-hero::after {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(74, 33, 239, 0.1) 0%, transparent 70%);
        bottom: -250px;
        left: -150px;
    }
    
    .features-hero .container {
        position: relative;
        z-index: 2;
    }
    
    .gradient-badge {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.15), rgba(74, 33, 239, 0.15));
        border: 1px solid rgba(45, 217, 143, 0.3);
        color: #2DD98F;
        font-weight: 500;
        letter-spacing: 1px;
    }
    
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .feature-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }
    
    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #2DD98F, #4a21ef);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.6s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .feature-card:hover::before {
        transform: scaleX(1);
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        font-size: 28px;
        color: #2DD98F;
        transition: all 0.3s ease;
    }
    
    .feature-card:hover .feature-icon {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.2), rgba(74, 33, 239, 0.2));
        transform: scale(1.1) rotate(5deg);
    }
    
    .section-tag {
        display: inline-block;
        color: #2DD98F;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
        position: relative;
    }
    
    .section-tag::before {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 40px;
        height: 2px;
        background: #2DD98F;
    }
    
    .tech-stack-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin: 50px 0;
    }
    
    .tech-item {
        text-align: center;
        padding: 30px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .tech-item:hover {
        background: rgba(45, 217, 143, 0.05);
        transform: translateY(-5px);
    }
    
    .tech-icon {
        font-size: 40px;
        color: #2DD98F;
        margin-bottom: 20px;
    }
    
    .feature-showcase {
        background: linear-gradient(135deg, #0a0f28 0%, #080B18 100%);
        border-radius: 30px;
        padding: 80px;
        margin: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .feature-showcase::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.05), rgba(74, 33, 239, 0.05));
        z-index: 1;
    }
    
    .feature-showcase > .container {
        position: relative;
        z-index: 2;
    }
    
    .feature-detail-card {
        background: rgba(8, 11, 24, 0.8);
        border: 1px solid rgba(45, 217, 143, 0.1);
        border-radius: 20px;
        padding: 40px;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }
    
    .feature-detail-card:hover {
        border-color: rgba(45, 217, 143, 0.3);
        transform: translateX(10px);
    }
    
    .feature-list {
        list-style: none;
        padding: 0;
    }
    
    .feature-list li {
        padding: 15px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: center;
    }
    
    .feature-list li:last-child {
        border-bottom: none;
    }
    
    .feature-list i {
        color: #2DD98F;
        margin-right: 15px;
        font-size: 18px;
    }
    
    .stat-highlight {
        text-align: center;
        padding: 40px;
        background: rgba(45, 217, 143, 0.05);
        border-radius: 20px;
        border: 1px solid rgba(45, 217, 143, 0.1);
        margin: 20px 0;
    }
    
    .stat-number {
        font-size: 48px;
        font-weight: 700;
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 10px;
    }
    
    .exchange-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        margin: 40px 0;
    }
    
    .exchange-item {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .exchange-item:hover {
        background: rgba(45, 217, 143, 0.05);
        transform: translateY(-5px);
        border-color: rgba(45, 217, 143, 0.2);
    }
    
    .comparison-table {
        background: rgba(8, 11, 24, 0.8);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        overflow: hidden;
        margin: 60px 0;
    }
    
    .table-header {
        background: rgba(45, 217, 143, 0.1);
        padding: 25px;
        display: grid;
        grid-template-columns: 2fr repeat(3, 1fr);
        gap: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .table-row {
        padding: 25px;
        display: grid;
        grid-template-columns: 2fr repeat(3, 1fr);
        gap: 20px;
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: background-color 0.3s ease;
    }
    
    .table-row:hover {
        background: rgba(45, 217, 143, 0.05);
    }
    
    .table-row:last-child {
        border-bottom: none;
    }
    
    .value-badge {
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
    }
    
    .value-badge.success {
        background: rgba(45, 217, 143, 0.15);
        color: #2DD98F;
    }
    
    .value-badge.warning {
        background: rgba(255, 193, 7, 0.15);
        color: #ffc107;
    }
    
    .value-badge.secondary {
        background: rgba(108, 117, 125, 0.15);
        color: #6c757d;
    }
    
    .cta-section {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.1), rgba(74, 33, 239, 0.1));
        border-radius: 30px;
        padding: 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin: 100px 0;
    }
    
    .cta-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        z-index: 1;
    }
    
    .cta-section > * {
        position: relative;
        z-index: 2;
    }
    
    @media (max-width: 992px) {
        .feature-showcase,
        .cta-section {
            padding: 40px;
        }
        
        .feature-grid {
            grid-template-columns: 1fr;
        }
        
        .table-header,
        .table-row {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 15px;
        }
        
        .exchange-grid {
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        }
    }
    
    @media (max-width: 768px) {
        .features-hero {
            padding: 60px 0;
            min-height: auto;
        }
        
        .stat-number {
            font-size: 36px;
        }
        
        .tech-stack-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- Hero Section -->
<section class="features-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="gradient-badge px-4 py-2 mb-4">
                    <i class="fas fa-star me-2"></i>PREMIUM FEATURES
                </span>
                <h1 class="display-4 fw-bold mb-4">
                    Institutional-Grade <span class="gradient-text">Trading Technology</span>
                </h1>
                <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8); font-size: 22px;">
                    Powered by cutting-edge AI and machine learning algorithms that deliver consistent 
                    results in any market condition.
                </p>
               
            </div>
        </div>
    </div>
</section>

<!-- Core Features Grid -->
<section id="explore" class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">CORE TECHNOLOGY</span>
                <h2 class="display-5 fw-bold mb-4">Advanced Trading Engine</h2>
                <p class="text-muted">Built with proprietary algorithms that continuously learn and adapt to market dynamics</p>
            </div>
        </div>
        
        <div class="feature-grid">
            <!-- Feature 1 -->
            <div class="feature-card wow fadeInUp">
                <div class="feature-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Neural Network AI</h3>
                <p class="text-white-50 mb-4">
                    Deep learning models that analyze thousands of market signals in real-time, predicting trends with 87% accuracy.
                </p>
                <div class="feature-list">
                    <li><i class="fas fa-check"></i> Pattern recognition algorithms</li>
                    <li><i class="fas fa-check"></i> Sentiment analysis integration</li>
                    <li><i class="fas fa-check"></i> Adaptive learning system</li>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="feature-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Ultra-Fast Execution</h3>
                <p class="text-white-50 mb-4">
                    Sub-millisecond order execution across 15+ exchanges, ensuring you never miss profitable opportunities.
                </p>
                <div class="feature-list">
                    <li><i class="fas fa-check"></i> 2.5ms average execution</li>
                    <li><i class="fas fa-check"></i> Co-located servers</li>
                    <li><i class="fas fa-check"></i> Smart order routing</li>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Multi-Layer Security</h3>
                <p class="text-white-50 mb-4">
                    Military-grade encryption, read-only API access, and comprehensive risk management protocols.
                </p>
                <div class="feature-list">
                    <li><i class="fas fa-check"></i> AES-256 encryption</li>
                    <li><i class="fas fa-check"></i> 2FA authentication</li>
                    <li><i class="fas fa-check"></i> Regular security audits</li>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Exchange Support -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">INTEGRATION</span>
                <h2 class="display-5 fw-bold mb-4">Multi-Exchange Trading</h2>
                <p class="text-muted">Connect once, trade everywhere. Seamless integration with all major cryptocurrency exchanges.</p>
            </div>
        </div>
        
        <div class="exchange-grid">
            <div class="exchange-item">
                <i class="fab fa-btc fa-2x mb-3" style="color: #F7931A;"></i>
                <h5 class="fw-bold">Binance</h5>
            </div>
            <div class="exchange-item">
                <i class="fas fa-coins fa-2x mb-3" style="color: #0052FF;"></i>
                <h5 class="fw-bold">Coinbase Pro</h5>
            </div>
            <div class="exchange-item">
                <i class="fab fa-kraken fa-2x mb-3" style="color: #5846A5;"></i>
                <h5 class="fw-bold">Kraken</h5>
            </div>
            <div class="exchange-item">
                <i class="fas fa-exchange-alt fa-2x mb-3" style="color: #00A868;"></i>
                <h5 class="fw-bold">Kucoin</h5>
            </div>
            <div class="exchange-item">
                <i class="fas fa-chart-network fa-2x mb-3" style="color: #00A7E1;"></i>
                <h5 class="fw-bold">Bitfinex</h5>
            </div>
            <div class="exchange-item">
                <i class="fab fa-bitcoin fa-2x mb-3" style="color: #FFB100;"></i>
                <h5 class="fw-bold">Huobi</h5>
            </div>
            <div class="exchange-item">
                <i class="fas fa-project-diagram fa-2x mb-3" style="color: #00B4FF;"></i>
                <h5 class="fw-bold">OKX</h5>
            </div>
          
        </div>
    </div>
</section>

<!-- Feature Showcase -->
<section class="feature-showcase">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <span class="section-tag">ADVANCED FEATURES</span>
                <h2 class="display-5 fw-bold mb-4">Customizable Trading Strategies</h2>
                <p class="text-white-50 mb-5">
                    From simple DCA bots to complex arbitrage systems, our platform offers unparalleled flexibility in strategy creation and management.
                </p>
                
              
                
                <div class="feature-detail-card">
                    <h4 class="fw-bold mb-3">Arbitrage Detection</h4>
                    <p class="text-white-50 mb-0">
                        Real-time price monitoring across exchanges to identify and execute profitable arbitrage opportunities instantly.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="<?php echo e(asset('public/images/technology.png')); ?>" alt="Dashboard Preview" class="img-fluid rounded-3">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary" style="opacity: 0.1; border-radius: 12px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">COMPARISON</span>
                <h2 class="display-5 fw-bold mb-4">Why Meme Bull Stands Out</h2>
            </div>
        </div>
        
        <div class="comparison-table">
            <div class="table-header">
                <div class="fw-bold">Feature</div>
                <div class="fw-bold text-center">Meme Bull</div>
                <div class="fw-bold text-center">Traditional Platforms</div>
                <div class="fw-bold text-center">Other Bots</div>
            </div>
            
            <div class="table-row">
                <div>AI Intelligence Level</div>
                <div><span class="value-badge success">Advanced AI</span></div>
                <div><span class="value-badge secondary">Manual Only</span></div>
                <div><span class="value-badge warning">Basic AI</span></div>
            </div>
            
            <div class="table-row">
                <div>Strategy Variety</div>
                <div><span class="value-badge success">50+ Strategies</span></div>
                <div><span class="value-badge secondary">Limited</span></div>
                <div><span class="value-badge warning">5-10 Strategies</span></div>
            </div>
            
            <div class="table-row">
                <div>Risk Management</div>
                <div><span class="value-badge success">Multi-Layer</span></div>
                <div><span class="value-badge warning">Basic</span></div>
                <div><span class="value-badge warning">Basic</span></div>
            </div>
            
            <div class="table-row">
                <div>Execution Speed</div>
                <div><span class="value-badge success">2.5ms</span></div>
                <div><span class="value-badge secondary">100-500ms</span></div>
                <div><span class="value-badge warning">10-50ms</span></div>
            </div>
            
            <div class="table-row">
                <div>Customer Support</div>
                <div><span class="value-badge success">24/7 Premium</span></div>
                <div><span class="value-badge warning">Business Hours</span></div>
                <div><span class="value-badge secondary">Limited</span></div>
            </div>
        </div>
    </div>
</section>



<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2 class="display-5 fw-bold mb-4">Ready to Elevate Your Trading?</h2>
        <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8);">
            Join thousands of successful traders using Meme Bull's advanced platform.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="#!" class="them-btn" style="background: linear-gradient(135deg, #2DD98F, #4a21ef);">
                <span class="btn_label" data-text="Start Free Trial">Start Free Trial</span>
                <span class="btn_icon">
                    <i class="fas fa-rocket"></i>
                </span>
            </a>
            <a href="#!" class="them-btn btn-outline">
                <span class="btn_label" data-text="Schedule Demo">Schedule Demo</span>
                <span class="btn_icon">
                    <i class="fas fa-calendar-alt"></i>
                </span>
            </a>
        </div>
        <p class="mt-4 text-white-50">No credit card required • 7-day full access • Cancel anytime</p>
    </div>
</section>

<script>
    // Initialize WOW.js for animations
    new WOW().init();
    
    // Animate stats when they come into view
    document.addEventListener('DOMContentLoaded', function() {
        const statElements = document.querySelectorAll('.stat-number');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const stat = entry.target;
                    const value = stat.textContent;
                    stat.textContent = '0';
                    
                    let start = 0;
                    const end = parseInt(value);
                    const duration = 2000;
                    const increment = end / (duration / 16);
                    
                    const timer = setInterval(() => {
                        start += increment;
                        if (start >= end) {
                            stat.textContent = value;
                            clearInterval(timer);
                        } else {
                            stat.textContent = Math.floor(start);
                        }
                    }, 16);
                    
                    observer.unobserve(stat);
                }
            });
        }, { threshold: 0.5 });
        
        statElements.forEach(stat => observer.observe(stat));
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/home/features.blade.php ENDPATH**/ ?>
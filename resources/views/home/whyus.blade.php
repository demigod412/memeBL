@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', 'Our Competitive Advantages')

@section('content')

<style>
    /* Premium Advantages Page Design */
    .advantages-hero {
        min-height: 80vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #080B18 0%, #0a0f28 100%);
        position: relative;
        overflow: hidden;
        padding: 120px 0 80px;
    }
    
    .advantages-hero::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        top: -300px;
        right: -200px;
    }
    
    .advantages-hero::after {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(74, 33, 239, 0.1) 0%, transparent 70%);
        bottom: -250px;
        left: -150px;
    }
    
    .hero-badge {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.15), rgba(74, 33, 239, 0.15));
        border: 1px solid rgba(45, 217, 143, 0.3);
        color: #2DD98F;
        font-weight: 500;
        letter-spacing: 1px;
        padding: 10px 25px;
        border-radius: 50px;
        display: inline-block;
        margin-bottom: 30px;
    }
    
    .advantages-intro-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 50px;
        margin: 60px 0;
    }
    
    .intro-feature {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }
    
    .intro-feature::before {
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
    
    .intro-feature:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .intro-feature:hover::before {
        transform: scaleX(1);
    }
    
    .intro-icon {
        width: 80px;
        height: 80px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
        font-size: 32px;
        color: #2DD98F;
        transition: all 0.3s ease;
    }
    
    .intro-feature:hover .intro-icon {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.2), rgba(74, 33, 239, 0.2));
        transform: scale(1.1) rotate(5deg);
    }
    
    .advantages-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .advantage-card-premium {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        height: 100%;
    }
    
    .advantage-card-premium::before {
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
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        opacity: 0.3;
        transition: opacity 0.3s ease;
        z-index: -1;
    }
    
    .advantage-card-premium:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .advantage-card-premium:hover::before {
        opacity: 0.5;
    }
    
    .advantage-icon-premium {
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
    
    .advantage-card-premium:hover .advantage-icon-premium {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.2), rgba(74, 33, 239, 0.2));
        transform: scale(1.1);
    }
    
    .advantage-stats-premium {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .advantage-stat {
        background: rgba(45, 217, 143, 0.1);
        color: #2DD98F;
        padding: 6px 15px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    
    .performance-section {
        background: linear-gradient(135deg, #0a0f28 0%, #080B18 100%);
        border-radius: 30px;
        padding: 80px;
        margin: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .performance-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.05), rgba(74, 33, 239, 0.05));
        z-index: 1;
    }
    
    .performance-section > .container {
        position: relative;
        z-index: 2;
    }
    
    .metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
        margin: 60px 0;
    }
    
    .metric-item-premium {
        padding: 30px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        transition: all 0.3s ease;
    }
    
    .metric-item-premium:hover {
        border-color: rgba(45, 217, 143, 0.2);
        transform: translateY(-5px);
    }
    
    .metric-bar-premium {
        height: 10px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
        overflow: hidden;
        margin: 20px 0;
        position: relative;
    }
    
    .metric-fill-premium {
        height: 100%;
        background: linear-gradient(90deg, #2DD98F, #4a21ef);
        border-radius: 5px;
        width: 0;
        transition: width 1.5s ease-in-out;
    }
    
    .metric-label {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    
    .metric-value {
        font-weight: 600;
        color: #2DD98F;
    }
    
    .comparison-chart-premium {
        display: flex;
        align-items: flex-end;
        justify-content: space-around;
        height: 250px;
        margin: 40px 0;
        gap: 20px;
    }
    
    .chart-column {
        text-align: center;
        width: 100px;
    }
    
    .chart-bar-premium {
        background: linear-gradient(0deg, #2DD98F, #4a21ef);
        border-radius: 10px 10px 0 0;
        position: relative;
        transition: height 1s ease-in-out;
        min-height: 20px;
    }
    
    .chart-label {
        margin-top: 15px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.8);
    }
    
    .chart-value {
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        font-weight: 700;
        color: #2DD98F;
        font-size: 18px;
    }
    
    .stats-grid-premium {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }
    
    .stat-item-premium {
        text-align: center;
        padding: 30px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .stat-item-premium:hover {
        background: rgba(45, 217, 143, 0.05);
        transform: translateY(-5px);
    }
    
    .stat-number-premium {
        font-size: 42px;
        font-weight: 700;
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 10px;
        line-height: 1;
    }
    
    .technology-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .tech-card-premium {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.3s ease;
    }
    
    .tech-card-premium:hover {
        border-color: rgba(45, 217, 143, 0.3);
        transform: translateY(-5px);
    }
    
    .tech-icon-premium {
        font-size: 48px;
        color: #2DD98F;
        margin-bottom: 25px;
        height: 80px;
        width: 80px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .tech-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .tech-list li {
        padding: 12px 0;
        color: rgba(255, 255, 255, 0.7);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        position: relative;
        padding-left: 25px;
    }
    
    .tech-list li:last-child {
        border-bottom: none;
    }
    
    .tech-list li:before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #2DD98F;
        font-weight: bold;
    }
    
    .integration-section {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.1), rgba(74, 33, 239, 0.1));
        border-radius: 25px;
        padding: 60px;
        margin: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .integration-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        z-index: 1;
    }
    
    .integration-section > .container {
        position: relative;
        z-index: 2;
    }
    
    .exchanges-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 20px;
        margin: 40px 0;
    }
    
    .exchange-item {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .exchange-item:hover {
        background: rgba(45, 217, 143, 0.1);
        transform: translateY(-5px);
        border-color: rgba(45, 217, 143, 0.3);
    }
    
    .exchange-icon {
        font-size: 32px;
        margin-bottom: 15px;
        height: 60px;
        width: 60px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
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
    
    .cta-advantages {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.1), rgba(74, 33, 239, 0.1));
        border-radius: 30px;
        padding: 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin: 100px 0;
    }
    
    .cta-advantages::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        z-index: 1;
    }
    
    .cta-advantages > * {
        position: relative;
        z-index: 2;
    }
    
    @media (max-width: 992px) {
        .advantages-hero {
            padding: 80px 0 60px;
        }
        
        .advantages-intro-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .performance-section {
            padding: 40px;
        }
        
        .advantages-grid,
        .metrics-grid,
        .technology-grid {
            grid-template-columns: 1fr;
        }
        
        .integration-section,
        .cta-advantages {
            padding: 40px;
        }
        
        .comparison-chart-premium {
            flex-direction: column;
            height: auto;
            align-items: center;
        }
        
        .chart-column {
            width: 80%;
            margin-bottom: 30px;
        }
        
        .chart-bar-premium {
            height: 100px !important;
        }
    }
    
    @media (max-width: 768px) {
        .advantages-hero {
            min-height: auto;
            padding: 60px 0 40px;
        }
        
        .hero-badge {
            font-size: 12px;
            padding: 8px 20px;
        }
        
        .intro-feature,
        .advantage-card-premium,
        .metric-item-premium,
        .tech-card-premium {
            padding: 25px;
        }
        
        .stat-number-premium {
            font-size: 36px;
        }
        
        .stat-item-premium {
            padding: 20px;
        }
        
        .exchanges-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- Hero Section -->
<section class="advantages-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="hero-badge">
                    <i class="fas fa-trophy me-2"></i>COMPETITIVE ADVANTAGES
                </span>
                <h1 class="display-4 fw-bold mb-4">
                    Why <span class="gradient-text">Meme Bull</span> Outperforms
                </h1>
                <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8); font-size: 22px; line-height: 1.6;">
                    Discover the technological edge that gives our automated trading platform superior 
                    performance, security, and reliability compared to traditional methods.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <span class="badge px-4 py-2" style="background: rgba(45, 217, 143, 0.15); color: #2DD98F;">
                        <i class="fas fa-rocket me-2"></i>87% Win Rate
                    </span>
                    <span class="badge px-4 py-2" style="background: rgba(74, 33, 239, 0.15); color: #4a21ef;">
                        <i class="fas fa-bolt me-2"></i><50ms Execution
                    </span>
                    <span class="badge px-4 py-2" style="background: rgba(45, 217, 143, 0.15); color: #2DD98F;">
                        <i class="fas fa-shield-alt me-2"></i>Bank-Grade Security
                    </span>
                    <span class="badge px-4 py-2" style="background: rgba(74, 33, 239, 0.15); color: #4a21ef;">
                        <i class="fas fa-brain me-2"></i>AI-Powered
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Advantages Intro -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">CORE ADVANTAGES</span>
                <h2 class="display-5 fw-bold mb-4">The Meme Bull Difference</h2>
                <p class="text-muted">Two fundamental pillars that set our platform apart from competitors</p>
            </div>
        </div>
        
        <div class="advantages-intro-grid">
            <!-- AI Advantage -->
            <div class="intro-feature wow fadeInUp">
                <div class="intro-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Advanced AI Technology</h3>
                <p class="text-white-50 mb-4">
                    Our proprietary AI algorithms analyze thousands of market signals in real-time, 
                    identifying profitable opportunities that human traders often miss through 
                    machine learning and predictive analytics.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Machine learning pattern recognition</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Real-time market sentiment analysis</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Predictive analytics engine</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Neural network optimization</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Natural language processing</li>
                </ul>
            </div>
            
            <!-- Security Advantage -->
            <div class="intro-feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="intro-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Enterprise-Grade Security</h3>
                <p class="text-white-50 mb-4">
                    Your security is our top priority. We implement military-grade encryption, 
                    multi-layer protection systems, and institutional security protocols to 
                    ensure your assets and data remain completely secure.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Bank-level 256-bit encryption</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Two-factor authentication (2FA)</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Regular third-party security audits</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Read-only API access</li>
                    <li><i class="fas fa-check text-primary me-2"></i> DDoS protection & monitoring</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Key Advantages Grid -->
<section class="py-100 bg-dark">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">KEY FEATURES</span>
                <h2 class="display-5 fw-bold mb-4">Competitive Advantages</h2>
                <p class="text-muted">Six core advantages that deliver superior trading performance</p>
            </div>
        </div>
        
        <div class="advantages-grid">
            <!-- Advantage 1 -->
            <div class="advantage-card-premium wow fadeInUp">
                <div class="advantage-icon-premium">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">24/7 Market Coverage</h3>
                <p class="text-white-50 mb-4">
                    Never miss a trading opportunity. Our bot operates continuously, taking advantage of 
                    global market movements across all time zones while you sleep or focus on other priorities.
                </p>
                <div class="advantage-stats-premium">
                    <span class="advantage-stat">99.9% Uptime</span>
                    <span class="advantage-stat">Zero Downtime</span>
                    <span class="advantage-stat">Global Coverage</span>
                </div>
            </div>
            
            <!-- Advantage 2 -->
            <div class="advantage-card-premium wow fadeInUp" data-wow-delay="0.1s">
                <div class="advantage-icon-premium">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Emotion-Free Trading</h3>
                <p class="text-white-50 mb-4">
                    Eliminate human emotions from your trading decisions. Our bot executes trades based on 
                    data and logic, not fear or greed, ensuring consistent, disciplined trading behavior.
                </p>
                <div class="advantage-stats-premium">
                    <span class="advantage-stat">100% Rational</span>
                    <span class="advantage-stat">No Impulse Trading</span>
                    <span class="advantage-stat">Disciplined Execution</span>
                </div>
            </div>
            
            <!-- Advantage 3 -->
            <div class="advantage-card-premium wow fadeInUp" data-wow-delay="0.2s">
                <div class="advantage-icon-premium">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Lightning-Fast Execution</h3>
                <p class="text-white-50 mb-4">
                    Execute trades in milliseconds with our low-latency infrastructure. Speed is critical 
                    in volatile crypto markets, and our technology ensures you never miss optimal entry points.
                </p>
                <div class="advantage-stats-premium">
                    <span class="advantage-stat">< 50ms Execution</span>
                    <span class="advantage-stat">High Frequency Ready</span>
                    <span class="advantage-stat">Low Latency</span>
                </div>
            </div>
            
            <!-- Advantage 4 -->
            <div class="advantage-card-premium wow fadeInUp">
                <div class="advantage-icon-premium">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Advanced Risk Management</h3>
                <p class="text-white-50 mb-4">
                    Sophisticated risk controls including dynamic stop-loss, take-profit, and position sizing 
                    algorithms protect your capital through multiple layers of automated protection.
                </p>
                <div class="advantage-stats-premium">
                    <span class="advantage-stat">Multi-layer Protection</span>
                    <span class="advantage-stat">Auto Risk Adjustment</span>
                    <span class="advantage-stat">Capital Preservation</span>
                </div>
            </div>
            
            <!-- Advantage 5 -->
            <div class="advantage-card-premium wow fadeInUp" data-wow-delay="0.1s">
                <div class="advantage-icon-premium">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Multi-Strategy Approach</h3>
                <p class="text-white-50 mb-4">
                    Deploy multiple trading strategies simultaneously across different markets and timeframes 
                    for optimal diversification and consistent performance in any market condition.
                </p>
                <div class="advantage-stats-premium">
                    <span class="advantage-stat">15+ Strategies</span>
                    <span class="advantage-stat">Customizable Parameters</span>
                    <span class="advantage-stat">Portfolio Diversification</span>
                </div>
            </div>
            
            <!-- Advantage 6 -->
            <div class="advantage-card-premium wow fadeInUp" data-wow-delay="0.2s">
                <div class="advantage-icon-premium">
                    <i class="fas fa-history"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Backtesting & Optimization</h3>
                <p class="text-white-50 mb-4">
                    Test strategies against 5+ years of historical data before deploying capital. 
                    Continuously optimize based on market performance and evolving conditions.
                </p>
                <div class="advantage-stats-premium">
                    <span class="advantage-stat">5+ Years Historical Data</span>
                    <span class="advantage-stat">Real-time Optimization</span>
                    <span class="advantage-stat">Strategy Validation</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Performance Metrics -->
<section class="performance-section">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag" style="color: #fff;">PROVEN PERFORMANCE</span>
                <h2 class="display-5 fw-bold mb-4 text-white">Superior Results, Verified Metrics</h2>
                <p class="text-white-50">Consistent outperformance across all key trading metrics</p>
            </div>
        </div>
        
        <div class="metrics-grid">
            <!-- Metric 1 -->
            <div class="metric-item-premium wow fadeInUp">
                <div class="metric-label">
                    <h5 class="h6 fw-bold mb-0">Average Monthly Return</h5>
                    <span class="metric-value">8.5% Average</span>
                </div>
                <div class="metric-bar-premium">
                    <div class="metric-fill-premium" data-width="85"></div>
                </div>
                <div class="d-flex justify-content-between text-white-50 small">
                    <span>Manual Trading: 2-3%</span>
                    <span>Traditional Funds: 4-6%</span>
                </div>
            </div>
            
            <!-- Metric 2 -->
            <div class="metric-item-premium wow fadeInUp" data-wow-delay="0.1s">
                <div class="metric-label">
                    <h5 class="h6 fw-bold mb-0">Win Rate Accuracy</h5>
                    <span class="metric-value">78% Win Rate</span>
                </div>
                <div class="metric-bar-premium">
                    <div class="metric-fill-premium" data-width="78"></div>
                </div>
                <div class="d-flex justify-content-between text-white-50 small">
                    <span>Professional Traders: 55-65%</span>
                    <span>Retail Traders: 40-50%</span>
                </div>
            </div>
            
            <!-- Metric 3 -->
            <div class="metric-item-premium wow fadeInUp" data-wow-delay="0.2s">
                <div class="metric-label">
                    <h5 class="h6 fw-bold mb-0">Risk-Adjusted Returns</h5>
                    <span class="metric-value">2.1 Sharpe Ratio</span>
                </div>
                <div class="metric-bar-premium">
                    <div class="metric-fill-premium" data-width="90"></div>
                </div>
                <div class="d-flex justify-content-between text-white-50 small">
                    <span>Industry Average: 0.8-1.2</span>
                    <span>Excellent: >1.5</span>
                </div>
            </div>
        </div>
        
        <!-- Comparison Chart -->
        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <h4 class="text-center mb-4">Performance Comparison</h4>
            <div class="comparison-chart-premium">
                <div class="chart-column">
                    <div class="chart-bar-premium" data-height="85">
                        <span class="chart-value">85%</span>
                    </div>
                    <div class="chart-label">Our Bot</div>
                </div>
                <div class="chart-column">
                    <div class="chart-bar-premium" data-height="45">
                        <span class="chart-value">45%</span>
                    </div>
                    <div class="chart-label">Manual Trading</div>
                </div>
                <div class="chart-column">
                    <div class="chart-bar-premium" data-height="60">
                        <span class="chart-value">60%</span>
                    </div>
                    <div class="chart-label">Traditional Funds</div>
                </div>
            </div>
            <p class="text-center text-white-50 mt-3">Based on 3-year performance data across multiple market conditions</p>
        </div>
        
        <!-- Stats Grid -->
        <div class="stats-grid-premium">
            <div class="stat-item-premium wow fadeInUp">
                <div class="stat-number-premium">24/7</div>
                <div class="fw-bold text-white">Trading Hours</div>
                <p class="text-white-50 small mt-2">Continuous algorithmic oversight</p>
            </div>
            
            <div class="stat-item-premium wow fadeInUp" data-wow-delay="0.1s">
                <div class="stat-number-premium">50ms</div>
                <div class="fw-bold text-white">Average Execution</div>
                <p class="text-white-50 small mt-2">Lightning-fast trade execution</p>
            </div>
            
            <div class="stat-item-premium wow fadeInUp" data-wow-delay="0.2s">
                <div class="stat-number-premium">99.9%</div>
                <div class="fw-bold text-white">System Uptime</div>
                <p class="text-white-50 small mt-2">Maximum reliability & availability</p>
            </div>
            
            <div class="stat-item-premium wow fadeInUp" data-wow-delay="0.3s">
                <div class="stat-number-premium">15+</div>
                <div class="fw-bold text-white">Trading Strategies</div>
                <p class="text-white-50 small mt-2">Diverse algorithmic approaches</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">TECHNOLOGY</span>
                <h2 class="display-5 fw-bold mb-4">Advanced Technology Stack</h2>
                <p class="text-muted">Built on cutting-edge technology for maximum performance, reliability, and security</p>
            </div>
        </div>
        
        <div class="technology-grid">
            <!-- Tech 1 -->
            <div class="tech-card-premium wow fadeInUp">
                <div class="tech-icon-premium">
                    <i class="fab fa-python"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">AI & Machine Learning</h3>
                <ul class="tech-list">
                    <li>TensorFlow & PyTorch Integration</li>
                    <li>Natural Language Processing</li>
                    <li>Predictive Analytics Engine</li>
                    <li>Neural Network Optimization</li>
                    <li>Deep Learning Models</li>
                </ul>
            </div>
            
            <!-- Tech 2 -->
            <div class="tech-card-premium wow fadeInUp" data-wow-delay="0.1s">
                <div class="tech-icon-premium">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">Cloud Infrastructure</h3>
                <ul class="tech-list">
                    <li>AWS & Google Cloud Platform</li>
                    <li>Low-latency Networking</li>
                    <li>Auto-scaling Systems</li>
                    <li>Global CDN Distribution</li>
                    <li>High Availability Architecture</li>
                </ul>
            </div>
            
            <!-- Tech 3 -->
            <div class="tech-card-premium wow fadeInUp" data-wow-delay="0.2s">
                <div class="tech-icon-premium">
                    <i class="fas fa-lock"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">Security Framework</h3>
                <ul class="tech-list">
                    <li>End-to-end Encryption</li>
                    <li>Multi-signature Wallet Support</li>
                    <li>Cold Storage Integration</li>
                    <li>Regular Security Audits</li>
                    <li>Real-time Threat Detection</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Exchange Integration -->
<section class="integration-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="section-tag" style="color: #2DD98F;">INTEGRATION</span>
                <h2 class="display-5 fw-bold mb-4 text-white">Seamless Exchange Integration</h2>
                <p class="text-white-50 mb-0">
                    Connect with all major cryptocurrency exchanges through our unified API interface. 
                    Trade across multiple platforms simultaneously for maximum opportunity capture.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="register" class="them-btn mt-3 mt-lg-0" style="background: linear-gradient(135deg, #2DD98F, #4a21ef);">
                    <span class="btn_label" data-text="View All Integrations">View All Integrations</span>
                </a>
            </div>
        </div>
        
        <div class="exchanges-grid">
            <div class="exchange-item">
                <div class="exchange-icon" style="color: #F0B90B;">
                    <i class="fab fa-btc"></i>
                </div>
                <div class="fw-bold text-white">Binance</div>
            </div>
            <div class="exchange-item">
                <div class="exchange-icon" style="color: #0052FF;">
                    <i class="fas fa-coins"></i>
                </div>
                <div class="fw-bold text-white">Coinbase Pro</div>
            </div>
            <div class="exchange-item">
                <div class="exchange-icon" style="color: #5846A5;">
                    <i class="fab fa-kraken"></i>
                </div>
                <div class="fw-bold text-white">Kraken</div>
            </div>
            <div class="exchange-item">
                <div class="exchange-icon" style="color: #00A868;">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="fw-bold text-white">Kucoin</div>
            </div>
            <div class="exchange-item">
                <div class="exchange-icon" style="color: #00A7E1;">
                    <i class="fas fa-chart-network"></i>
                </div>
                <div class="fw-bold text-white">Bitfinex</div>
            </div>
            <div class="exchange-item">
                <div class="exchange-icon" style="color: #FFB100;">
                    <i class="fab fa-bitcoin"></i>
                </div>
                <div class="fw-bold text-white">Huobi</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-advantages">
    <div class="container">
        <h2 class="display-5 fw-bold mb-4">Experience the Advantage</h2>
        <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8);">
            Join thousands of successful traders leveraging our competitive advantages. 
            Start with a free trial and see the difference for yourself.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="register" class="them-btn" style="background: linear-gradient(135deg, #2DD98F, #4a21ef);">
                <span class="btn_label" data-text="Start Free Trial">Start Free Trial</span>
                <span class="btn_icon">
                    <i class="fas fa-rocket"></i>
                </span>
            </a>
            <a href="register" class="them-btn btn-outline">
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
    // Initialize WOW.js animations
    new WOW().init();
    
    // Animate metric bars on scroll
    const metricBars = document.querySelectorAll('.metric-fill-premium');
    const chartBars = document.querySelectorAll('.chart-bar-premium');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate metric bars
                metricBars.forEach(bar => {
                    const width = bar.getAttribute('data-width') + '%';
                    bar.style.width = width;
                });
                
                // Animate chart bars
                chartBars.forEach(bar => {
                    const height = bar.getAttribute('data-height') + '%';
                    bar.style.height = height;
                });
                
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    // Observe performance section
    const performanceSection = document.querySelector('.performance-section');
    if (performanceSection) {
        observer.observe(performanceSection);
    }
    
    // Animate stats on scroll
    const statNumbers = document.querySelectorAll('.stat-number-premium');
    
    const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const stat = entry.target;
                const value = stat.textContent.replace(/\D/g, '');
                
                if (value) {
                    animateCounter(stat, parseInt(value));
                } else if (stat.textContent.includes('24/7')) {
                    // Handle special case for 24/7 stat
                    stat.textContent = '0/0';
                    setTimeout(() => {
                        stat.textContent = '24/7';
                    }, 2000);
                }
                
                statObserver.unobserve(stat);
            }
        });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(stat => statObserver.observe(stat));
    
    function animateCounter(element, target) {
        let start = 0;
        const duration = 2000;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start).toLocaleString();
            }
        }, 16);
    }
</script>

@endsection
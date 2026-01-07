

<?php $__env->startSection('title', 'Our Values & Philosophy'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

<style>
    /* Premium Values Page Design */
    .values-hero {
        min-height: 80vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #080B18 0%, #0a0f28 100%);
        position: relative;
        overflow: hidden;
        padding: 120px 0 80px;
    }
    
    .values-hero::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        top: -300px;
        right: -200px;
    }
    
    .values-hero::after {
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
    
    .core-values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .value-card-premium {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
        height: 100%;
    }
    
    .value-card-premium::before {
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
    
    .value-card-premium:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .value-card-premium:hover::before {
        transform: scaleX(1);
    }
    
    .value-icon-premium {
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
    
    .value-card-premium:hover .value-icon-premium {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.2), rgba(74, 33, 239, 0.2));
        transform: scale(1.1) rotate(5deg);
    }
    
    .philosophy-section {
        background: linear-gradient(135deg, #0a0f28 0%, #080B18 100%);
        border-radius: 30px;
        padding: 80px;
        margin: 100px 0;
        position: relative;
        overflow: hidden;
    }
    
    .philosophy-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.05), rgba(74, 33, 239, 0.05));
        z-index: 1;
    }
    
    .philosophy-section > .container {
        position: relative;
        z-index: 2;
    }
    
    .pillar-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin: 60px 0;
    }
    
    .pillar-card {
        text-align: center;
        padding: 40px 30px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        transition: all 0.3s ease;
    }
    
    .pillar-card:hover {
        transform: translateY(-5px);
        border-color: rgba(45, 217, 143, 0.2);
    }
    
    .pillar-number {
        font-size: 48px;
        font-weight: 800;
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        margin-bottom: 15px;
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
    
    .quote-block-premium {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.05), rgba(74, 33, 239, 0.05));
        border-left: 4px solid #2DD98F;
        padding: 50px;
        border-radius: 0 20px 20px 0;
        margin: 60px 0;
        position: relative;
        overflow: hidden;
    }
    
    .quote-block-premium::before {
        content: '"';
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 120px;
        font-family: Georgia, serif;
        color: rgba(45, 217, 143, 0.1);
        line-height: 1;
    }
    
    .commitment-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .commitment-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.3s ease;
    }
    
    .commitment-card:hover {
        border-color: rgba(45, 217, 143, 0.3);
        transform: translateY(-5px);
    }
    
    .commitment-icon {
        width: 60px;
        height: 60px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        font-size: 24px;
        color: #2DD98F;
    }
    
    .team-values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .team-value-item {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        padding: 25px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .team-value-item:hover {
        background: rgba(45, 217, 143, 0.05);
        transform: translateX(10px);
    }
    
    .team-value-icon {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: #2DD98F;
    }
    
    .impact-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .impact-stat {
        text-align: center;
        padding: 30px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        transition: all 0.3s ease;
    }
    
    .impact-stat:hover {
        background: rgba(45, 217, 143, 0.05);
        transform: translateY(-5px);
    }
    
    .stat-number-large {
        font-size: 48px;
        font-weight: 700;
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 10px;
    }
    
    .cta-values {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.1), rgba(74, 33, 239, 0.1));
        border-radius: 30px;
        padding: 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin: 100px 0;
    }
    
    .cta-values::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        z-index: 1;
    }
    
    .cta-values > * {
        position: relative;
        z-index: 2;
    }
    
    @media (max-width: 992px) {
        .values-hero {
            padding: 80px 0 60px;
        }
        
        .philosophy-section {
            padding: 40px;
        }
        
        .core-values-grid,
        .pillar-grid,
        .commitment-grid,
        .team-values-grid {
            grid-template-columns: 1fr;
        }
        
        .cta-values {
            padding: 40px;
        }
        
        .quote-block-premium {
            padding: 30px;
        }
    }
    
    @media (max-width: 768px) {
        .values-hero {
            min-height: auto;
            padding: 60px 0 40px;
        }
        
        .hero-badge {
            font-size: 12px;
            padding: 8px 20px;
        }
        
        .value-card-premium,
        .pillar-card,
        .commitment-card {
            padding: 25px;
        }
        
        .stat-number-large {
            font-size: 36px;
        }
    }
</style>

<!-- Hero Section -->
<section class="values-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="hero-badge">
                    <i class="fas fa-heart me-2"></i>OUR PHILOSOPHY
                </span>
                <h1 class="display-4 fw-bold mb-4">
                    Building Trust Through <span class="gradient-text">Transparency</span>
                </h1>
                <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8); font-size: 22px; line-height: 1.6;">
                    We're not just building trading algorithms. We're building a future where 
                    sophisticated trading technology is accessible, ethical, and transparent for everyone.
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <span class="badge px-4 py-2" style="background: rgba(45, 217, 143, 0.15); color: #2DD98F;">
                        <i class="fas fa-shield-alt me-2"></i>Secure
                    </span>
                    <span class="badge px-4 py-2" style="background: rgba(74, 33, 239, 0.15); color: #4a21ef;">
                        <i class="fas fa-chart-line me-2"></i>Transparent
                    </span>
                    <span class="badge px-4 py-2" style="background: rgba(45, 217, 143, 0.15); color: #2DD98F;">
                        <i class="fas fa-users me-2"></i>Community-First
                    </span>
                    <span class="badge px-4 py-2" style="background: rgba(74, 33, 239, 0.15); color: #4a21ef;">
                        <i class="fas fa-brain me-2"></i>Innovative
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">CORE VALUES</span>
                <h2 class="display-5 fw-bold mb-4">The Principles That Guide Us</h2>
                <p class="text-muted">These values shape every algorithm we build and every decision we make</p>
            </div>
        </div>
        
        <div class="core-values-grid">
            <!-- Value 1 -->
            <div class="value-card-premium wow fadeInUp">
                <div class="value-icon-premium">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Radical Transparency</h3>
                <p class="text-white-50 mb-4">
                    No black boxes. We believe in clear strategy explanations, visible risk parameters, 
                    and fully auditable performance metrics for every algorithm we deploy.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Clear strategy documentation</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Visible risk parameters</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Auditable performance metrics</li>
                </ul>
            </div>
            
            <!-- Value 2 -->
            <div class="value-card-premium wow fadeInUp" data-wow-delay="0.1s">
                <div class="value-icon-premium">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Accessibility for All</h3>
                <p class="text-white-50 mb-4">
                    Sophisticated trading tools should empower everyone, not just financial institutions. 
                    We're democratizing algorithmic trading through intuitive design and education.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Intuitive user interface</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Comprehensive education</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Affordable pricing tiers</li>
                </ul>
            </div>
            
            <!-- Value 3 -->
            <div class="value-card-premium wow fadeInUp" data-wow-delay="0.2s">
                <div class="value-icon-premium">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Security First</h3>
                <p class="text-white-50 mb-4">
                    Capital preservation is non-negotiable. Multi-layered protection and institutional-grade 
                    security protocols are built into every aspect of our platform.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Read-only API access</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Multi-factor authentication</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Regular security audits</li>
                </ul>
            </div>
        </div>
        
        <div class="core-values-grid">
            <!-- Value 4 -->
            <div class="value-card-premium wow fadeInUp">
                <div class="value-icon-premium">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Continuous Innovation</h3>
                <p class="text-white-50 mb-4">
                    Markets evolve, and so do we. Through machine learning, adaptive strategy refinement, 
                    and constant research, we stay ahead of market dynamics.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Machine learning integration</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Adaptive strategy refinement</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Continuous research & development</li>
                </ul>
            </div>
            
            <!-- Value 5 -->
            <div class="value-card-premium wow fadeInUp" data-wow-delay="0.1s">
                <div class="value-icon-premium">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Ethical Algorithms</h3>
                <p class="text-white-50 mb-4">
                    No manipulative practices. We prioritize market integrity and ethical design in every 
                    algorithm, ensuring fair participation for all market participants.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Ethical trading practices</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Market integrity focused</li>
                    <li><i class="fas fa-check text-primary me-2"></i> No manipulative strategies</li>
                </ul>
            </div>
            
            <!-- Value 6 -->
            <div class="value-card-premium wow fadeInUp" data-wow-delay="0.2s">
                <div class="value-icon-premium">
                    <i class="fas fa-comments"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Community Driven</h3>
                <p class="text-white-50 mb-4">
                    Your feedback shapes our roadmap. We build with our community, not just for them, 
                    ensuring our platform evolves according to user needs and market demands.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Community feedback integration</li>
                    <li><i class="fas fa-check text-primary me-2"></i> User-driven development</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Active community forums</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Trading Philosophy -->
<section class="philosophy-section">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag" style="color: #fff;">TRADING PHILOSOPHY</span>
                <h2 class="display-5 fw-bold mb-4 text-white">Our Approach to Markets</h2>
                <p class="text-white-50">The principles that guide our algorithmic trading strategies</p>
            </div>
        </div>
        
        <div class="pillar-grid">
            <!-- Pillar 1 -->
            <div class="pillar-card wow fadeInUp">
                <div class="pillar-number">01</div>
                <h4 class="h5 fw-bold mb-3">Emotion-Free Execution</h4>
                <p class="text-white-50">
                    Replace fear and greed with disciplined, data-driven decisions executed with precision.
                </p>
            </div>
            
            <!-- Pillar 2 -->
            <div class="pillar-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="pillar-number">02</div>
                <h4 class="h5 fw-bold mb-3">24/7 Market Presence</h4>
                <p class="text-white-50">
                    Never miss an opportunity with continuous market monitoring across all time zones.
                </p>
            </div>
            
            <!-- Pillar 3 -->
            <div class="pillar-card wow fadeInUp" data-wow-delay="0.2s">
                <div class="pillar-number">03</div>
                <h4 class="h5 fw-bold mb-3">Risk-Managed Growth</h4>
                <p class="text-white-50">
                    Capital preservation first, intelligent growth second. Every strategy includes multiple risk layers.
                </p>
            </div>
            
            <!-- Pillar 4 -->
            <div class="pillar-card wow fadeInUp" data-wow-delay="0.3s">
                <div class="pillar-number">04</div>
                <h4 class="h5 fw-bold mb-3">Adaptive Intelligence</h4>
                <p class="text-white-50">
                    Algorithms that learn, adapt, and optimize as market conditions and dynamics evolve.
                </p>
            </div>
        </div>
        
        <div class="quote-block-premium wow fadeInUp" data-wow-delay="0.4s">
            <h3 class="mb-4" style="font-style: italic; font-weight: 500;">
                "We believe sophisticated trading technology should be accessible to everyone, not just financial institutions. 
                Our mission is to democratize algorithmic trading through transparency, education, and innovation."
            </h3>
            <div class="d-flex align-items-center mt-4">
                <div>
                    <h5 class="mb-1 gradient-text">Meme Bull Founding Team</h5>
                    <small style="color: rgba(255, 255, 255, 0.6);">Our Guiding Mission</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Commitment -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">OUR COMMITMENT</span>
                <h2 class="display-5 fw-bold mb-4">What You Can Expect</h2>
                <p class="text-muted">Our promises to every trader using Meme Bull</p>
            </div>
        </div>
        
        <div class="commitment-grid">
            <!-- Commitment 1 -->
            <div class="commitment-card wow fadeInUp">
                <div class="commitment-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">Comprehensive Education</h3>
                <p class="text-white-50">
                    We don't just provide tools—we ensure you understand how to use them effectively through 
                    guides, tutorials, and ongoing support.
                </p>
            </div>
            
            <!-- Commitment 2 -->
            <div class="commitment-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="commitment-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">Transparent Performance</h3>
                <p class="text-white-50">
                    Detailed, auditable performance reports with full disclosure of drawdowns, 
                    win rates, and all risk metrics. No hidden statistics.
                </p>
            </div>
            
            <!-- Commitment 3 -->
            <div class="commitment-card wow fadeInUp" data-wow-delay="0.2s">
                <div class="commitment-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">Continuous Improvement</h3>
                <p class="text-white-50">
                    Regular updates based on user feedback and market developments. 
                    Your success drives our development roadmap.
                </p>
            </div>
        </div>
    </div>
</section>



<!-- Impact Stats -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">OUR IMPACT</span>
                <h2 class="display-5 fw-bold mb-4">Making a Difference</h2>
                <p class="text-muted">The measurable impact of our values-driven approach</p>
            </div>
        </div>
        
        <div class="impact-stats">
            <!-- Stat 1 -->
            <div class="impact-stat wow fadeInUp">
                <div class="stat-number-large">24/7</div>
                <h5 class="fw-bold mb-2">Market Monitoring</h5>
                <p class="text-white-50 small">Continuous algorithmic oversight</p>
            </div>
            
            <!-- Stat 2 -->
            <div class="impact-stat wow fadeInUp" data-wow-delay="0.1s">
                <div class="stat-number-large">100%</div>
                <h5 class="fw-bold mb-2">Transparency</h5>
                <p class="text-white-50 small">Strategy visibility & documentation</p>
            </div>
            
            <!-- Stat 3 -->
            <div class="impact-stat wow fadeInUp" data-wow-delay="0.2s">
                <div class="stat-number-large">50+</div>
                <h5 class="fw-bold mb-2">Countries</h5>
                <p class="text-white-50 small">Global trader community served</p>
            </div>
            
            <!-- Stat 4 -->
            <div class="impact-stat wow fadeInUp" data-wow-delay="0.3s">
                <div class="stat-number-large">10K+</div>
                <h5 class="fw-bold mb-2">Traders Empowered</h5>
                <p class="text-white-50 small">Success stories & growing</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-values">
    <div class="container">
        <h2 class="display-5 fw-bold mb-4">Trade with Values</h2>
        <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8);">
            Join a community that values transparency, education, and ethical innovation in algorithmic trading.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="#!" class="them-btn" style="background: linear-gradient(135deg, #2DD98F, #4a21ef);">
                <span class="btn_label" data-text="Start Trading">Start Trading</span>
                <span class="btn_icon">
                    <i class="fas fa-rocket"></i>
                </span>
            </a>
            <a href="#!" class="them-btn btn-outline">
                <span class="btn_label" data-text="Learn More">Learn More</span>
                <span class="btn_icon">
                    <i class="fas fa-book"></i>
                </span>
            </a>
        </div>
        <p class="mt-4 text-white-50">No hidden fees • 7-day free trial • Cancel anytime</p>
    </div>
</section>

<script>
    // Initialize WOW.js animations
    new WOW().init();
    
    // Animate stats on scroll
    const statElements = document.querySelectorAll('.stat-number-large');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const stat = entry.target;
                const value = stat.textContent.replace(/\D/g, '');
                const isPercentage = stat.textContent.includes('%');
                
                if (isPercentage) {
                    animateCounter(stat, 100);
                } else if (value) {
                    animateCounter(stat, parseInt(value));
                }
                
                observer.unobserve(stat);
            }
        });
    }, { threshold: 0.5 });
    
    statElements.forEach(stat => observer.observe(stat));
    
    function animateCounter(element, target) {
        let start = 0;
        const duration = 2000;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = target.toLocaleString() + (element.textContent.includes('%') ? '%' : '');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(start).toLocaleString() + (element.textContent.includes('%') ? '%' : '');
            }
        }, 16);
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/home/values.blade.php ENDPATH**/ ?>
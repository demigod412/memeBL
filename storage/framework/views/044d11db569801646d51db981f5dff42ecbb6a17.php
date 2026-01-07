
<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', 'Education & Resources'); ?>

<?php $__env->startSection('content'); ?>
<style>
    /* Premium Education Page Styling */
    .education-hero {
        min-height: 80vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #080B18 0%, #0a0f28 100%);
        position: relative;
        overflow: hidden;
        padding: 120px 0 80px;
    }
    
    .education-hero::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        top: -300px;
        right: -200px;
    }
    
    .education-hero::after {
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
    
    .learning-path-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .learning-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }
    
    .learning-card::before {
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
    
    .learning-card:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .learning-card:hover::before {
        transform: scaleX(1);
    }
    
    .level-badge {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
        color: white;
        margin-bottom: 25px;
    }
    
    .course-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .course-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
    }
    
    .course-card:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .course-image {
        height: 200px;
        overflow: hidden;
    }
    
    .course-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .course-card:hover .course-image img {
        transform: scale(1.05);
    }
    
    .course-content {
        padding: 30px;
    }
    
    .course-meta {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }
    
    .course-tag {
        background: rgba(45, 217, 143, 0.1);
        color: #2DD98F;
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
    }
    
    .course-duration {
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
    }
    
    .resource-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .resource-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        text-align: center;
        transition: all 0.4s ease;
    }
    
    .resource-card:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .resource-icon {
        width: 80px;
        height: 80px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 32px;
        color: #2DD98F;
        transition: all 0.3s ease;
    }
    
    .resource-card:hover .resource-icon {
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
    
    .tool-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .tool-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 40px;
        transition: all 0.4s ease;
    }
    
    .tool-card:hover {
        border-color: rgba(45, 217, 143, 0.3);
        transform: translateY(-5px);
    }
    
    .input-group-custom {
        margin-bottom: 20px;
    }
    
    .input-group-custom label {
        display: block;
        margin-bottom: 8px;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }
    
    .input-group-custom input {
        width: 100%;
        padding: 15px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: white;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    
    .input-group-custom input:focus {
        outline: none;
        border-color: #2DD98F;
        background: rgba(45, 217, 143, 0.05);
    }
    
    .result-card {
        background: rgba(45, 217, 143, 0.05);
        border: 1px solid rgba(45, 217, 143, 0.1);
        border-radius: 15px;
        padding: 25px;
        margin-top: 30px;
        display: none;
    }
    
    .community-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }
    
    .community-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s ease;
    }
    
    .community-card:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.3);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .community-image {
        height: 200px;
        overflow: hidden;
    }
    
    .community-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .community-card:hover .community-image img {
        transform: scale(1.05);
    }
    
    .community-content {
        padding: 30px;
    }
    
    .community-meta {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }
    
    .community-stat {
        display: flex;
        align-items: center;
        gap: 5px;
        color: rgba(255, 255, 255, 0.6);
        font-size: 14px;
    }
    
    .community-stat i {
        color: #2DD98F;
    }
    
    .cta-education {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.1), rgba(74, 33, 239, 0.1));
        border-radius: 30px;
        padding: 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin: 100px 0;
    }
    
    .cta-education::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.1) 0%, transparent 70%);
        z-index: 1;
    }
    
    .cta-education > * {
        position: relative;
        z-index: 2;
    }
    
    @media (max-width: 992px) {
        .education-hero {
            padding: 80px 0 60px;
        }
        
        .learning-path-grid,
        .course-grid,
        .resource-grid,
        .tool-grid,
        .community-grid {
            grid-template-columns: 1fr;
        }
        
        .cta-education {
            padding: 40px;
        }
    }
    
    @media (max-width: 768px) {
        .education-hero {
            min-height: auto;
            padding: 60px 0 40px;
        }
        
        .hero-badge {
            font-size: 12px;
            padding: 8px 20px;
        }
        
        .learning-card,
        .course-content,
        .resource-card,
        .tool-card,
        .community-content {
            padding: 25px;
        }
    }
</style>

<!-- Hero Section -->
<section class="education-hero">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span class="hero-badge">
                    <i class="fas fa-graduation-cap me-2"></i>TRADING EDUCATION HUB
                </span>
                <h1 class="display-4 fw-bold mb-4">
                    Master <span class="gradient-text">Algorithmic Trading</span>
                </h1>
                <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8); font-size: 22px; line-height: 1.6;">
                    Comprehensive learning resources, interactive courses, and expert insights to elevate your 
                    trading skills from beginner to professional.
                </p>
               
            </div>
        </div>
    </div>
</section>

<!-- Learning Path Section -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">LEARNING PATH</span>
                <h2 class="display-5 fw-bold mb-4">Structured Learning Journey</h2>
                <p class="text-muted">Follow our proven curriculum designed by industry experts</p>
            </div>
        </div>
        
        <div class="learning-path-grid">
            <!-- Beginner Level -->
            <div class="learning-card wow fadeInUp">
                <div class="level-badge">01</div>
                <h3 class="h4 fw-bold mb-3">Beginner Level</h3>
                <p class="text-white-50 mb-4">
                    Start your trading journey with fundamental concepts and basic bot operations.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Crypto Trading Fundamentals</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Bot Setup & Configuration</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Risk Management Basics</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Market Analysis 101</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Exchange Integration</li>
                </ul>
                <div class="mt-4 pt-3">
                    <a href="#!" class="text-primary fw-bold text-decoration-none">
                        Explore Courses <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- Intermediate Level -->
            <div class="learning-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="level-badge">02</div>
                <h3 class="h4 fw-bold mb-3">Intermediate Level</h3>
                <p class="text-white-50 mb-4">
                    Advance your skills with complex strategies and analytical techniques.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> Advanced Trading Strategies</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Technical Analysis Mastery</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Portfolio Optimization</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Backtesting Methods</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Market Sentiment Analysis</li>
                </ul>
                <div class="mt-4 pt-3">
                    <a href="#!" class="text-primary fw-bold text-decoration-none">
                        Explore Courses <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            
            <!-- Advanced Level -->
            <div class="learning-card wow fadeInUp" data-wow-delay="0.2s">
                <div class="level-badge">03</div>
                <h3 class="h4 fw-bold mb-3">Advanced Level</h3>
                <p class="text-white-50 mb-4">
                    Master institutional-grade strategies and AI-powered trading techniques.
                </p>
                <ul class="feature-list">
                    <li><i class="fas fa-check text-primary me-2"></i> AI & Machine Learning Integration</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Custom Algorithm Development</li>
                    <li><i class="fas fa-check text-primary me-2"></i> High-Frequency Trading</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Quantitative Analysis</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Institutional Strategies</li>
                </ul>
                <div class="mt-4 pt-3">
                    <a href="#!" class="text-primary fw-bold text-decoration-none">
                        Explore Courses <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Resources Library -->
<section class="py-100">
    <div class="container">
        <div class="row justify-content-center mb-60">
            <div class="col-lg-8 text-center">
                <span class="section-tag">RESOURCES</span>
                <h2 class="display-5 fw-bold mb-4">Comprehensive Resource Library</h2>
                <p class="text-muted">Access our extensive collection of trading materials and tools</p>
            </div>
        </div>
        
        <div class="resource-grid">
            <!-- Video Tutorials -->
            <div class="resource-card wow fadeInUp">
                <div class="resource-icon">
                    <i class="fas fa-play-circle"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">Video Tutorials</h3>
                <p class="text-white-50 mb-4">
                    200+ HD video tutorials covering everything from basics to advanced strategies.
                </p>
                <ul class="text-start mb-4">
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Step-by-step guides</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Live trading sessions</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Q&A webinars</li>
                </ul>
                <a href="#!" class="them-btn">
                    <span class="btn_label" data-text="Watch Now">Watch Now</span>
                </a>
            </div>
            
            <!-- E-Books & Guides -->
            <div class="resource-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="resource-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">E-Books & Guides</h3>
                <p class="text-white-50 mb-4">
                    50+ comprehensive guides and whitepapers by industry experts.
                </p>
                <ul class="text-start mb-4">
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Strategy blueprints</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Market analysis reports</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Certification materials</li>
                </ul>
                <a href="#!" class="them-btn">
                    <span class="btn_label" data-text="Download">Download</span>
                </a>
            </div>
            
            <!-- Research Papers -->
            <div class="resource-card wow fadeInUp" data-wow-delay="0.2s">
                <div class="resource-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="h5 fw-bold mb-3">Research Papers</h3>
                <p class="text-white-50 mb-4">
                    In-depth research on market trends, algorithms, and trading psychology.
                </p>
                <ul class="text-start mb-4">
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Academic research</li>
                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Case studies</li>
                    <li><i class="fas fa-check text-primary me-2"></i> Statistical analysis</li>
                </ul>
                <a href="#!" class="them-btn">
                    <span class="btn_label" data-text="Explore">Explore</span>
                </a>
            </div>
        </div>
    </div>
</section>





<!-- CTA Section -->
<section class="cta-education">
    <div class="container">
        <h2 class="display-5 fw-bold mb-4">Start Your Trading Education Today</h2>
        <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.8);">
            Join thousands of successful traders who transformed their skills with our educational resources.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="#!" class="them-btn" style="background: linear-gradient(135deg, #2DD98F, #4a21ef);">
                <span class="btn_label" data-text="Get Started Free">Get Started Free</span>
                <span class="btn_icon">
                    <i class="fas fa-rocket"></i>
                </span>
            </a>
            <a href="#!" class="them-btn btn-outline">
                <span class="btn_label" data-text="Browse All Courses">Browse All Courses</span>
                <span class="btn_icon">
                    <i class="fas fa-graduation-cap"></i>
                </span>
            </a>
        </div>
        <p class="mt-4 text-white-50">Free 7-day trial • No credit card required • Cancel anytime</p>
    </div>
</section>

<script>
    // Initialize WOW.js animations
    new WOW().init();
    
    // Risk Calculator
    document.getElementById('calculateRiskBtn').addEventListener('click', function() {
        const capital = parseFloat(document.getElementById('riskCapital').value) || 0;
        const riskPercent = parseFloat(document.getElementById('riskPercent').value) || 2;
        const stopLoss = parseFloat(document.getElementById('stopLoss').value) || 5;
        
        if (capital > 0) {
            const riskAmount = capital * (riskPercent / 100);
            const positionSize = riskAmount / (stopLoss / 100);
            
            document.getElementById('riskAmount').textContent = '$' + riskAmount.toFixed(2);
            document.getElementById('positionSize').textContent = '$' + positionSize.toFixed(2);
            document.getElementById('riskResult').style.display = 'block';
        }
    });
    
    // P&L Calculator
    document.getElementById('calculatePnlBtn').addEventListener('click', function() {
        const entryPrice = parseFloat(document.getElementById('entryPrice').value) || 0;
        const exitPrice = parseFloat(document.getElementById('exitPrice').value) || 0;
        const positionSize = parseFloat(document.getElementById('pnlPosition').value) || 0;
        const fees = parseFloat(document.getElementById('tradingFees').value) || 0.1;
        
        if (entryPrice > 0 && exitPrice > 0 && positionSize > 0) {
            const units = positionSize / entryPrice;
            const grossPnl = (exitPrice - entryPrice) * units;
            const feeAmount = positionSize * (fees / 100) * 2;
            const netPnl = grossPnl - feeAmount;
            const pnlPercent = (netPnl / positionSize) * 100;
            
            document.getElementById('pnlAmount').textContent = 
                netPnl >= 0 ? '$' + netPnl.toFixed(2) : '-$' + Math.abs(netPnl).toFixed(2);
            document.getElementById('pnlPercentage').textContent = 
                pnlPercent.toFixed(2) + '%';
            document.getElementById('pnlResult').style.display = 'block';
        }
    });
    
    // Animate stats on scroll
    const statElements = document.querySelectorAll('.stat-number');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const stat = entry.target;
                const value = stat.textContent.replace(/\D/g, '');
                stat.textContent = '0';
                
                let start = 0;
                const end = parseInt(value);
                const duration = 2000;
                
                const timer = setInterval(() => {
                    start += end / (duration / 16);
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
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/home/education.blade.php ENDPATH**/ ?>
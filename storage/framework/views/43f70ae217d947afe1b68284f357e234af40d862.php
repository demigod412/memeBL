<?php $__env->startSection('title', 'Frequently Asked Questions'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

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



    <!-- Minimal Hero -->
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

    <!-- Core Values -->
    <section class="section-minimal bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Our Core Values</h2>
                    <p class="lead" style="color: rgba(255, 255, 255, 0.7);">
                        The principles that guide every algorithm we build and every decision we make.
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 class="mb-3">Radical Transparency</h4>
                        <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.6;">
                            No black boxes. Clear strategy explanations, visible risk parameters, and auditable performance metrics.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="mb-3">Accessibility for All</h4>
                        <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.6;">
                            Sophisticated trading tools should be available to everyone, not just financial institutions.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="mb-3">Prudent Risk Management</h4>
                        <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.6;">
                            Capital preservation comes first. Multi-layered protection built into every algorithm.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4 class="mb-3">Continuous Innovation</h4>
                        <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.6;">
                            Evolving with the markets through machine learning and adaptive strategy refinement.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 class="mb-3">Ethical Algorithms</h4>
                        <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.6;">
                            No manipulative practices. Market integrity is non-negotiable in our design philosophy.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h4 class="mb-3">Community Driven</h4>
                        <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.6;">
                            Your feedback shapes our roadmap. We build with our community, not just for them.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trading Philosophy -->
    <section class="section-minimal bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-4">Our Trading Philosophy</h2>
                    <div class="pillar-item">
                        <div class="pillar-number">01</div>
                        <div class="pillar-content">
                            <h4 class="mb-2">Emotion-Free Execution</h4>
                            <p style="color: rgba(255, 255, 255, 0.7);">Replace fear and greed with disciplined, data-driven decisions.</p>
                        </div>
                    </div>
                    
                    <div class="pillar-item">
                        <div class="pillar-number">02</div>
                        <div class="pillar-content">
                            <h4 class="mb-2">24/7 Market Presence</h4>
                            <p style="color: rgba(255, 255, 255, 0.7);">Never miss an opportunity with continuous market monitoring.</p>
                        </div>
                    </div>
                    
                    <div class="pillar-item">
                        <div class="pillar-number">03</div>
                        <div class="pillar-content">
                            <h4 class="mb-2">Diversified Strategy Portfolio</h4>
                            <p style="color: rgba(255, 255, 255, 0.7);">Multiple uncorrelated approaches for consistent performance.</p>
                        </div>
                    </div>
                    
                    <div class="pillar-item">
                        <div class="pillar-number">04</div>
                        <div class="pillar-content">
                            <h4 class="mb-2">Continuous Optimization</h4>
                            <p style="color: rgba(255, 255, 255, 0.7);">Algorithms that learn and adapt as market dynamics evolve.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="quote-block">
                        <h3 class="mb-3" style="font-style: italic;">"We believe that sophisticated trading technology should empower everyone, not just the financial elite."</h3>
                        <div class="d-flex align-items-center mt-4">
                            <div>
                                <h5 class="mb-1 gradient-text">Meme Bull Team</h5>
                                <small style="color: rgba(255, 255, 255, 0.6);">Our Guiding Principle</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col-6 text-center">
                            <div class="stat-number">24/7</div>
                            <p style="color: rgba(255, 255, 255, 0.7);">Market Monitoring</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="stat-number">100%</div>
                            <p style="color: rgba(255, 255, 255, 0.7);">Algorithm Transparency</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Commitment -->
    <section class="section-minimal bg-dark">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-3">Our Commitment to You</h2>
                    <p class="lead" style="color: rgba(255, 255, 255, 0.7);">
                        What you can expect when trading with Meme Bull
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="simple-accordion accordion" id="commitmentAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#commitmentOne">
                                    Comprehensive Education & Support
                                </button>
                            </h2>
                            <div id="commitmentOne" class="accordion-collapse collapse show" data-bs-parent="#commitmentAccordion">
                                <div class="accordion-body">
                                    We don't just provide tools—we ensure you understand how to use them effectively. Our educational resources include strategy guides, market analysis tutorials, and comprehensive documentation.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#commitmentTwo">
                                    Transparent Performance Reporting
                                </button>
                            </h2>
                            <div id="commitmentTwo" class="accordion-collapse collapse" data-bs-parent="#commitmentAccordion">
                                <div class="accordion-body">
                                    Detailed, auditable performance reports for all algorithms with full disclosure of drawdowns, win rates, and risk metrics. No hidden statistics.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#commitmentThree">
                                    Continuous Platform Improvement
                                </button>
                            </h2>
                            <div id="commitmentThree" class="accordion-collapse collapse" data-bs-parent="#commitmentAccordion">
                                <div class="accordion-body">
                                    Regular updates based on user feedback and market developments. Your success drives our development roadmap.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="divider"></div>
            
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h3 class="mb-4">Ready to Trade with Confidence?</h3>
                    <p class="mb-4" style="color: rgba(255, 255, 255, 0.7);">
                        Join thousands of traders using Meme Bull's automated algorithms.
                    </p>
                    <a href="#" class="them-btn" style="background: #2DD98F; color: #080B18;">
                        <span class="btn_label" data-text="Start Trading">Start Trading</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/values.blade.php ENDPATH**/ ?>
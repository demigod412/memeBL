<?php $__env->startSection('title', 'Terms and Privacy And Policy'); ?>

<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('content'); ?>

 <style>
        /* Additional styles for policies page */
        .policy-section {
            background: #0d0b33;
            border-radius: 20px;
            padding: 50px;
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }
        
        .policy-section::before {
            content: '';
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            padding: 1px;
            position: absolute;
            border-radius: 20px;
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: add, add;
            mask-composite: add, add;
            -webkit-mask-composite: source-out;
            mask-composite: exclude;
            background: linear-gradient(162deg, #8f7bff 0%, #413886 28.35%, #0f0d39 73.81%, #2dd98f 100%);
            z-index: -1;
        }
        
        .policy-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #2dd98f 0%, #4a21ef 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
        }
        
        .policy-list {
            list-style: none;
            padding-left: 0;
        }
        
        .policy-list li {
            padding: 12px 0;
            padding-left: 35px;
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .policy-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #2dd98f;
            font-weight: bold;
        }
        
        .compliance-badge {
            background: rgba(45, 217, 143, 0.1);
            border: 2px solid #2dd98f;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            height: 100%;
            transition: transform 0.3s ease;
        }
        
        .compliance-badge:hover {
            transform: translateY(-5px);
        }
        
        .policy-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }
        
        .policy-table th {
            background: rgba(45, 217, 143, 0.2);
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #2dd98f;
        }
        
        .policy-table td {
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .policy-table tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .update-timestamp {
            background: rgba(45, 217, 143, 0.1);
            padding: 15px;
            border-radius: 10px;
            margin-top: 30px;
            border-left: 4px solid #2dd98f;
        }
        
        @media (max-width: 767px) {
            .policy-section {
                padding: 30px 20px;
            }
            
            .policy-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>



      <!-- breadcrumb start -->
    <section class="breadcrumb bg_img" data-background="<?php echo e(asset('public/images/breadcrumb-bg.jpg')); ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="breadcrumb__title text-center">Policies & Compliance</h1>
                    <div class="bread-crumb text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Policies & Compliance</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__icon">
            <div class="icon icon--1"><img src="<?php echo e(asset('public/images/bc-icon-1.png')); ?>" alt="icon"></div>
            <div class="icon icon--2"><img src="<?php echo e(asset('public/images/bc-icon-2.png')); ?>" alt="icon"></div>
            <div class="icon icon--3"><img src="<?php echo e(asset('public/images/bc-icon-3.png')); ?>" alt="icon"></div>
            <div class="icon icon--4"><img src="<?php echo e(asset('public/images/bc-icon-4.png')); ?>" alt="icon"></div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- policies hero start -->
    <section class="hero corporate-hero pt-100 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero--sec-titlt">
                        <h1 class="title wow skewIn">Our Commitment to Security & Compliance</h1>
                    </div>
                    <p class="xb-item--content wow skewIn" data-wow-delay="0.2s">At Meme Bull, we prioritize security, transparency, and regulatory compliance in everything we do. Our robust policies ensure your trading experience is safe, secure, and compliant with global standards.</p>
                    <div class="hero__btn wow skewIn" data-wow-delay="0.3s">
                        <a class="them-btn" href="#compliance-framework">
                            <span class="btn_label" data-text="View Compliance Framework">View Compliance Framework</span>
                            <span class="btn_icon">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow skewInImg">
                        <img src="<?php echo e(asset('public/images/compliance-hero.png')); ?>" alt="Security & Compliance">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- policies hero end -->

    <!-- compliance badges start -->
    <section class="feature pt-80 pb-80">
        <div class="container">
            <div class="section-title text-center mb-60">
                <h2 class="title wow skewIn">Our Compliance Standards</h2>
                <p class="xb-item--content mt-20 wow skewIn" data-wow-delay="0.1s">Adhering to the highest industry standards and regulatory requirements</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge wow skewIn">
                        <div class="policy-icon mx-auto">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <h4 class="xb-item--title text-center">GDPR Compliant</h4>
                        <p class="xb-item--content text-center">Full compliance with EU data protection regulations</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge wow skewIn" data-wow-delay="0.1s">
                        <div class="policy-icon mx-auto">
                            <i class="fas fa-lock fa-2x"></i>
                        </div>
                        <h4 class="xb-item--title text-center">SOC 2 Type II</h4>
                        <p class="xb-item--content text-center">Enterprise-grade security and availability controls</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge wow skewIn" data-wow-delay="0.2s">
                        <div class="policy-icon mx-auto">
                            <i class="fas fa-balance-scale fa-2x"></i>
                        </div>
                        <h4 class="xb-item--title text-center">AML/KYC</h4>
                        <p class="xb-item--content text-center">Anti-money laundering and know-your-customer compliance</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge wow skewIn" data-wow-delay="0.3s">
                        <div class="policy-icon mx-auto">
                            <i class="fas fa-certificate fa-2x"></i>
                        </div>
                        <h4 class="xb-item--title text-center">ISO 27001</h4>
                        <p class="xb-item--content text-center">Information security management system certification</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- compliance badges end -->

    <!-- security policies start -->
    <section class="pt-80 pb-80" style="background: rgba(13, 11, 51, 0.5);">
        <div class="container">
            <div class="policy-section wow skewIn">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="policy-icon">
                            <i class="fas fa-user-shield fa-2x"></i>
                        </div>
                        <h2 class="xb-item--title">Security Policy</h2>
                        <p class="xb-item--content">Our comprehensive security framework protects your data and assets</p>
                    </div>
                    <div class="col-lg-8">
                        <ul class="policy-list">
                            <li><strong>End-to-End Encryption:</strong> All data transmissions are encrypted using AES-256 encryption</li>
                            <li><strong>Multi-Factor Authentication:</strong> Required for all account access and transactions</li>
                            <li><strong>Cold Storage:</strong> 98% of user assets stored in offline, geographically distributed cold wallets</li>
                            <li><strong>Regular Security Audits:</strong> Third-party penetration testing and security assessments quarterly</li>
                            <li><strong>DDoS Protection:</strong> Advanced distributed denial-of-service protection</li>
                            <li><strong>Incident Response:</strong> 24/7 security monitoring and incident response team</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="policy-section wow skewIn" data-wow-delay="0.1s">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="policy-icon">
                            <i class="fas fa-balance-scale-right fa-2x"></i>
                        </div>
                        <h2 class="xb-item--title">Privacy Policy</h2>
                        <p class="xb-item--content">Your privacy is our priority. We handle your data with care and transparency</p>
                    </div>
                    <div class="col-lg-8">
                        <ul class="policy-list">
                            <li><strong>Data Minimization:</strong> We collect only essential data required for service delivery</li>
                            <li><strong>Transparent Data Usage:</strong> Clear disclosure of how we use your information</li>
                            <li><strong>User Control:</strong> Full control over your data and privacy settings</li>
                            <li><strong>Data Retention:</strong> Strict data retention policies with automatic deletion schedules</li>
                            <li><strong>Third-Party Sharing:</strong> Limited sharing with verified partners under strict agreements</li>
                            <li><strong>Right to Access & Delete:</strong> Users can request access to or deletion of their data</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="policy-section wow skewIn" data-wow-delay="0.2s">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="policy-icon">
                            <i class="fas fa-file-contract fa-2x"></i>
                        </div>
                        <h2 class="xb-item--title">Terms of Service</h2>
                        <p class="xb-item--content">Clear guidelines for using our platform and services</p>
                    </div>
                    <div class="col-lg-8">
                        <ul class="policy-list">
                            <li><strong>Service Agreement:</strong> Comprehensive terms governing platform use</li>
                            <li><strong>User Responsibilities:</strong> Clear expectations for user conduct and compliance</li>
                            <li><strong>Intellectual Property:</strong> Protection of platform IP and user content rights</li>
                            <li><strong>Dispute Resolution:</strong> Fair and transparent dispute resolution process</li>
                            <li><strong>Service Modifications:</strong> Terms regarding platform updates and changes</li>
                            <li><strong>Termination Policy:</strong> Conditions for account suspension or termination</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- security policies end -->

    <!-- compliance framework start -->
    <section class="pt-100 pb-100" id="compliance-framework">
        <div class="container">
            <div class="section-title text-center mb-60">
                <h2 class="title wow skewIn">Compliance Framework</h2>
                <p class="xb-item--content mt-20 wow skewIn" data-wow-delay="0.1s">Our multi-layered approach to regulatory compliance and risk management</p>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="policy-section">
                        <h3 class="xb-item--title mb-30">Regulatory Compliance Matrix</h3>
                        
                        <div class="table-responsive">
                            <table class="policy-table">
                                <thead>
                                    <tr>
                                        <th>Regulation</th>
                                        <th>Jurisdiction</th>
                                        <th>Status</th>
                                        <th>Last Audit</th>
                                        <th>Next Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>General Data Protection Regulation (GDPR)</td>
                                        <td>European Union</td>
                                        <td><span class="badge bg-success">Fully Compliant</span></td>
                                        <td>March 15, 2024</td>
                                        <td>September 15, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>California Consumer Privacy Act (CCPA)</td>
                                        <td>California, USA</td>
                                        <td><span class="badge bg-success">Fully Compliant</span></td>
                                        <td>February 28, 2024</td>
                                        <td>August 28, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Anti-Money Laundering (AML) Directive</td>
                                        <td>Global</td>
                                        <td><span class="badge bg-success">Fully Compliant</span></td>
                                        <td>January 20, 2024</td>
                                        <td>July 20, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Know Your Customer (KYC) Requirements</td>
                                        <td>Global</td>
                                        <td><span class="badge bg-success">Fully Compliant</span></td>
                                        <td>April 5, 2024</td>
                                        <td>October 5, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Card Industry (PCI) DSS</td>
                                        <td>Global</td>
                                        <td><span class="badge bg-warning">Level 1 Certification Pending</span></td>
                                        <td>December 15, 2023</td>
                                        <td>June 15, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Financial Conduct Authority (FCA) Guidelines</td>
                                        <td>United Kingdom</td>
                                        <td><span class="badge bg-info">Partial Compliance</span></td>
                                        <td>November 30, 2023</td>
                                        <td>May 30, 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="update-timestamp">
                            <p><i class="fas fa-info-circle mr-2"></i> <strong>Last Updated:</strong> May 15, 2024 | <strong>Next Comprehensive Review:</strong> November 15, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- compliance framework end -->

    <!-- risk management start -->
    <section class="feature pt-80 pb-80" style="background: rgba(13, 11, 51, 0.7);">
        <div class="container">
            <div class="section-title text-center mb-60">
                <h2 class="title wow skewIn">Risk Management Framework</h2>
                <p class="xb-item--content mt-20 wow skewIn" data-wow-delay="0.1s">Proactive identification, assessment, and mitigation of risks</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature corporate-feature mb-30 wow skewIn">
                        <div class="xb-item--holder">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/icon-risk-assessment.png')); ?>" alt="Risk Assessment">
                            </div>
                            <h3 class="xb-item--title">Risk Assessment</h3>
                            <p class="xb-item--content">Comprehensive risk identification and evaluation processes with quarterly reviews and threat modeling.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature corporate-feature mb-30 wow skewIn" data-wow-delay="0.1s">
                        <div class="xb-item--holder">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/icon-mitigation.png')); ?>" alt="Risk Mitigation">
                            </div>
                            <h3 class="xb-item--title">Risk Mitigation</h3>
                            <p class="xb-item--content">Proactive controls and security measures including automated threat detection and response systems.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="xb-feature corporate-feature mb-30 wow skewIn" data-wow-delay="0.2s">
                        <div class="xb-item--holder">
                            <div class="xb-item--img">
                                <img src="<?php echo e(asset('public/images/icon-monitoring.png')); ?>" alt="Continuous Monitoring">
                            </div>
                            <h3 class="xb-item--title">Continuous Monitoring</h3>
                            <p class="xb-item--content">24/7 security operations center with real-time monitoring and automated alerting systems.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- risk management end -->

    <!-- document download section start -->
    <section class="feature pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="feature-crypto">
                        <div class="mobile-crypto text-center">
                            <h2 class="xb-item--title wow skewIn">Policy Documents</h2>
                            <p class="xb-item--content wow skewIn" data-wow-delay="0.1s">Download our comprehensive policy documents for detailed information</p>
                            
                            <div class="row mt-50">
                                <div class="col-md-4">
                                    <div class="compliance-badge document-card wow skewIn">
                                        <div class="policy-icon mx-auto">
                                            <i class="fas fa-file-pdf fa-2x"></i>
                                        </div>
                                        <h4 class="xb-item--title">Security Policy</h4>
                                        <p class="xb-item--content">Full security framework documentation</p>
                                        <a href="#" class="them-btn crp-btn mt-20" style="width: 100%;">
                                            <span class="btn_label" data-text="Download PDF">Download PDF</span>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="compliance-badge document-card wow skewIn" data-wow-delay="0.1s">
                                        <div class="policy-icon mx-auto">
                                            <i class="fas fa-file-contract fa-2x"></i>
                                        </div>
                                        <h4 class="xb-item--title">Privacy Policy</h4>
                                        <p class="xb-item--content">Complete privacy policy and data handling</p>
                                        <a href="#" class="them-btn crp-btn mt-20" style="width: 100%;">
                                            <span class="btn_label" data-text="Download PDF">Download PDF</span>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="compliance-badge document-card wow skewIn" data-wow-delay="0.2s">
                                        <div class="policy-icon mx-auto">
                                            <i class="fas fa-gavel fa-2x"></i>
                                        </div>
                                        <h4 class="xb-item--title">Terms of Service</h4>
                                        <p class="xb-item--content">Complete terms and conditions</p>
                                        <a href="#" class="them-btn crp-btn mt-20" style="width: 100%;">
                                            <span class="btn_label" data-text="Download PDF">Download PDF</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="update-timestamp mt-50">
                                <p><i class="fas fa-exclamation-triangle mr-2"></i> <strong>Important:</strong> These documents are legally binding. Please review them carefully before using our services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<script>
    // Initialize animations and functionality
    $(document).ready(function() {
        // Initialize Wow.js for animations
        new WOW().init();
        
        // Smooth scroll for anchor links
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            }
        });
        
        // Form submission handling
        $('.xb-item--form').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            var submitBtn = form.find('.them-btn');
            var originalText = submitBtn.find('.btn_label').data('text');
            
            // Show loading state
            submitBtn.find('.btn_label').text('Sending...');
            submitBtn.prop('disabled', true);
            
            // Simulate form submission
            setTimeout(function() {
                // Show success message
                submitBtn.find('.btn_label').text('Message Sent!');
                submitBtn.css('background-color', '#2dd98f');
                
                // Reset form after 2 seconds
                setTimeout(function() {
                    form.trigger('reset');
                    submitBtn.find('.btn_label').text(originalText);
                    submitBtn.prop('disabled', false);
                    submitBtn.css('background-color', '');
                }, 2000);
            }, 1500);
        });
        
        // Document download simulation
        $('.document-card .them-btn').on('click', function(e) {
            e.preventDefault();
            var btn = $(this);
            var originalText = btn.find('.btn_label').data('text');
            
            // Show downloading state
            btn.find('.btn_label').text('Downloading...');
            btn.prop('disabled', true);
            
            // Simulate download
            setTimeout(function() {
                btn.find('.btn_label').text('Download Complete!');
                btn.css('background-color', '#2dd98f');
                
                // Reset after 2 seconds
                setTimeout(function() {
                    btn.find('.btn_label').text(originalText);
                    btn.prop('disabled', false);
                    btn.css('background-color', '');
                }, 2000);
            }, 1500);
        });
    });
</script>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/policy.blade.php ENDPATH**/ ?>
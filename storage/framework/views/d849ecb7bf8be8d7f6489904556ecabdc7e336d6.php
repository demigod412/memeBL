

<?php $__env->startSection('title', 'Terms'); ?>

<?php $__env->startSection('content'); ?>

<style>
    /* Premium Minimalist User Agreement Styles */
    .agreement-minimal {
        background: #080B18;
        position: relative;
        overflow: hidden;
    }
    
    .agreement-minimal::before {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.08) 0%, transparent 70%);
        top: -200px;
        right: -100px;
    }
    
    .agreement-minimal::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(74, 33, 239, 0.08) 0%, transparent 70%);
        bottom: -150px;
        left: -100px;
    }
    
    .agreement-section-minimal {
        padding: 100px 0;
        position: relative;
        z-index: 1;
    }
    
    .agreement-header-minimal {
        min-height: 70vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #080B18 0%, #0d0b33 100%);
        position: relative;
        overflow: hidden;
    }
    
    .agreement-header-minimal::before {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.05) 0%, transparent 70%);
        top: -250px;
        right: -150px;
    }
    
    .agreement-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 50px 40px;
        margin-bottom: 40px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .agreement-card::before {
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
    
    .agreement-card:hover::before {
        transform: translateX(0);
    }
    
    .agreement-card:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .agreement-icon-minimal {
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
        position: relative;
    }
    
    .agreement-icon-minimal::after {
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        border: 2px solid rgba(45, 217, 143, 0.2);
        border-radius: 25px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .agreement-card:hover .agreement-icon-minimal::after {
        opacity: 1;
    }
    
    .clause-card-minimal {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 25px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .clause-card-minimal::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(180deg, #2DD98F, #4a21ef);
        transform: scaleY(0);
        transform-origin: top;
        transition: transform 0.3s ease;
    }
    
    .clause-card-minimal:hover::before {
        transform: scaleY(1);
    }
    
    .clause-card-minimal:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(45, 217, 143, 0.2);
    }
    
    .clause-number-minimal {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        color: white;
        border-radius: 12px;
        font-weight: 700;
        font-size: 16px;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .agreement-nav-minimal {
        position: sticky;
        top: 120px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        backdrop-filter: blur(10px);
    }
    
    .agreement-nav-minimal ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }
    
    .agreement-nav-minimal li {
        margin-bottom: 12px;
        position: relative;
    }
    
    .agreement-nav-minimal a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        padding: 12px 15px;
        display: flex;
        align-items: center;
        border-radius: 10px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .agreement-nav-minimal a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(180deg, #2DD98F, #4a21ef);
        transform: translateX(-100%);
        transition: transform 0.3s ease;
    }
    
    .agreement-nav-minimal a:hover {
        background: rgba(45, 217, 143, 0.1);
        color: #2DD98F;
        padding-left: 20px;
    }
    
    .agreement-nav-minimal a:hover::before {
        transform: translateX(0);
    }
    
    .agreement-nav-minimal a.active {
        background: rgba(45, 217, 143, 0.15);
        color: #2DD98F;
        padding-left: 20px;
    }
    
    .agreement-nav-minimal a.active::before {
        transform: translateX(0);
    }
    
    .terms-table-minimal {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin: 25px 0;
        border-radius: 15px;
        overflow: hidden;
    }
    
    .terms-table-minimal thead {
        background: rgba(45, 217, 143, 0.1);
    }
    
    .terms-table-minimal th {
        padding: 20px;
        text-align: left;
        color: #2DD98F;
        font-weight: 600;
        border-bottom: 2px solid rgba(45, 217, 143, 0.2);
    }
    
    .terms-table-minimal td {
        padding: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: background-color 0.3s ease;
    }
    
    .terms-table-minimal tbody tr:hover {
        background: rgba(45, 217, 143, 0.05);
    }
    
    .warning-note-minimal {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.08), rgba(74, 33, 239, 0.08));
        border-left: 4px solid #2DD98F;
        padding: 30px;
        border-radius: 0 15px 15px 0;
        margin: 30px 0;
        position: relative;
        overflow: hidden;
    }
    
    .warning-note-minimal::before {
        content: '⚠';
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 60px;
        color: rgba(45, 217, 143, 0.1);
        opacity: 0.5;
    }
    
    .danger-note-minimal {
        background: linear-gradient(135deg, rgba(220, 53, 69, 0.08), rgba(108, 117, 125, 0.08));
        border-left: 4px solid #dc3545;
        padding: 30px;
        border-radius: 0 15px 15px 0;
        margin: 30px 0;
        position: relative;
        overflow: hidden;
    }
    
    .danger-note-minimal::before {
        content: '⚡';
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 60px;
        color: rgba(220, 53, 69, 0.1);
        opacity: 0.5;
    }
    
    .acceptance-box-minimal {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.1), rgba(74, 33, 239, 0.1));
        border: 2px solid rgba(45, 217, 143, 0.3);
        border-radius: 20px;
        padding: 50px;
        text-align: center;
        margin: 50px 0;
        position: relative;
        overflow: hidden;
    }
    
    .acceptance-box-minimal::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        right: -50%;
        bottom: -50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.05) 0%, transparent 70%);
        animation: pulse 4s ease-in-out infinite;
    }
    
    .last-updated-minimal {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        margin-top: 50px;
    }
    
    .scroll-to-top-minimal {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        color: white;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        border: none;
        box-shadow: 0 10px 30px rgba(45, 217, 143, 0.3);
    }
    
    .scroll-to-top-minimal.active {
        opacity: 1;
        visibility: visible;
        bottom: 80px;
    }
    
    .scroll-to-top-minimal:hover {
        transform: translateY(-5px) rotate(360deg);
        box-shadow: 0 15px 40px rgba(45, 217, 143, 0.5);
    }
    
    .print-btn-minimal {
        background: transparent;
        border: 2px solid rgba(45, 217, 143, 0.3);
        color: #2DD98F;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }
    
    .print-btn-minimal:hover {
        background: rgba(45, 217, 143, 0.1);
        border-color: #2DD98F;
        transform: translateY(-2px);
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .section-title-minimal {
        position: relative;
        display: inline-block;
        margin-bottom: 40px;
    }
    
    .section-title-minimal::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #2DD98F, #4a21ef);
        border-radius: 2px;
    }
    
    @keyframes  pulse {
        0%, 100% {
            transform: scale(1);
            opacity: 0.3;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.5;
        }
    }
    
    @media (max-width: 768px) {
        .agreement-section-minimal {
            padding: 60px 0;
        }
        
        .agreement-header-minimal {
            min-height: auto;
            padding: 80px 0;
        }
        
        .agreement-card {
            padding: 30px 20px;
        }
        
        .agreement-nav-minimal {
            position: static;
            margin-bottom: 30px;
        }
        
        .terms-table-minimal {
            display: block;
            overflow-x: auto;
        }
        
        .scroll-to-top-minimal {
            bottom: 70px;
            right: 20px;
            width: 50px;
            height: 50px;
        }
    }
</style>

<div class="agreement-minimal">
    <!-- Hero Header -->
    <section class="agreement-header-minimal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="mb-4">
                        <span style="display: inline-block; padding: 8px 20px; background: rgba(45, 217, 143, 0.15); border: 1px solid rgba(45, 217, 143, 0.3); border-radius: 20px; color: #2DD98F; font-size: 14px; font-weight: 600;">
                            Legal Document
                        </span>
                    </div>
                    
                    <h1 class="display-4 fw-bold mb-4 gradient-text">
                        User Agreement & Terms of Service
                    </h1>
                    
                    <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.85); font-size: 22px; line-height: 1.6;">
                        This Agreement constitutes a legally binding contract between you and Meme Bull Technologies Ltd. governing your access to and use of our automated trading platform.
                    </p>
                    
                    <div class="danger-note-minimal">
                        <h5 class="fw-bold mb-3"><i class="fas fa-exclamation-triangle me-2"></i> IMPORTANT LEGAL NOTICE</h5>
                        <p class="mb-0" style="color: rgba(255, 255, 255, 0.9);">
                            By accessing or using the Meme Bull platform, you acknowledge that you have read, understood, and agree to be bound by all terms and conditions contained in this Agreement. If you do not agree, you must not access or use our services.
                        </p>
                    </div>
                    
                    <div class="hero-buttons mt-5">
                        <a href="#acceptance" class="them-btn me-3">
                            <span class="btn_label" data-text="Read Agreement">Read Agreement</span>
                            <span class="btn_icon">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                </svg>
                            </span>
                        </a>
                        <button class="print-btn-minimal">
                            <i class="fas fa-print"></i>
                            <span>Print Document</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agreement Content -->
    <section class="agreement-section-minimal">
        <div class="container">
            <div class="row">
                <!-- Navigation Sidebar -->
                <div class="col-lg-3">
                    <div class="agreement-nav-minimal wow fadeInLeft">
                        <h4 class="fw-bold mb-4" style="color: #2DD98F;">Quick Navigation</h4>
                        <ul>
                            <li><a href="#acceptance" class="active">1. Acceptance of Terms</a></li>
                            <li><a href="#eligibility">2. Eligibility Requirements</a></li>
                            <li><a href="#account">3. Account Registration</a></li>
                            <li><a href="#services">4. Services Description</a></li>
                            <li><a href="#fees">5. Fees & Payments</a></li>
                            <li><a href="#risk">6. Risk Disclosure</a></li>
                            <li><a href="#prohibited">7. Prohibited Uses</a></li>
                            <li><a href="#liability">8. Limitation of Liability</a></li>
                            <li><a href="#termination">9. Termination</a></li>
                            <li><a href="#disputes">10. Dispute Resolution</a></li>
                        </ul>
                        
                        <div class="mt-4 pt-4 border-top border-white-10">
                            <div class="text-center">
                                <button class="print-btn-minimal w-100">
                                    <i class="fas fa-download"></i>
                                    <span>Download PDF</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="col-lg-9">
                    <!-- Section 1: Acceptance -->
                    <div class="agreement-card wow fadeInUp" id="acceptance">
                        <div class="agreement-icon-minimal">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h2 class="section-title-minimal">1. Acceptance of Terms</h2>
                        <p class="mb-4" style="color: rgba(255, 255, 255, 0.8);">
                            <strong>Effective Date:</strong> May 15, 2024
                        </p>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">1.1</span>
                                <span>Binding Agreement</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                This Agreement constitutes a legally binding contract between you ("User," "you," or "your") and Meme Bull Technologies Ltd. ("Company," "we," "us," or "our"). By accessing, downloading, installing, or using the Meme Bull platform, website, mobile application, or any related services (collectively, the "Services"), you agree to be bound by all terms and conditions contained herein.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">1.2</span>
                                <span>Modifications to Agreement</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                We reserve the right to modify this Agreement at any time. All modifications will be effective immediately upon posting on our platform. Your continued use of the Services following any modifications constitutes your acceptance of the revised Agreement. We will notify you of material changes via email or through the platform interface.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">1.3</span>
                                <span>Supplemental Terms</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                Your use of specific Services may be subject to additional guidelines, terms, or rules ("Supplemental Terms"). All Supplemental Terms are incorporated by reference into this Agreement. In the event of any conflict between this Agreement and Supplemental Terms, the Supplemental Terms shall control with respect to the specific Service.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Section 2: Eligibility -->
                    <div class="agreement-card wow fadeInUp" data-wow-delay="0.1s" id="eligibility">
                        <div class="agreement-icon-minimal">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h2 class="section-title-minimal">2. Eligibility Requirements</h2>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">2.1</span>
                                <span>Age Requirement</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                You must be at least 18 years old or the age of majority in your jurisdiction (whichever is greater) to use our Services. By using the Services, you represent and warrant that you meet this age requirement.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">2.2</span>
                                <span>Legal Capacity</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                You represent and warrant that you have the legal capacity to enter into this Agreement and that you are not prohibited from receiving or using our Services under applicable laws, regulations, or sanctions programs.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">2.3</span>
                                <span>Geographic Restrictions</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                The Services are not available in all jurisdictions. You are solely responsible for determining whether your use of our Services is legal in your jurisdiction. We reserve the right to restrict access to our Services from certain locations.
                            </p>
                            
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="terms-table-minimal">
                                        <thead>
                                            <tr>
                                                <th>Restricted Jurisdictions</th>
                                                <th>Restriction Type</th>
                                                <th>Effective Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>United States of America</td>
                                                <td>Full Restriction</td>
                                                <td>January 1, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>China</td>
                                                <td>Full Restriction</td>
                                                <td>January 1, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>Iran, North Korea, Cuba</td>
                                                <td>Full Restriction</td>
                                                <td>January 1, 2024</td>
                                            </tr>
                                            <tr>
                                                <td>European Union (Specific Countries)</td>
                                                <td>Limited Services</td>
                                                <td>March 15, 2024</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Section 3: Account -->
                    <div class="agreement-card wow fadeInUp" data-wow-delay="0.2s" id="account">
                        <div class="agreement-icon-minimal">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <h2 class="section-title-minimal">3. Account Registration & Security</h2>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">3.1</span>
                                <span>Account Creation</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                To access certain Services, you must create an account. You agree to provide accurate, current, and complete information during registration and to update such information to keep it accurate, current, and complete.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">3.2</span>
                                <span>Account Security</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                You are solely responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You must immediately notify us of any unauthorized use of your account or any other security breach.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">3.3</span>
                                <span>Identity Verification</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                We may require you to provide additional information and documents for identity verification purposes. You authorize us to make inquiries, directly or through third parties, to verify your identity and protect against fraud.
                            </p>
                        </div>
                        
                        <div class="warning-note-minimal mt-4">
                            <h6 class="fw-bold mb-3"><i class="fas fa-shield-alt me-2"></i> SECURITY REQUIREMENTS</h6>
                            <ul class="mb-0" style="color: rgba(255, 255, 255, 0.8);">
                                <li>Multi-factor authentication (MFA) is mandatory for all accounts</li>
                                <li>Regular password changes are recommended every 90 days</li>
                                <li>Account activity is monitored for suspicious behavior</li>
                                <li>API keys must be stored securely and never shared</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Section 4: Services -->
                    <div class="agreement-card wow fadeInUp" data-wow-delay="0.3s" id="services">
                        <div class="agreement-icon-minimal">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h2 class="section-title-minimal">4. Services Description</h2>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">4.1</span>
                                <span>Automated Trading Services</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                Meme Bull provides automated trading services using proprietary algorithms. Our platform executes trades based on predetermined strategies and market conditions. We do not provide financial advice, and all trading decisions are made automatically by our algorithms.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">4.2</span>
                                <span>Service Limitations</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                We make no guarantees regarding the performance of our Services. Past performance is not indicative of future results. The cryptocurrency markets are highly volatile, and you may experience significant losses.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">4.3</span>
                                <span>Platform Availability</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                We strive to maintain 99.9% platform availability but do not guarantee uninterrupted access to our Services. We may perform maintenance, updates, or modifications that temporarily interrupt Service availability.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Section 5: Fees -->
                    <div class="agreement-card wow fadeInUp" data-wow-delay="0.4s" id="fees">
                        <div class="agreement-icon-minimal">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h2 class="section-title-minimal">5. Fees & Payments</h2>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">5.1</span>
                                <span>Fee Structure</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                Our fee structure consists of subscription fees and performance fees. All fees are displayed in your account dashboard and are subject to change with 30 days' notice.
                            </p>
                            
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="terms-table-minimal">
                                        <thead>
                                            <tr>
                                                <th>Service Tier</th>
                                                <th>Monthly Subscription</th>
                                                <th>Performance Fee</th>
                                                <th>Minimum Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Basic</td>
                                                <td>$99/month</td>
                                                <td>15% of profits</td>
                                                <td>$1,000</td>
                                            </tr>
                                            <tr>
                                                <td>Professional</td>
                                                <td>$299/month</td>
                                                <td>12% of profits</td>
                                                <td>$10,000</td>
                                            </tr>
                                            <tr>
                                                <td>Enterprise</td>
                                                <td>Custom Pricing</td>
                                                <td>10% of profits</td>
                                                <td>$100,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">5.2</span>
                                <span>Payment Authorization</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                By using our Services, you authorize us to charge applicable fees to your payment method on file. Fees are typically charged monthly in advance for subscription fees and monthly in arrears for performance fees.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">5.3</span>
                                <span>Refund Policy</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                Subscription fees are non-refundable. Performance fees are calculated based on realized profits and are non-refundable once charged. We may, at our sole discretion, issue refunds in exceptional circumstances.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Section 6: Risk -->
                    <div class="agreement-card wow fadeInUp" data-wow-delay="0.5s" id="risk">
                        <div class="agreement-icon-minimal">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h2 class="section-title-minimal">6. Risk Disclosure</h2>
                        
                        <div class="danger-note-minimal">
                            <h5 class="fw-bold mb-3"><i class="fas fa-skull-crossbones me-2"></i> HIGH RISK WARNING</h5>
                            <p class="mb-0" style="color: rgba(255, 255, 255, 0.9);">
                                Cryptocurrency trading involves substantial risk of loss and is not suitable for all investors. You should carefully consider whether trading is appropriate for you in light of your financial condition.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">6.1</span>
                                <span>Market Risks</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                Cryptocurrency markets are highly volatile and can be affected by regulatory changes, market manipulation, technological issues, and other factors beyond our control. Prices can fluctuate significantly in short periods.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">6.2</span>
                                <span>Technology Risks</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                Our Services rely on complex technology that may experience failures, bugs, or vulnerabilities. While we implement security measures, we cannot guarantee that our Services will be uninterrupted or error-free.
                            </p>
                        </div>
                        
                        <div class="clause-card-minimal">
                            <h5 class="fw-bold d-flex align-items-center mb-3">
                                <span class="clause-number-minimal">6.3</span>
                                <span>Third-Party Risks</span>
                            </h5>
                            <p style="color: rgba(255, 255, 255, 0.7); line-height: 1.8;">
                                Our Services interact with third-party exchanges, wallets, and service providers. We are not responsible for the actions, failures, or security breaches of these third parties.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Acceptance Section -->
                    <div class="acceptance-box-minimal wow fadeInUp" data-wow-delay="0.6s">
                        <div class="agreement-icon-minimal mx-auto mb-4">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="fw-bold mb-4" style="color: #2DD98F;">Agreement Acceptance</h3>
                        <p class="mb-4" style="color: rgba(255, 255, 255, 0.9); font-size: 18px; line-height: 1.6;">
                            By accessing or using the Meme Bull platform, you acknowledge that you have read, understood, and agree to be bound by all terms and conditions contained in this User Agreement.
                        </p>
                        
                        <div class="form-check mt-4 mb-3" style="text-align: left; max-width: 500px; margin: 0 auto;">
                            <input class="form-check-input" type="checkbox" value="" id="agreementAcceptance" style="width: 20px; height: 20px;">
                            <label class="form-check-label" for="agreementAcceptance" style="color: rgba(255, 255, 255, 0.9); font-size: 16px; margin-left: 10px;">
                                I have read and agree to the User Agreement, Privacy Policy, and all applicable terms
                            </label>
                        </div>
                        
                        <button class="them-btn mt-3" id="acceptAgreementBtn" disabled style="min-width: 200px;">
                            <span class="btn_label" data-text="Accept & Continue">Accept & Continue</span>
                        </button>
                        
                        <p class="mt-3" style="color: rgba(255, 255, 255, 0.6); font-size: 14px;">
                            If you do not agree with these terms, please discontinue use of our Services immediately.
                        </p>
                    </div>
                    
                    <!-- Last Updated -->
                    <div class="last-updated-minimal wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="fw-bold mb-3" style="color: #2DD98F;">Last Updated: May 15, 2024</h5>
                                <p class="mb-0" style="color: rgba(255, 255, 255, 0.7);">
                                    Version: 3.2.1 | Effective Date: May 15, 2024 | Previous Version: April 1, 2024
                                </p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <button class="print-btn-minimal">
                                    <i class="fas fa-file-pdf"></i>
                                    <span>Download PDF</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Scroll to Top Button -->
    <button class="scroll-to-top-minimal">
        <i class="fas fa-chevron-up"></i>
    </button>
</div>

<script>
    // Initialize animations
    new WOW().init();
    
    $(document).ready(function() {
        // Custom scroll to top button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.scroll-to-top-minimal').addClass('active');
            } else {
                $('.scroll-to-top-minimal').removeClass('active');
            }
        });
        
        $('.scroll-to-top-minimal').click(function() {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
        
        // Smooth scroll for navigation links
        $('.agreement-nav-minimal a').click(function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 100
            }, 800);
            
            // Update active state in nav
            $('.agreement-nav-minimal a').removeClass('active');
            $(this).addClass('active');
        });
        
        // Update nav active state on scroll
        $(window).scroll(function() {
            var scrollPosition = $(window).scrollTop() + 150;
            
            $('.agreement-card').each(function() {
                var sectionId = $(this).attr('id');
                var sectionTop = $(this).offset().top;
                var sectionBottom = sectionTop + $(this).outerHeight();
                
                if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
                    $('.agreement-nav-minimal a').removeClass('active');
                    $('.agreement-nav-minimal a[href="#' + sectionId + '"]').addClass('active');
                }
            });
        });
        
        // Agreement acceptance checkbox
        $('#agreementAcceptance').change(function() {
            if ($(this).is(':checked')) {
                $('#acceptAgreementBtn').prop('disabled', false);
            } else {
                $('#acceptAgreementBtn').prop('disabled', true);
            }
        });
        
        // Agreement acceptance button
        $('#acceptAgreementBtn').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var originalText = btn.find('.btn_label').data('text');
            
            // Show accepting state
            btn.find('.btn_label').text('Processing...');
            btn.prop('disabled', true);
            
            // Simulate acceptance process
            setTimeout(function() {
                btn.find('.btn_label').text('Agreement Accepted!');
                btn.css('background', 'linear-gradient(135deg, #2DD98F, #4a21ef)');
                
                // Show success message
                $('<div class="alert alert-success mt-3" style="background: rgba(45, 217, 143, 0.15); border: 1px solid rgba(45, 217, 143, 0.3); color: #2DD98F; border-radius: 10px; padding: 15px;">Thank you! Your acceptance has been recorded. You may now proceed to use our platform.</div>').insertAfter(btn).hide().fadeIn();
                
                // Store acceptance in localStorage
                localStorage.setItem('userAgreementAccepted', 'true');
                localStorage.setItem('agreementVersion', '3.2.1');
                localStorage.setItem('acceptanceDate', new Date().toISOString());
                
                // Redirect after 3 seconds
                setTimeout(function() {
                    window.location.href = '<?php echo e(route("dashboard")); ?>';
                }, 3000);
            }, 1500);
        });
        
        // Print agreement functionality
        $('.print-btn-minimal').click(function() {
            // Create printable version
            var printContent = $('#printableContent');
            
            if (!printContent.length) {
                // Create printable content if it doesn't exist
                printContent = $('<div id="printableContent" style="display:none;"></div>');
                $('body').append(printContent);
                
                // Copy agreement content
                var agreementHTML = $('.col-lg-9').html();
                printContent.html('<div class="container" style="padding: 50px;">' + agreementHTML + '</div>');
            }
            
            // Open print dialog
            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>Meme Bull User Agreement</title>');
            printWindow.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">');
            printWindow.document.write('<style>body { font-family: Arial, sans-serif; } @media  print { .no-print { display: none; } }</style>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(printContent.html());
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.focus();
            
            setTimeout(function() {
                printWindow.print();
                printWindow.close();
            }, 500);
        });
        
        // Check if user has already accepted agreement
        if (localStorage.getItem('userAgreementAccepted') === 'true') {
            $('#agreementAcceptance').prop('checked', true);
            $('#acceptAgreementBtn').prop('disabled', false);
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/home/useragreement.blade.php ENDPATH**/ ?>
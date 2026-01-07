<?php $__env->startSection('title', 'Terms'); ?>

<?php $__env->startSection('content'); ?>

 <style>
        /* Additional styles for user agreement page */
        .agreement-section {
            background: #0d0b33;
            border-radius: 20px;
            padding: 50px;
            margin-bottom: 40px;
            position: relative;
            z-index: 1;
        }
        
        .agreement-section::before {
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
        
        .agreement-header {
            border-bottom: 2px solid #2dd98f;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        .agreement-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2dd98f 0%, #4a21ef 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .clause-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            border-left: 4px solid #2dd98f;
            transition: transform 0.3s ease;
        }
        
        .clause-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.08);
        }
        
        .clause-number {
            display: inline-block;
            width: 30px;
            height: 30px;
            background: #2dd98f;
            color: #080b18;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            font-weight: bold;
            margin-right: 15px;
        }
        
        .acceptance-box {
            background: rgba(45, 217, 143, 0.1);
            border: 2px solid #2dd98f;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            margin-top: 40px;
        }
        
        .terms-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .terms-table th {
            background: rgba(45, 217, 143, 0.2);
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #2dd98f;
        }
        
        .terms-table td {
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .terms-table tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .important-note {
            background: rgba(255, 193, 7, 0.1);
            border-left: 4px solid #ffc107;
            padding: 20px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }
        
        .warning-note {
            background: rgba(220, 53, 69, 0.1);
            border-left: 4px solid #dc3545;
            padding: 20px;
            border-radius: 0 10px 10px 0;
            margin: 25px 0;
        }
        
        .last-updated {
            background: rgba(13, 11, 51, 0.8);
            padding: 15px;
            border-radius: 10px;
            margin-top: 30px;
            border: 1px solid rgba(45, 217, 143, 0.3);
        }
        
        .scroll-to-top {
            position: fixed;
            bottom: 100px;
            right: 30px;
            background: #2dd98f;
            color: #080b18;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .scroll-to-top.active {
            opacity: 1;
            visibility: visible;
            bottom: 80px;
        }
        
        .scroll-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(45, 217, 143, 0.4);
        }
        
        .agreement-nav {
            position: sticky;
            top: 100px;
            background: #0d0b33;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid rgba(45, 217, 143, 0.3);
        }
        
        .agreement-nav ul {
            list-style: none;
            padding-left: 0;
        }
        
        .agreement-nav li {
            margin-bottom: 10px;
        }
        
        .agreement-nav a {
            color: #c1c7de;
            text-decoration: none;
            padding: 8px 15px;
            display: block;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .agreement-nav a:hover {
            background: rgba(45, 217, 143, 0.1);
            color: #2dd98f;
            padding-left: 20px;
        }
        
        @media (max-width: 767px) {
            .agreement-section {
                padding: 30px 20px;
            }
            
            .agreement-nav {
                position: static;
                margin-bottom: 30px;
            }
            
            .terms-table {
                display: block;
                overflow-x: auto;
            }
            
            .scroll-to-top {
                bottom: 70px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
        }
        
        .print-btn {
            background: transparent;
            border: 2px solid #2dd98f;
            color: #2dd98f;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .print-btn:hover {
            background: #2dd98f;
            color: #080b18;
            transform: translateY(-2px);
        }
    </style>


 <!-- breadcrumb start -->
    <section class="breadcrumb bg_img" data-background="<?php echo e(asset('public/images/breadcrumb-bg.jpg')); ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="breadcrumb__title text-center">User Agreement</h1>
                    <div class="bread-crumb text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Agreement</li>
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

    <!-- user agreement hero start -->
    <section class="hero corporate-hero pt-100 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero--sec-titlt">
                        <h1 class="title wow skewIn">Terms & Conditions Governing Platform Use</h1>
                    </div>
                    <p class="xb-item--content wow skewIn" data-wow-delay="0.2s">This User Agreement ("Agreement") constitutes a legally binding contract between you and Meme Bull Technologies Ltd. governing your access to and use of the Meme Bull automated trading platform.</p>
                    
                    <div class="warning-note wow skewIn" data-wow-delay="0.3s">
                        <h5><i class="fas fa-exclamation-triangle mr-2"></i> IMPORTANT NOTICE</h5>
                        <p class="mb-0">By accessing or using the Meme Bull platform, you acknowledge that you have read, understood, and agree to be bound by all terms and conditions contained in this Agreement. If you do not agree, you must not access or use our services.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow skewInImg">
                        <img src="<?php echo e(asset('public/images/agreement-hero.png')); ?>" alt="User Agreement">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user agreement hero end -->

    <!-- quick navigation start -->
    <section class="pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="agreement-nav wow skewIn">
                        <h4 class="xb-item--title mb-20">Quick Navigation</h4>
                        <ul>
                            <li><a href="#acceptance">1. Acceptance</a></li>
                            <li><a href="#eligibility">2. Eligibility</a></li>
                            <li><a href="#account">3. Account Terms</a></li>
                            <li><a href="#services">4. Services Description</a></li>
                            <li><a href="#fees">5. Fees & Payments</a></li>
                            <li><a href="#risk">6. Risk Disclosure</a></li>
                            <li><a href="#prohibited">7. Prohibited Uses</a></li>
                            <li><a href="#liability">8. Liability</a></li>
                            <li><a href="#termination">9. Termination</a></li>
                            <li><a href="#disputes">10. Dispute Resolution</a></li>
                        </ul>
                        
                        <div class="mt-30">
                            <button class="print-btn w-100">
                                <i class="fas fa-print mr-2"></i> Print Agreement
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-9">
                    <!-- Agreement Content Start -->
                    <div class="agreement-section wow skewIn" id="acceptance">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-file-signature fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">1. Acceptance of Terms</h2>
                            <p class="xb-item--content">Effective Date: May 15, 2024</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">1.1</span> Binding Agreement</h5>
                            <p>This Agreement constitutes a legally binding contract between you ("User," "you," or "your") and Meme Bull Technologies Ltd. ("Company," "we," "us," or "our"). By accessing, downloading, installing, or using the Meme Bull platform, website, mobile application, or any related services (collectively, the "Services"), you agree to be bound by all terms and conditions contained herein.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">1.2</span> Modifications to Agreement</h5>
                            <p>We reserve the right to modify this Agreement at any time. All modifications will be effective immediately upon posting on our platform. Your continued use of the Services following any modifications constitutes your acceptance of the revised Agreement. We will notify you of material changes via email or through the platform interface.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">1.3</span> Supplemental Terms</h5>
                            <p>Your use of specific Services may be subject to additional guidelines, terms, or rules ("Supplemental Terms"). All Supplemental Terms are incorporated by reference into this Agreement. In the event of any conflict between this Agreement and Supplemental Terms, the Supplemental Terms shall control with respect to the specific Service.</p>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.1s" id="eligibility">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-user-check fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">2. Eligibility Requirements</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">2.1</span> Age Requirement</h5>
                            <p>You must be at least 18 years old or the age of majority in your jurisdiction (whichever is greater) to use our Services. By using the Services, you represent and warrant that you meet this age requirement.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">2.2</span> Legal Capacity</h5>
                            <p>You represent and warrant that you have the legal capacity to enter into this Agreement and that you are not prohibited from receiving or using our Services under applicable laws, regulations, or sanctions programs.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">2.3</span> Geographic Restrictions</h5>
                            <p>The Services are not available in all jurisdictions. You are solely responsible for determining whether your use of our Services is legal in your jurisdiction. We reserve the right to restrict access to our Services from certain locations.</p>
                            
                            <div class="terms-table mt-3">
                                <table>
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
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.2s" id="account">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-user-circle fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">3. Account Registration & Security</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">3.1</span> Account Creation</h5>
                            <p>To access certain Services, you must create an account. You agree to provide accurate, current, and complete information during registration and to update such information to keep it accurate, current, and complete.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">3.2</span> Account Security</h5>
                            <p>You are solely responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account. You must immediately notify us of any unauthorized use of your account or any other security breach.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">3.3</span> Identity Verification</h5>
                            <p>We may require you to provide additional information and documents for identity verification purposes. You authorize us to make inquiries, directly or through third parties, to verify your identity and protect against fraud.</p>
                        </div>
                        
                        <div class="important-note">
                            <h6><i class="fas fa-shield-alt mr-2"></i> SECURITY REQUIREMENTS</h6>
                            <ul class="mb-0">
                                <li>Multi-factor authentication (MFA) is mandatory for all accounts</li>
                                <li>Regular password changes are recommended every 90 days</li>
                                <li>Account activity is monitored for suspicious behavior</li>
                                <li>API keys must be stored securely and never shared</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.3s" id="services">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-robot fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">4. Services Description</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">4.1</span> Automated Trading Services</h5>
                            <p>Meme Bull provides automated trading services using proprietary algorithms. Our platform executes trades based on predetermined strategies and market conditions. We do not provide financial advice, and all trading decisions are made automatically by our algorithms.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">4.2</span> Service Limitations</h5>
                            <p>We make no guarantees regarding the performance of our Services. Past performance is not indicative of future results. The cryptocurrency markets are highly volatile, and you may experience significant losses.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">4.3</span> Platform Availability</h5>
                            <p>We strive to maintain 99.9% platform availability but do not guarantee uninterrupted access to our Services. We may perform maintenance, updates, or modifications that temporarily interrupt Service availability.</p>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.4s" id="fees">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-money-bill-wave fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">5. Fees & Payments</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">5.1</span> Fee Structure</h5>
                            <p>Our fee structure consists of subscription fees and performance fees. All fees are displayed in your account dashboard and are subject to change with 30 days' notice.</p>
                            
                            <div class="terms-table mt-3">
                                <table>
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
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">5.2</span> Payment Authorization</h5>
                            <p>By using our Services, you authorize us to charge applicable fees to your payment method on file. Fees are typically charged monthly in advance for subscription fees and monthly in arrears for performance fees.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">5.3</span> Refund Policy</h5>
                            <p>Subscription fees are non-refundable. Performance fees are calculated based on realized profits and are non-refundable once charged. We may, at our sole discretion, issue refunds in exceptional circumstances.</p>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.5s" id="risk">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-exclamation-triangle fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">6. Risk Disclosure</h2>
                        </div>
                        
                        <div class="warning-note">
                            <h5><i class="fas fa-skull-crossbones mr-2"></i> HIGH RISK WARNING</h5>
                            <p class="mb-0">Cryptocurrency trading involves substantial risk of loss and is not suitable for all investors. You should carefully consider whether trading is appropriate for you in light of your financial condition.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">6.1</span> Market Risks</h5>
                            <p>Cryptocurrency markets are highly volatile and can be affected by regulatory changes, market manipulation, technological issues, and other factors beyond our control. Prices can fluctuate significantly in short periods.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">6.2</span> Technology Risks</h5>
                            <p>Our Services rely on complex technology that may experience failures, bugs, or vulnerabilities. While we implement security measures, we cannot guarantee that our Services will be uninterrupted or error-free.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">6.3</span> Third-Party Risks</h5>
                            <p>Our Services interact with third-party exchanges, wallets, and service providers. We are not responsible for the actions, failures, or security breaches of these third parties.</p>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.6s" id="prohibited">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-ban fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">7. Prohibited Uses</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">7.1</span> Illegal Activities</h5>
                            <p>You may not use our Services for any illegal purpose or in violation of any laws, regulations, or sanctions programs. This includes but is not limited to money laundering, terrorist financing, fraud, or market manipulation.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">7.2</span> Platform Abuse</h5>
                            <p>You may not attempt to circumvent our security measures, reverse engineer our technology, or use automated systems to access our Services in violation of these terms.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">7.3</span> Consequences of Violation</h5>
                            <p>Violation of these prohibitions may result in immediate account termination, forfeiture of funds, and reporting to appropriate authorities.</p>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.7s" id="liability">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-gavel fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">8. Limitation of Liability</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">8.1</span> No Investment Advice</h5>
                            <p>We do not provide investment advice, financial advice, or trading recommendations. All trading decisions are made by our automated systems based on your selected strategies.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">8.2</span> Limitation of Damages</h5>
                            <p>To the maximum extent permitted by law, our total liability to you for any claims arising from or related to this Agreement shall not exceed the total fees you have paid to us in the six months preceding the claim.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">8.3</span> Force Majeure</h5>
                            <p>We shall not be liable for any failure or delay in performance due to circumstances beyond our reasonable control, including natural disasters, war, terrorism, or government actions.</p>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.8s" id="termination">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-door-closed fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">9. Termination</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">9.1</span> User Termination</h5>
                            <p>You may terminate this Agreement at any time by closing your account and ceasing use of our Services. Termination does not relieve you of any obligations to pay fees accrued prior to termination.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">9.2</span> Company Termination</h5>
                            <p>We may suspend or terminate your access to our Services at any time, with or without cause, and with or without notice. Reasons for termination may include violation of this Agreement, suspicious activity, or legal requirements.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">9.3</span> Post-Termination</h5>
                            <p>Upon termination, your right to use the Services immediately ceases. We may retain your information as required by law or for legitimate business purposes.</p>
                        </div>
                    </div>
                    
                    <div class="agreement-section wow skewIn" data-wow-delay="0.9s" id="disputes">
                        <div class="agreement-header">
                            <div class="agreement-icon">
                                <i class="fas fa-balance-scale fa-2x"></i>
                            </div>
                            <h2 class="xb-item--title">10. Dispute Resolution</h2>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">10.1</span> Governing Law</h5>
                            <p>This Agreement shall be governed by and construed in accordance with the laws of the British Virgin Islands, without regard to its conflict of law provisions.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">10.2</span> Arbitration Agreement</h5>
                            <p>Any dispute, controversy, or claim arising out of or relating to this Agreement shall be resolved through binding arbitration in accordance with the rules of the International Chamber of Commerce.</p>
                        </div>
                        
                        <div class="clause-card">
                            <h5><span class="clause-number">10.3</span> Class Action Waiver</h5>
                            <p>You agree to resolve disputes on an individual basis and waive any right to participate in class actions, class arbitrations, or representative actions.</p>
                        </div>
                    </div>
                    
                    <!-- Acceptance Section -->
                    <div class="acceptance-box wow skewIn">
                        <h3 class="xb-item--title">Agreement Acceptance</h3>
                        <p class="xb-item--content">By accessing or using the Meme Bull platform, you acknowledge that you have read, understood, and agree to be bound by all terms and conditions contained in this User Agreement.</p>
                        
                        <div class="form-check mt-4 mb-3" style="text-align: left; max-width: 500px; margin: 0 auto;">
                            <input class="form-check-input" type="checkbox" value="" id="agreementAcceptance">
                            <label class="form-check-label" for="agreementAcceptance">
                                I have read and agree to the User Agreement, Privacy Policy, and all applicable terms
                            </label>
                        </div>
                        
                        <button class="them-btn mt-3" id="acceptAgreementBtn" disabled>
                            <span class="btn_label" data-text="Accept & Continue">Accept & Continue</span>
                        </button>
                        
                        <p class="xb-item--content mt-3" style="font-size: 14px;">
                            If you do not agree with these terms, please discontinue use of our Services immediately.
                        </p>
                    </div>
                    
                    <div class="last-updated wow skewIn">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h5 class="xb-item--title">Last Updated: May 15, 2024</h5>
                                <p class="xb-item--content mb-0">Version: 3.2.1 | Effective Date: May 15, 2024 | Previous Version: April 1, 2024</p>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <button class="print-btn">
                                    <i class="fas fa-download mr-2"></i> Download PDF
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Agreement Content End -->
                </div>
            </div>
        </div>
    </section>

    
<script>
    // Initialize animations and functionality
    $(document).ready(function() {
        // Initialize Wow.js for animations
        new WOW().init();
        
        // Custom scroll to top button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.scroll-to-top').addClass('active');
            } else {
                $('.scroll-to-top').removeClass('active');
            }
        });
        
        $('.scroll-to-top').click(function() {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
        
        // Smooth scroll for navigation links
        $('.agreement-nav a').click(function(e) {
            e.preventDefault();
            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top - 120
            }, 800);
            
            // Update active state in nav
            $('.agreement-nav a').removeClass('active');
            $(this).addClass('active');
        });
        
        // Update nav active state on scroll
        $(window).scroll(function() {
            var scrollPosition = $(window).scrollTop() + 150;
            
            $('.agreement-section').each(function() {
                var sectionId = $(this).attr('id');
                var sectionTop = $(this).offset().top;
                var sectionBottom = sectionTop + $(this).outerHeight();
                
                if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
                    $('.agreement-nav a').removeClass('active');
                    $('.agreement-nav a[href="#' + sectionId + '"]').addClass('active');
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
                btn.css('background-color', '#2dd98f');
                
                // Show success message
                $('<div class="alert alert-success mt-3">Thank you! Your acceptance has been recorded. You may now proceed to use our platform.</div>').insertAfter(btn).hide().fadeIn();
                
                // Store acceptance in localStorage
                localStorage.setItem('userAgreementAccepted', 'true');
                localStorage.setItem('agreementVersion', '3.2.1');
                localStorage.setItem('acceptanceDate', new Date().toISOString());
                
                // Redirect after 3 seconds
                setTimeout(function() {
                    window.location.href = 'dashboard.html';
                }, 3000);
            }, 1500);
        });
        
        // Print agreement functionality
        $('.print-btn').click(function() {
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
            printWindow.document.write('<link rel="stylesheet" href="css/bootstrap.min.css">');
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
        
        // Legal inquiry form submission
        $('#legalInquiryForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var submitBtn = form.find('.them-btn');
            var originalText = submitBtn.find('.btn_label').data('text');
            
            // Show sending state
            submitBtn.find('.btn_label').text('Submitting...');
            submitBtn.prop('disabled', true);
            
            // Simulate form submission
            setTimeout(function() {
                // Show success message
                submitBtn.find('.btn_label').text('Inquiry Sent!');
                submitBtn.css('background-color', '#2dd98f');
                
                // Show success alert
                $('<div class="alert alert-success mt-3">Your legal inquiry has been submitted. Our legal team will respond within 2-3 business days.</div>').insertAfter(form).hide().fadeIn();
                
                // Reset form after 3 seconds
                setTimeout(function() {
                    form.trigger('reset');
                    submitBtn.find('.btn_label').text(originalText);
                    submitBtn.prop('disabled', false);
                    submitBtn.css('background-color', '');
                    $('.alert-success').fadeOut();
                }, 3000);
            }, 1500);
        });
        
        // Check if user has already accepted agreement
        if (localStorage.getItem('userAgreementAccepted') === 'true') {
            $('#agreementAcceptance').prop('checked', true);
            $('#acceptAgreementBtn').prop('disabled', false);
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/useragreement.blade.php ENDPATH**/ ?>
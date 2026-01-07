@extends('layouts.base')

@section('title', 'Terms and Privacy Policy')

@inject('content', 'App\Http\Controllers\FrontController')
@section('content')

<style>
    /* Premium Minimalist Policy Styles */
    .policy-minimal {
        background: #080B18;
        position: relative;
        overflow: hidden;
    }
    
    .policy-minimal::before {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.08) 0%, transparent 70%);
        top: -200px;
        right: -100px;
    }
    
    .policy-minimal::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(74, 33, 239, 0.08) 0%, transparent 70%);
        bottom: -150px;
        left: -100px;
    }
    
    .policy-section-minimal {
        padding: 100px 0;
        position: relative;
        z-index: 1;
    }
    
    .policy-header {
        min-height: 60vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #080B18 0%, #0d0b33 100%);
        position: relative;
        overflow: hidden;
    }
    
    .policy-header::before {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.05) 0%, transparent 70%);
        top: -250px;
        right: -150px;
    }
    
    .policy-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 50px 40px;
        height: 100%;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .policy-card::before {
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
    
    .policy-card:hover {
        transform: translateY(-10px);
        border-color: rgba(45, 217, 143, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .policy-card:hover::before {
        transform: translateX(0);
    }
    
    .policy-icon-minimal {
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
    
    .policy-icon-minimal::after {
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
    
    .policy-card:hover .policy-icon-minimal::after {
        opacity: 1;
    }
    
    .policy-list-minimal {
        list-style: none;
        padding-left: 0;
        margin-top: 30px;
    }
    
    .policy-list-minimal li {
        padding: 15px 0;
        padding-left: 35px;
        position: relative;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .policy-list-minimal li:before {
        content: '→';
        position: absolute;
        left: 0;
        color: #2DD98F;
        font-weight: bold;
        transform: translateX(0);
        transition: transform 0.3s ease;
    }
    
    .policy-list-minimal li:hover:before {
        transform: translateX(5px);
    }
    
    .policy-table-minimal {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-top: 40px;
        border-radius: 15px;
        overflow: hidden;
    }
    
    .policy-table-minimal thead {
        background: rgba(45, 217, 143, 0.1);
    }
    
    .policy-table-minimal th {
        padding: 20px;
        text-align: left;
        color: #2DD98F;
        font-weight: 600;
        border-bottom: 2px solid rgba(45, 217, 143, 0.2);
    }
    
    .policy-table-minimal td {
        padding: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: background-color 0.3s ease;
    }
    
    .policy-table-minimal tbody tr:hover {
        background: rgba(45, 217, 143, 0.05);
    }
    
    .compliance-badge-minimal {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .compliance-badge-minimal::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.05), rgba(74, 33, 239, 0.05));
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .compliance-badge-minimal:hover::before {
        opacity: 1;
    }
    
    .badge-status {
        display: inline-block;
        padding: 6px 16px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .badge-status.compliant {
        background: rgba(45, 217, 143, 0.15);
        color: #2DD98F;
        border: 1px solid rgba(45, 217, 143, 0.3);
    }
    
    .badge-status.pending {
        background: rgba(255, 193, 7, 0.15);
        color: #ffc107;
        border: 1px solid rgba(255, 193, 7, 0.3);
    }
    
    .badge-status.partial {
        background: rgba(13, 110, 253, 0.15);
        color: #0d6efd;
        border: 1px solid rgba(13, 110, 253, 0.3);
    }
    
    .document-card-minimal {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        transition: all 0.3s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .document-card-minimal::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, #2DD98F, #4a21ef);
        transform: translateX(-100%);
        transition: transform 0.5s ease;
    }
    
    .document-card-minimal:hover::after {
        transform: translateX(0);
    }
    
    .document-card-minimal:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .section-title-minimal {
        position: relative;
        display: inline-block;
        margin-bottom: 50px;
    }
    
    .section-title-minimal::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #2DD98F, #4a21ef);
        border-radius: 2px;
    }
    
    .quote-block-minimal {
        background: linear-gradient(135deg, rgba(45, 217, 143, 0.05), rgba(74, 33, 239, 0.05));
        border-left: 4px solid #2DD98F;
        padding: 40px;
        border-radius: 0 20px 20px 0;
        margin: 60px 0;
        position: relative;
        overflow: hidden;
    }
    
    .quote-block-minimal::before {
        content: '"';
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 100px;
        color: rgba(45, 217, 143, 0.1);
        font-family: serif;
        line-height: 1;
    }
    
    .divider-minimal {
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(45, 217, 143, 0.3), transparent);
        margin: 60px 0;
    }
    
    .timeline-minimal {
        position: relative;
        padding-left: 30px;
    }
    
    .timeline-minimal::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(180deg, #2DD98F, #4a21ef);
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 40px;
        padding-bottom: 40px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -35px;
        top: 0;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #2DD98F;
        border: 3px solid #080B18;
    }
    
    .feature-icon-minimal {
        width: 60px;
        height: 60px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #2DD98F;
        font-size: 24px;
    }
    
    @media (max-width: 768px) {
        .policy-section-minimal {
            padding: 60px 0;
        }
        
        .policy-card {
            padding: 30px 20px;
        }
        
        .policy-header {
            min-height: auto;
            padding: 80px 0;
        }
        
        .policy-table-minimal {
            display: block;
            overflow-x: auto;
        }
        
        .timeline-minimal {
            padding-left: 20px;
        }
        
        .timeline-item::before {
            left: -25px;
        }
    }
</style>

<div class="policy-minimal">
    <!-- Hero Header -->
    <section class="policy-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="mb-4">
                        <span class="badge-status compliant">Compliance & Security</span>
                    </div>
                    
                    <h1 class="display-4 fw-bold mb-4 gradient-text">
                        Security & Compliance Framework
                    </h1>
                    
                    <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.85); font-size: 22px; line-height: 1.6;">
                        At Meme Bull, we're committed to maintaining the highest standards of security, privacy, and regulatory compliance. Your trust is our priority.
                    </p>
                  
                </div>
            </div>
        </div>
    </section>

    <!-- Compliance Standards -->
    <section class="policy-section-minimal">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title-minimal">Our Compliance Standards</h2>
                    <p class="lead" style="color: rgba(255, 255, 255, 0.7);">
                        Adhering to global regulatory standards and industry best practices
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge-minimal wow fadeInUp">
                        <div class="policy-icon-minimal mx-auto">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-center">GDPR Compliant</h4>
                        <p class="text-center small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                            Full compliance with EU data protection regulations
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge-minimal wow fadeInUp" data-wow-delay="0.1s">
                        <div class="policy-icon-minimal mx-auto">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-center">SOC 2 Type II</h4>
                        <p class="text-center small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                            Enterprise-grade security and availability controls
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge-minimal wow fadeInUp" data-wow-delay="0.2s">
                        <div class="policy-icon-minimal mx-auto">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-center">AML/KYC</h4>
                        <p class="text-center small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                            Anti-money laundering and know-your-customer compliance
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="compliance-badge-minimal wow fadeInUp" data-wow-delay="0.3s">
                        <div class="policy-icon-minimal mx-auto">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-center">ISO 27001</h4>
                        <p class="text-center small mb-0" style="color: rgba(255, 255, 255, 0.6);">
                            Information security management system certification
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Policy Cards -->
    <section class="policy-section-minimal" style="background: #0d0b33;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="policy-card wow fadeInLeft">
                        <div class="policy-icon-minimal">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h3 class="h2 fw-bold mb-4">Security Policy</h3>
                        <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 30px;">
                            Our comprehensive security framework protects your data and assets with military-grade encryption and multi-layered protection.
                        </p>
                        <ul class="policy-list-minimal">
                            <li>End-to-End AES-256 Encryption</li>
                            <li>Multi-Factor Authentication Required</li>
                            <li>98% Cold Storage Assets</li>
                            <li>Quarterly Security Audits</li>
                            <li>Advanced DDoS Protection</li>
                            <li>24/7 Security Monitoring</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="policy-card wow fadeInUp">
                        <div class="policy-icon-minimal">
                            <i class="fas fa-balance-scale-right"></i>
                        </div>
                        <h3 class="h2 fw-bold mb-4">Privacy Policy</h3>
                        <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 30px;">
                            Your privacy is our priority. We handle your data with care, transparency, and respect for your rights.
                        </p>
                        <ul class="policy-list-minimal">
                            <li>Data Minimization Principle</li>
                            <li>Transparent Data Usage</li>
                            <li>Full User Control</li>
                            <li>Strict Data Retention</li>
                            <li>Limited Third-Party Sharing</li>
                            <li>Right to Access & Delete</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="policy-card wow fadeInRight">
                        <div class="policy-icon-minimal">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h3 class="h2 fw-bold mb-4">Terms of Service</h3>
                        <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 30px;">
                            Clear guidelines for using our platform and services, ensuring fair and transparent operations for all users.
                        </p>
                        <ul class="policy-list-minimal">
                            <li>Comprehensive Service Agreement</li>
                            <li>Clear User Responsibilities</li>
                            <li>Intellectual Property Protection</li>
                            <li>Fair Dispute Resolution</li>
                            <li>Service Modification Terms</li>
                            <li>Account Termination Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compliance Framework -->
    <section class="policy-section-minimal" id="compliance-framework">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title-minimal">Compliance Framework</h2>
                    <p class="lead" style="color: rgba(255, 255, 255, 0.7);">
                        Our multi-layered approach to regulatory compliance and risk management
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="policy-card">
                        <h3 class="h3 fw-bold mb-4">Regulatory Compliance Matrix</h3>
                        
                        <div class="table-responsive">
                            <table class="policy-table-minimal">
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
                                        <td><span class="badge-status compliant">Fully Compliant</span></td>
                                        <td>March 15, 2024</td>
                                        <td>September 15, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>California Consumer Privacy Act (CCPA)</td>
                                        <td>California, USA</td>
                                        <td><span class="badge-status compliant">Fully Compliant</span></td>
                                        <td>February 28, 2024</td>
                                        <td>August 28, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Anti-Money Laundering (AML) Directive</td>
                                        <td>Global</td>
                                        <td><span class="badge-status compliant">Fully Compliant</span></td>
                                        <td>January 20, 2024</td>
                                        <td>July 20, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Know Your Customer (KYC) Requirements</td>
                                        <td>Global</td>
                                        <td><span class="badge-status compliant">Fully Compliant</span></td>
                                        <td>April 5, 2024</td>
                                        <td>October 5, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Card Industry (PCI) DSS</td>
                                        <td>Global</td>
                                        <td><span class="badge-status pending">Level 1 Pending</span></td>
                                        <td>December 15, 2023</td>
                                        <td>June 15, 2024</td>
                                    </tr>
                                    <tr>
                                        <td>Financial Conduct Authority (FCA) Guidelines</td>
                                        <td>United Kingdom</td>
                                        <td><span class="badge-status partial">Partial Compliance</span></td>
                                        <td>November 30, 2023</td>
                                        <td>May 30, 2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-4 pt-4 border-top border-white-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-0" style="color: rgba(255, 255, 255, 0.6);">
                                        <i class="fas fa-info-circle me-2" style="color: #2DD98F;"></i>
                                        <strong>Last Updated:</strong> May 15, 2024
                                    </p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <p class="mb-0" style="color: rgba(255, 255, 255, 0.6);">
                                        <strong>Next Comprehensive Review:</strong> November 15, 2024
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Risk Management -->
    <section class="policy-section-minimal" style="background: #0a0f28;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title-minimal">Risk Management Framework</h2>
                    <p class="lead" style="color: rgba(255, 255, 255, 0.7);">
                        Proactive identification, assessment, and mitigation of risks
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="policy-card wow fadeInUp">
                        <div class="feature-icon-minimal">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Risk Assessment</h4>
                        <p style="color: rgba(255, 255, 255, 0.7);">
                            Comprehensive risk identification and evaluation processes with quarterly reviews and threat modeling.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="policy-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-icon-minimal">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Risk Mitigation</h4>
                        <p style="color: rgba(255, 255, 255, 0.7);">
                            Proactive controls and security measures including automated threat detection and response systems.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="policy-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-icon-minimal">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Continuous Monitoring</h4>
                        <p style="color: rgba(255, 255, 255, 0.7);">
                            24/7 security operations center with real-time monitoring and automated alerting systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Policy Documents -->
    <section class="policy-section-minimal" id="documents">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title-minimal">Policy Documents</h2>
                    <p class="lead" style="color: rgba(255, 255, 255, 0.7);">
                        Download our comprehensive policy documents for detailed information
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="document-card-minimal wow fadeInLeft">
                        <div class="policy-icon-minimal mx-auto mb-4">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-center">Security Policy</h4>
                        <p class="text-center mb-4" style="color: rgba(255, 255, 255, 0.6);">
                            Full security framework documentation
                        </p>
                        <a href="public/docs/securitypolicy.pdf" class="them-btn crp-btn w-100"  target="_blank" 
   rel="noopener noreferrer">
                            <span class="btn_label" data-text="Download PDF">Download PDF</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="document-card-minimal wow fadeInUp">
                        <div class="policy-icon-minimal mx-auto mb-4">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-center">Privacy Policy</h4>
                        <p class="text-center mb-4" style="color: rgba(255, 255, 255, 0.6);">
                            Complete privacy policy and data handling
                        </p>
                        <a href="public/docs/privacypolicy.pdf" class="them-btn crp-btn w-100" target="_blank" 
   rel="noopener noreferrer">
                            <span class="btn_label" data-text="Download PDF" >Download PDF</span>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="document-card-minimal wow fadeInRight">
                        <div class="policy-icon-minimal mx-auto mb-4">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-center">Terms of Service</h4>
                        <p class="text-center mb-4" style="color: rgba(255, 255, 255, 0.6);">
                            Complete terms and conditions
                        </p>
                        <a  href="public/docs/termsofservice.pdf" class="them-btn crp-btn w-100"  target="_blank" 
   rel="noopener noreferrer">
                            <span class="btn_label" data-text="Download PDF">Download PDF</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="quote-block-minimal mt-5">
                <p class="lead mb-3" style="color: rgba(255, 255, 255, 0.9);">
                    These documents are legally binding. Please review them carefully before using our services.
                </p>
                <p class="mb-0" style="color: rgba(255, 255, 255, 0.6);">
                    <i class="fas fa-exclamation-triangle me-2" style="color: #2DD98F;"></i>
                    For any questions regarding our policies, please contact our legal team at legal@memebull.com
                </p>
            </div>
        </div>
    </section>

    <!-- Update Timeline -->
    <section class="policy-section-minimal" style="background: #0d0b33;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title-minimal">Update Timeline</h2>
                    <p class="lead" style="color: rgba(255, 255, 255, 0.7);">
                        Our commitment to continuous improvement and transparency
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="timeline-minimal">
                        <div class="timeline-item">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold mb-0">Security Enhancement</h5>
                                <span class="badge-status compliant">Completed</span>
                            </div>
                            <p class="mb-2" style="color: rgba(255, 255, 255, 0.6);">
                                March 15, 2024
                            </p>
                            <p style="color: rgba(255, 255, 255, 0.7);">
                                Implemented advanced encryption protocols and enhanced MFA requirements.
                            </p>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold mb-0">Privacy Policy Update</h5>
                                <span class="badge-status compliant">Completed</span>
                            </div>
                            <p class="mb-2" style="color: rgba(255, 255, 255, 0.6);">
                                February 28, 2024
                            </p>
                            <p style="color: rgba(255, 255, 255, 0.7);">
                                Updated data retention policies and enhanced user data control features.
                            </p>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="fw-bold mb-0">Next Compliance Review</h5>
                                <span class="badge-status pending">Scheduled</span>
                            </div>
                            <p class="mb-2" style="color: rgba(255, 255, 255, 0.6);">
                                November 15, 2024
                            </p>
                            <p style="color: rgba(255, 255, 255, 0.7);">
                                Comprehensive review of all policies and compliance framework updates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Initialize animations
    new WOW().init();
    
    // Smooth scroll for anchor links
    $(document).ready(function() {
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });
        
        // Document download simulation
        $('.document-card-minimal .them-btn').on('click', function(e) {
            e.preventDefault();
            var btn = $(this);
            var originalText = btn.find('.btn_label').data('text');
            
            // Show downloading state
            btn.find('.btn_label').text('Downloading...');
            btn.prop('disabled', true);
            
            // Simulate download
            setTimeout(function() {
                btn.find('.btn_label').text('Download Complete!');
                btn.css('background', 'linear-gradient(135deg, #2DD98F, #4a21ef)');
                
                // Reset after 2 seconds
                setTimeout(function() {
                    btn.find('.btn_label').text(originalText);
                    btn.prop('disabled', false);
                    btn.css('background', '');
                }, 2000);
            }, 1500);
        });
    });
</script>

@endsection

@section('scripts')
@parent
@endsection
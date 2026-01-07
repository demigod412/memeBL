<?php $content = app('App\Http\Controllers\FrontController'); ?>
<?php $__env->startSection('title', '<?php echo e($title); ?>'); ?>

<?php $__env->startSection('content'); ?>
  <style>
        /* Documentation page specific styles */
        .docs-hero {
            min-height: 500px;
            background: linear-gradient(135deg, #0d0b33 0%, #080b18 100%);
            padding-top: 150px;
            padding-bottom: 100px;
            position: relative;
            overflow: hidden;
        }
        
        .docs-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600" opacity="0.05"><path fill="%232DD98F" d="M0,0V600H1200V0ZM100,100c100-50,200-50,300,0s200,50,300,0,200-50,300,0,200,50,300,0V500c-100,50-200,50-300,0s-200-50-300,0-200,50-300,0-200-50-300,0Z"/></svg>');
            background-size: cover;
        }
        
        .hero-title {
            font-size: 70px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #2DD98F 0%, #4D57FF 50%, #2DD98F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: gradient 3s ease infinite;
        }
        
        @keyframes  gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .hero-subtitle {
            font-size: 20px;
            color: #C1C7DE;
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        .docs-search {
            max-width: 700px;
            margin: 0 auto;
            position: relative;
        }
        
        .docs-search input {
            width: 100%;
            padding: 20px 60px 20px 30px;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(109, 123, 210, 0.3);
            border-radius: 50px;
            color: white;
            font-size: 18px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        
        .docs-search input:focus {
            outline: none;
            border-color: #2DD98F;
            box-shadow: 0 0 30px rgba(45, 217, 143, 0.2);
        }
        
        .docs-search button {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #2DD98F;
            font-size: 20px;
            cursor: pointer;
        }
        
        .docs-container {
            padding: 100px 0;
            background: #080b18;
            position: relative;
        }
        
        .docs-sidebar {
            position: sticky;
            top: 120px;
            height: calc(100vh - 140px);
            overflow-y: auto;
            padding-right: 30px;
        }
        
        .docs-sidebar::-webkit-scrollbar {
            width: 5px;
        }
        
        .docs-sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .docs-sidebar::-webkit-scrollbar-thumb {
            background: #2DD98F;
            border-radius: 10px;
        }
        
        .sidebar-title {
            font-size: 18px;
            font-weight: 700;
            color: #2DD98F;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(45, 217, 143, 0.3);
        }
        
        .docs-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .docs-nav > li {
            margin-bottom: 5px;
        }
        
        .docs-nav > li > a {
            display: block;
            padding: 12px 20px;
            color: #C1C7DE;
            text-decoration: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
        }
        
        .docs-nav > li > a:hover,
        .docs-nav > li > a.active {
            background: rgba(45, 217, 143, 0.1);
            color: #2DD98F;
            padding-left: 25px;
        }
        
        .docs-nav > li > a.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: #2DD98F;
            border-radius: 0 3px 3px 0;
        }
        
        .docs-nav .sub-nav {
            list-style: none;
            padding: 0;
            margin: 0 0 10px 20px;
            border-left: 1px solid rgba(45, 217, 143, 0.2);
        }
        
        .docs-nav .sub-nav li a {
            display: block;
            padding: 8px 20px;
            color: #92939E;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .docs-nav .sub-nav li a:hover,
        .docs-nav .sub-nav li a.active {
            color: #2DD98F;
            padding-left: 25px;
        }
        
        .docs-content {
            background: rgba(13, 11, 51, 0.5);
            border-radius: 20px;
            padding: 50px;
            border: 1px solid rgba(109, 123, 210, 0.2);
            backdrop-filter: blur(10px);
        }
        
        @media (max-width: 991px) {
            .docs-sidebar {
                position: static;
                height: auto;
                margin-bottom: 40px;
            }
            
            .docs-content {
                padding: 30px;
            }
        }
        
        .docs-section {
            margin-bottom: 60px;
            scroll-margin-top: 120px;
        }
        
        .docs-section:last-child {
            margin-bottom: 0;
        }
        
        .section-header {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(109, 123, 210, 0.2);
        }
        
        .section-title {
            font-size: 36px;
            margin-bottom: 15px;
            color: white;
        }
        
        .section-subtitle {
            font-size: 18px;
            color: #B3B3C0;
            max-width: 800px;
        }
        
        .docs-card {
            background: rgba(8, 11, 24, 0.8);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }
        
        .docs-card:hover {
            border-color: #2DD98F;
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(45, 217, 143, 0.1);
        }
        
        .card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2DD98F, #1BB8FF);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #080b18;
        }
        
        .card-title {
            font-size: 22px;
            margin-bottom: 15px;
            color: white;
        }
        
        .card-text {
            color: #B3B3C0;
            margin-bottom: 20px;
        }
        
        .card-link {
            color: #2DD98F;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .card-link:hover {
            color: #1BB8FF;
            transform: translateX(5px);
        }
        
        .card-link i {
            margin-left: 8px;
            font-size: 14px;
        }
        
        .code-block {
            background: #0d0b33;
            border-radius: 10px;
            padding: 25px;
            margin: 25px 0;
            border-left: 4px solid #2DD98F;
            overflow-x: auto;
        }
        
        .code-block pre {
            margin: 0;
            color: #C1C7DE;
            font-family: 'Courier New', monospace;
            font-size: 15px;
            line-height: 1.6;
        }
        
        .code-block .keyword {
            color: #ff79c6;
        }
        
        .code-block .function {
            color: #50fa7b;
        }
        
        .code-block .string {
            color: #f1fa8c;
        }
        
        .code-block .comment {
            color: #6272a4;
        }
        
        .code-block .number {
            color: #bd93f9;
        }
        
        .alert {
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 4px solid;
        }
        
        .alert-info {
            background: rgba(27, 184, 255, 0.1);
            border-color: #1BB8FF;
            color: #1BB8FF;
        }
        
        .alert-warning {
            background: rgba(255, 184, 41, 0.1);
            border-color: #FFB829;
            color: #FFB829;
        }
        
        .alert-success {
            background: rgba(45, 217, 143, 0.1);
            border-color: #2DD98F;
            color: #2DD98F;
        }
        
        .api-table {
            width: 100%;
            background: rgba(8, 11, 24, 0.8);
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.05);
            margin: 30px 0;
        }
        
        .api-table th {
            background: rgba(45, 217, 143, 0.1);
            padding: 20px;
            text-align: left;
            color: #2DD98F;
            font-weight: 600;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .api-table td {
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            color: #C1C7DE;
        }
        
        .api-table tr:last-child td {
            border-bottom: none;
        }
        
        .api-table .method {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .method-get {
            background: rgba(45, 217, 143, 0.2);
            color: #2DD98F;
        }
        
        .method-post {
            background: rgba(27, 184, 255, 0.2);
            color: #1BB8FF;
        }
        
        .method-put {
            background: rgba(255, 184, 41, 0.2);
            color: #FFB829;
        }
        
        .method-delete {
            background: rgba(255, 28, 194, 0.2);
            color: #FF1CC2;
        }
        
        .step-list {
            counter-reset: step-counter;
            list-style: none;
            padding: 0;
        }
        
        .step-list li {
            counter-increment: step-counter;
            margin-bottom: 30px;
            padding-left: 70px;
            position: relative;
        }
        
        .step-list li::before {
            content: counter(step-counter);
            position: absolute;
            left: 0;
            top: 0;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #2DD98F, #1BB8FF);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 20px;
            color: #080b18;
        }
        
        .step-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: white;
        }
        
        .docs-cta {
            padding: 80px 0;
            background: linear-gradient(135deg, #0d0b33 0%, #080b18 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .cta-title {
            font-size: 48px;
            margin-bottom: 20px;
            color: white;
        }
        
        .cta-text {
            font-size: 18px;
            color: #B3B3C0;
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, #2DD98F, #1BB8FF);
            color: #080b18;
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 16px;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(45, 217, 143, 0.4);
            color: #080b18;
        }
        
        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 16px;
            letter-spacing: 1px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
            color: white;
        }
        
        .breadcrumb-nav {
            padding: 30px 0;
            background: rgba(8, 11, 24, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
        }
        
        .breadcrumb-item {
            color: #92939E;
        }
        
        .breadcrumb-item a {
            color: #2DD98F;
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: white;
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            color: #92939E;
            content: "›";
        }
        
        @media (max-width: 767px) {
            .hero-title {
                font-size: 36px;
            }
            
            .docs-hero {
                padding-top: 120px;
                padding-bottom: 60px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .docs-content {
                padding: 20px;
            }
            
            .cta-title {
                font-size: 32px;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-primary, .btn-secondary {
                width: 100%;
                max-width: 300px;
                text-align: center;
            }
        }
        
        /* Tabs */
        .docs-tabs {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 30px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.05);
        }
        
        .tab-btn {
            padding: 15px 30px;
            background: none;
            border: none;
            color: #92939E;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .tab-btn:hover {
            color: #2DD98F;
        }
        
        .tab-btn.active {
            color: #2DD98F;
        }
        
        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #2DD98F;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes  fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>



  <!-- Documentation Content -->
    <section class="docs-container">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="docs-sidebar">
                        <div class="sidebar-title">Getting Started</div>
                        <ul class="docs-nav">
                            <li><a href="#introduction" class="active">Introduction</a></li>
                            <li><a href="#quickstart">Quick Start</a></li>
                            <li><a href="#installation">Installation</a></li>
                            <li><a href="#configuration">Configuration</a></li>
                        </ul>
                        
                        <div class="sidebar-title">Core Concepts</div>
                        <ul class="docs-nav">
                            <li><a href="#architecture">Architecture</a></li>
                            <li><a href="#tokenomics">Tokenomics</a></li>
                            <li><a href="#smart-contracts">Smart Contracts</a>
                                <ul class="sub-nav">
                                    <li><a href="#erc20">ERC-20 Token</a></li>
                                    <li><a href="#staking">Staking Contract</a></li>
                                    <li><a href="#governance">Governance</a></li>
                                </ul>
                            </li>
                            <li><a href="#security">Security</a></li>
                        </ul>
                        
                        <div class="sidebar-title">API Reference</div>
                        <ul class="docs-nav">
                            <li><a href="#api-overview">API Overview</a></li>
                            <li><a href="#authentication">Authentication</a></li>
                            <li><a href="#endpoints">Endpoints</a></li>
                            <li><a href="#rate-limits">Rate Limits</a></li>
                        </ul>
                        
                        <div class="sidebar-title">SDKs & Tools</div>
                        <ul class="docs-nav">
                            <li><a href="#javascript-sdk">JavaScript SDK</a></li>
                            <li><a href="#python-sdk">Python SDK</a></li>
                            <li><a href="#cli-tool">CLI Tool</a></li>
                            <li><a href="#testing">Testing</a></li>
                        </ul>
                        
                        <div class="sidebar-title">Guides</div>
                        <ul class="docs-nav">
                            <li><a href="#deploy-dapp">Deploy DApp</a></li>
                            <li><a href="#integrate-wallet">Integrate Wallet</a></li>
                            <li><a href="#migrate-contracts">Migrate Contracts</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="docs-content">
                        <!-- Introduction Section -->
                        <section id="introduction" class="docs-section">
                            <div class="section-header">
                                <h1 class="section-title">Introduction to Meme Bull</h1>
                                <p class="section-subtitle">Welcome to the official documentation for Meme Bull - the revolutionary blockchain platform for meme tokens and decentralized applications.</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="docs-card">
                                        <div class="card-icon">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                        <h3 class="card-title">Getting Started</h3>
                                        <p class="card-text">Begin your journey with Meme Bull. Learn the basics and set up your development environment.</p>
                                        <a href="#quickstart" class="card-link">Get Started <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="docs-card">
                                        <div class="card-icon">
                                            <i class="fas fa-book"></i>
                                        </div>
                                        <h3 class="card-title">Guides & Tutorials</h3>
                                        <p class="card-text">Step-by-step tutorials to help you build and deploy applications on Meme Bull.</p>
                                        <a href="#deploy-dapp" class="card-link">View Guides <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="docs-card">
                                        <div class="card-icon">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <h3 class="card-title">API Reference</h3>
                                        <p class="card-text">Comprehensive API documentation for integrating with Meme Bull's services.</p>
                                        <a href="#api-overview" class="card-link">API Docs <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="docs-card">
                                        <div class="card-icon">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <h3 class="card-title">Security</h3>
                                        <p class="card-text">Security best practices and audit information for building secure applications.</p>
                                        <a href="#security" class="card-link">Security Guide <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <!-- Quick Start Section -->
                        <section id="quickstart" class="docs-section">
                            <div class="section-header">
                                <h2 class="section-title">Quick Start Guide</h2>
                                <p class="section-subtitle">Get up and running with Meme Bull in 5 minutes or less.</p>
                            </div>
                            
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle mr-2"></i>
                                <strong>Prerequisites:</strong> Node.js 16+ and npm/yarn installed on your system.
                            </div>
                            
                            <h3>Installation</h3>
                            <div class="code-block">
                                <pre><code><span class="comment"># Install Meme Bull CLI globally</span>
<span class="keyword">npm install</span> -g @memebull/cli

<span class="comment"># Or using yarn</span>
<span class="keyword">yarn global add</span> @memebull/cli

<span class="comment"># Verify installation</span>
<span class="function">memebull</span> --version</code></pre>
                            </div>
                            
                            <h3>Initialize a Project</h3>
                            <div class="code-block">
                                <pre><code><span class="comment"># Create a new project</span>
<span class="function">memebull</span> init my-project

<span class="comment"># Navigate to project directory</span>
<span class="keyword">cd</span> my-project

<span class="comment"># Install dependencies</span>
<span class="keyword">npm install</span></code></pre>
                            </div>
                            
                            <h3>Configure Your Project</h3>
                            <p>Create a <code>.env</code> file in your project root:</p>
                            <div class="code-block">
                                <pre><code><span class="comment"># Environment variables</span>
MEMEBULL_API_KEY=<span class="string">"your_api_key_here"</span>
NETWORK=<span class="string">"testnet"</span> <span class="comment"># or "mainnet"</span>
WALLET_PRIVATE_KEY=<span class="string">"your_private_key"</span></code></pre>
                            </div>
                            
                            <h3>Deploy Your First Contract</h3>
                            <div class="code-block">
                                <pre><code><span class="comment">// Deploy a simple ERC-20 token</span>
<span class="keyword">const</span> { MemeBull } = <span class="function">require</span>(<span class="string">'@memebull/sdk'</span>);

<span class="keyword">const</span> memebull = <span class="keyword">new</span> <span class="function">MemeBull</span>({
  apiKey: process.<span class="function">env</span>.MEMEBULL_API_KEY,
  network: process.<span class="function">env</span>.NETWORK
});

<span class="keyword">async function</span> <span class="function">deployToken</span>() {
  <span class="keyword">const</span> token = <span class="keyword">await</span> memebull.<span class="function">deployToken</span>({
    name: <span class="string">"My Token"</span>,
    symbol: <span class="string">"MTK"</span>,
    totalSupply: <span class="string">"1000000"</span>
  });
  
  <span class="function">console</span>.<span class="function">log</span>(<span class="string">`Token deployed at: <span class="number">${token.address}</span>`</span>);
}

<span class="function">deployToken</span>();</code></pre>
                            </div>
                        </section>
                        
                        <!-- API Reference Section -->
                        <section id="api-overview" class="docs-section">
                            <div class="section-header">
                                <h2 class="section-title">API Reference</h2>
                                <p class="section-subtitle">Complete reference for Meme Bull's REST API endpoints.</p>
                            </div>
                            
                            <div class="docs-tabs">
                                <button class="tab-btn active" data-tab="authentication">Authentication</button>
                                <button class="tab-btn" data-tab="tokens">Tokens</button>
                                <button class="tab-btn" data-tab="transactions">Transactions</button>
                                <button class="tab-btn" data-tab="wallet">Wallet</button>
                            </div>
                            
                            <div id="authentication" class="tab-content active">
                                <h3>API Authentication</h3>
                                <p>All API requests require authentication using your API key. Include the API key in the request header.</p>
                                
                                <div class="code-block">
                                    <pre><code><span class="comment">// Example header</span>
Authorization: Bearer YOUR_API_KEY
X-API-Key: YOUR_API_KEY</code></pre>
                                </div>
                                
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle mr-2"></i>
                                    <strong>Important:</strong> Never expose your API keys in client-side code. Always keep them secure on the server.
                                </div>
                                
                                <table class="api-table">
                                    <thead>
                                        <tr>
                                            <th>Endpoint</th>
                                            <th>Method</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>/api/v1/auth/login</code></td>
                                            <td><span class="method method-post">POST</span></td>
                                            <td>Generate authentication token</td>
                                        </tr>
                                        <tr>
                                            <td><code>/api/v1/auth/refresh</code></td>
                                            <td><span class="method method-post">POST</span></td>
                                            <td>Refresh authentication token</td>
                                        </tr>
                                        <tr>
                                            <td><code>/api/v1/auth/verify</code></td>
                                            <td><span class="method method-get">GET</span></td>
                                            <td>Verify token validity</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div id="tokens" class="tab-content">
                                <h3>Token Management</h3>
                                <p>Manage and interact with tokens on the Meme Bull network.</p>
                                
                                <table class="api-table">
                                    <thead>
                                        <tr>
                                            <th>Endpoint</th>
                                            <th>Method</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>/api/v1/tokens</code></td>
                                            <td><span class="method method-get">GET</span></td>
                                            <td>List all tokens</td>
                                        </tr>
                                        <tr>
                                            <td><code>/api/v1/tokens</code></td>
                                            <td><span class="method method-post">POST</span></td>
                                            <td>Create new token</td>
                                        </tr>
                                        <tr>
                                            <td><code>/api/v1/tokens/{id}</code></td>
                                            <td><span class="method method-get">GET</span></td>
                                            <td>Get token details</td>
                                        </tr>
                                        <tr>
                                            <td><code>/api/v1/tokens/{id}/balance</code></td>
                                            <td><span class="method method-get">GET</span></td>
                                            <td>Get token balance</td>
                                        </tr>
                                        <tr>
                                            <td><code>/api/v1/tokens/{id}/transfer</code></td>
                                            <td><span class="method method-post">POST</span></td>
                                            <td>Transfer tokens</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        
                        <!-- Smart Contracts Section -->
                        <section id="smart-contracts" class="docs-section">
                            <div class="section-header">
                                <h2 class="section-title">Smart Contracts</h2>
                                <p class="section-subtitle">Learn about Meme Bull's smart contract architecture and how to interact with them.</p>
                            </div>
                            
                            <h3 id="erc20">ERC-20 Token Contract</h3>
                            <p>Standard ERC-20 implementation with additional features for meme tokens.</p>
                            
                            <div class="code-block">
                                <pre><code><span class="comment">// SPDX-License-Identifier: MIT</span>
<span class="keyword">pragma solidity</span> ^<span class="number">0.8</span>.<span class="number">19</span>;

<span class="keyword">import</span> <span class="string">"@openzeppelin/contracts/token/ERC20/ERC20.sol"</span>;
<span class="keyword">import</span> <span class="string">"@openzeppelin/contracts/access/Ownable.sol"</span>;

<span class="keyword">contract</span> MemeBullToken <span class="keyword">is</span> ERC20, Ownable {
    <span class="keyword">uint256</span> <span class="keyword">public constant</span> MAX_SUPPLY = <span class="number">1000000000</span> * <span class="number">10</span> ** <span class="number">18</span>;
    <span class="keyword">uint256</span> <span class="keyword">public</span> taxRate = <span class="number">5</span>; <span class="comment">// 5% transaction tax</span>
    
    <span class="keyword">constructor</span>(<span class="keyword">string</span> <span class="keyword">memory</span> name, <span class="keyword">string</span> <span class="keyword">memory</span> symbol) 
        <span class="function">ERC20</span>(name, symbol) 
    {
        <span class="function">_mint</span>(<span class="function">msg.sender</span>, MAX_SUPPLY);
    }
    
    <span class="keyword">function</span> <span class="function">transfer</span>(<span class="keyword">address</span> to, <span class="keyword">uint256</span> amount) 
        <span class="keyword">public</span> <span class="keyword">override</span> <span class="keyword">returns</span> (bool) 
    {
        <span class="keyword">uint256</span> tax = amount * taxRate / <span class="number">100</span>;
        <span class="keyword">uint256</span> netAmount = amount - tax;
        
        <span class="function">_transfer</span>(<span class="function">msg.sender</span>, to, netAmount);
        <span class="function">_transfer</span>(<span class="function">msg.sender</span>, <span class="function">owner</span>(), tax);
        
        <span class="keyword">return</span> <span class="keyword">true</span>;
    }
}</code></pre>
                            </div>
                            
                            <h3 id="staking">Staking Contract</h3>
                            <p>Earn rewards by staking your tokens in our secure staking contract.</p>
                            
                            <ol class="step-list">
                                <li>
                                    <div class="step-title">Connect Your Wallet</div>
                                    <p>Connect your Web3 wallet (MetaMask, WalletConnect, etc.) to the Meme Bull dApp.</p>
                                </li>
                                <li>
                                    <div class="step-title">Approve Token Spending</div>
                                    <p>Approve the staking contract to spend your tokens. This is a one-time requirement.</p>
                                </li>
                                <li>
                                    <div class="step-title">Stake Tokens</div>
                                    <p>Enter the amount you want to stake and confirm the transaction.</p>
                                </li>
                                <li>
                                    <div class="step-title">Earn Rewards</div>
                                    <p>Start earning staking rewards immediately. Rewards compound automatically.</p>
                                </li>
                                <li>
                                    <div class="step-title">Unstake & Claim</div>
                                    <p>Unstake your tokens anytime and claim your accumulated rewards.</p>
                                </li>
                            </ol>
                        </section>
                        
                        <!-- Guides Section -->
                        <section id="deploy-dapp" class="docs-section">
                            <div class="section-header">
                                <h2 class="section-title">Guides & Tutorials</h2>
                                <p class="section-subtitle">Practical guides to help you build real-world applications on Meme Bull.</p>
                            </div>
                            
                            <h3>Deploy Your First DApp</h3>
                            <p>Follow this comprehensive guide to deploy a decentralized application on Meme Bull.</p>
                            
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle mr-2"></i>
                                <strong>Time to complete:</strong> 15-30 minutes
                            </div>
                            
                            <h4>Prerequisites</h4>
                            <ul>
                                <li>Basic knowledge of JavaScript/TypeScript</li>
                                <li>Node.js and npm installed</li>
                                <li>A Web3 wallet (MetaMask recommended)</li>
                                <li>Testnet MEME tokens (get them from our faucet)</li>
                            </ul>
                            
                            <h4>Step 1: Set Up Project Structure</h4>
                            <div class="code-block">
                                <pre><code><span class="comment"># Create project directory</span>
<span class="function">mkdir</span> my-dapp && <span class="keyword">cd</span> my-dapp

<span class="comment"># Initialize npm project</span>
<span class="keyword">npm init</span> -y

<span class="comment"># Install dependencies</span>
<span class="keyword">npm install</span> @memebull/sdk ethers react react-dom next</code></pre>
                            </div>
                            
                            <h4>Step 2: Create Smart Contract</h4>
                            <p>Create a simple voting contract in <code>contracts/Voting.sol</code>:</p>
                            <div class="code-block">
                                <pre><code><span class="comment">// Simple voting contract</span>
<span class="keyword">contract</span> Voting {
    <span class="keyword">mapping</span>(<span class="keyword">address</span> => bool) <span class="keyword">public</span> hasVoted;
    <span class="keyword">mapping</span>(<span class="keyword">string</span> => <span class="keyword">uint256</span>) <span class="keyword">public</span> votes;
    
    <span class="keyword">function</span> <span class="function">vote</span>(<span class="keyword">string</span> <span class="keyword">memory</span> option) <span class="keyword">public</span> {
        <span class="keyword">require</span>(!hasVoted[<span class="function">msg.sender</span>], <span class="string">"Already voted"</span>);
        votes[option]++;
        hasVoted[<span class="function">msg.sender</span>] = <span class="keyword">true</span>;
    }
    
    <span class="keyword">function</span> <span class="function">getVotes</span>(<span class="keyword">string</span> <span class="keyword">memory</span> option) <span class="keyword">public</span> <span class="keyword">view</span> <span class="keyword">returns</span> (<span class="keyword">uint256</span>) {
        <span class="keyword">return</span> votes[option];
    }
}</code></pre>
                            </div>
                            
                            <h4>Step 3: Deploy Contract</h4>
                            <div class="code-block">
                                <pre><code><span class="keyword">const</span> { MemeBull } = <span class="function">require</span>(<span class="string">'@memebull/sdk'</span>);
<span class="keyword">const</span> fs = <span class="function">require</span>(<span class="string">'fs'</span>);

<span class="keyword">async function</span> <span class="function">deployContract</span>() {
  <span class="keyword">const</span> memebull = <span class="keyword">new</span> <span class="function">MemeBull</span>({
    apiKey: process.<span class="function">env</span>.API_KEY,
    network: <span class="string">'testnet'</span>
  });
  
  <span class="keyword">const</span> contractCode = fs.<span class="function">readFileSync</span>(<span class="string">'./contracts/Voting.sol'</span>, <span class="string">'utf8'</span>);
  
  <span class="keyword">const</span> contract = <span class="keyword">await</span> memebull.<span class="function">deployContract</span>({
    name: <span class="string">"Voting"</span>,
    code: contractCode,
    constructorArgs: []
  });
  
  <span class="function">console</span>.<span class="function">log</span>(<span class="string">`Contract deployed at: <span class="number">${contract.address}</span>`</span>);
}

<span class="function">deployContract</span>();</code></pre>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="docs-cta">
        <div class="container">
            <h2 class="cta-title wow fadeInUp">Ready to Build?</h2>
            <p class="cta-text wow fadeInUp" data-wow-delay="0.2s">
                Start building your decentralized application on Meme Bull today. Join thousands of developers who are already building the future of finance.
            </p>
            <div class="cta-buttons wow fadeInUp" data-wow-delay="0.4s">
                <a href="#!" class="btn-primary">Start Building Now</a>
                <a href="#!" class="btn-secondary">Join Developer Community</a>
            </div>
        </div>
    </section>








    <!-- Documentation Page Custom JavaScript -->
<script>
    $(document).ready(function() {
        // Initialize WOW animations
        new WOW().init();
        
        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            const target = this.hash;
            const $target = $(target);
            
            // Update active navigation
            $('.docs-nav a').removeClass('active');
            $(this).addClass('active');
            
            // Scroll to target
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 120
            }, 900, 'swing');
        });
        
        // Search functionality
        $('#docs-search-form').on('submit', function(e) {
            e.preventDefault();
            const query = $('#docs-search-input').val().toLowerCase();
            
            if (query.length > 2) {
                // Highlight search results (simulated)
                $('.docs-content *:contains("' + query + '")').each(function() {
                    if ($(this).children().length === 0) {
                        $(this).html($(this).html().replace(
                            new RegExp(query, 'gi'),
                            '<span style="background-color: rgba(45, 217, 143, 0.3); padding: 2px 4px; border-radius: 3px;">$&</span>'
                        ));
                    }
                });
            }
        });
        
        // Tab functionality
        $('.tab-btn').click(function() {
            const tabId = $(this).data('tab');
            
            // Update active tab button
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');
            
            // Show corresponding tab content
            $('.tab-content').removeClass('active');
            $('#' + tabId).addClass('active');
        });
        
        // Sidebar scrolling highlight
        $(window).on('scroll', function() {
            const scrollPos = $(document).scrollTop() + 150;
            
            $('.docs-section').each(function() {
                const sectionTop = $(this).offset().top;
                const sectionBottom = sectionTop + $(this).outerHeight();
                
                if (scrollPos >= sectionTop && scrollPos <= sectionBottom) {
                    const id = $(this).attr('id');
                    $('.docs-nav a').removeClass('active');
                    $('.docs-nav a[href="#' + id + '"]').addClass('active');
                    
                    // Also highlight parent if in sub-nav
                    const parentNav = $('.docs-nav a[href="#' + id + '"]').parent().parent().prev('a');
                    if (parentNav.length) {
                        parentNav.addClass('active');
                    }
                }
            });
        });
        
        // Code block copy functionality
        $('.code-block').each(function() {
            const $codeBlock = $(this);
            const $copyButton = $('<button class="btn btn-sm" style="position: absolute; top: 10px; right: 10px; background: rgba(45, 217, 143, 0.2); color: #2DD98F; border: none; border-radius: 5px; padding: 5px 10px; font-size: 12px; cursor: pointer;"><i class="far fa-copy mr-1"></i> Copy</button>');
            
            $codeBlock.append($copyButton);
            $codeBlock.css('position', 'relative');
            
            $copyButton.click(function() {
                const codeText = $codeBlock.find('pre').text();
                navigator.clipboard.writeText(codeText).then(function() {
                    const originalText = $copyButton.html();
                    $copyButton.html('<i class="fas fa-check mr-1"></i> Copied!');
                    setTimeout(function() {
                        $copyButton.html(originalText);
                    }, 2000);
                });
            });
        });
        
        // Responsive sidebar toggle for mobile
        $('.docs-nav a').click(function() {
            if ($(window).width() < 992) {
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 100
                }, 500);
            }
        });
        
        // Initialize testimonial slider
        if ($('.testimonial-slider').length) {
            new Swiper('.testimonial-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
            });
        }
        
        // Keyboard navigation for docs
        $(document).keydown(function(e) {
            // Ctrl/Cmd + K for search
            if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
                e.preventDefault();
                $('#docs-search-input').focus();
            }
            
            // Escape to clear search
            if (e.key === 'Escape') {
                $('#docs-search-input').val('').blur();
            }
        });
        
        // Highlight current section in viewport
        function highlightCurrentSection() {
            const scrollPosition = $(window).scrollTop() + 100;
            
            $('.docs-section').each(function() {
                const sectionTop = $(this).offset().top;
                const sectionBottom = sectionTop + $(this).outerHeight();
                
                if (scrollPosition >= sectionTop && scrollPosition <= sectionBottom) {
                    const sectionId = $(this).attr('id');
                    
                    // Remove highlight from all
                    $('.docs-nav a').removeClass('active');
                    
                    // Highlight current
                    $(`.docs-nav a[href="#${sectionId}"]`).addClass('active');
                    
                    // If in sub-nav, highlight parent too
                    const parentLink = $(`.docs-nav a[href="#${sectionId}"]`).closest('.sub-nav').prev('a');
                    if (parentLink.length) {
                        parentLink.addClass('active');
                    }
                }
            });
        }
        
        // Throttle scroll event for performance
        let scrollTimeout;
        $(window).on('scroll', function() {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(highlightCurrentSection, 100);
        });
        
        // Initial highlight
        highlightCurrentSection();
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\appx\resources\views/home/documentation.blade.php ENDPATH**/ ?>
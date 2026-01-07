@extends('layouts.base')
@inject('content', 'App\Http\Controllers\FrontController')
@section('title', 'API Documentation')

@section('content')

<style>
    /* Premium Minimalist API Docs Styles */
    .api-docs-minimal {
        background: #080B18;
        position: relative;
        overflow: hidden;
    }
    
    .api-docs-minimal::before {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.08) 0%, transparent 70%);
        top: -250px;
        right: -150px;
    }
    
    .api-docs-minimal::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(74, 33, 239, 0.08) 0%, transparent 70%);
        bottom: -200px;
        left: -100px;
    }
    
    .api-hero-minimal {
        min-height: 70vh;
        display: flex;
        align-items: center;
        background: linear-gradient(135deg, #080B18 0%, #0d0b33 100%);
        position: relative;
        overflow: hidden;
        padding: 100px 0;
    }
    
    .api-hero-minimal::before {
        content: '';
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(45, 217, 143, 0.05) 0%, transparent 70%);
        top: -300px;
        left: -200px;
    }
    
    .api-section-minimal {
        padding: 100px 0;
        position: relative;
        z-index: 1;
    }
    
    .api-sidebar-minimal {
        position: sticky;
        top: 120px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        padding: 30px;
        backdrop-filter: blur(10px);
        height: calc(100vh - 140px);
        overflow-y: auto;
    }
    
    .api-sidebar-minimal::-webkit-scrollbar {
        width: 5px;
    }
    
    .api-sidebar-minimal::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
    }
    
    .api-sidebar-minimal::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        border-radius: 10px;
    }
    
    .sidebar-title-minimal {
        font-size: 14px;
        font-weight: 600;
        color: #2DD98F;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(45, 217, 143, 0.2);
    }
    
    .api-nav-minimal {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
    }
    
    .api-nav-minimal li {
        margin-bottom: 8px;
        position: relative;
    }
    
    .api-nav-minimal a {
        display: flex;
        align-items: center;
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        padding: 12px 15px;
        border-radius: 10px;
        transition: all 0.3s ease;
        font-size: 14px;
        font-weight: 500;
    }
    
    .api-nav-minimal a:hover,
    .api-nav-minimal a.active {
        background: rgba(45, 217, 143, 0.1);
        color: #2DD98F;
        padding-left: 20px;
    }
    
    .api-nav-minimal a.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 20px;
        background: linear-gradient(180deg, #2DD98F, #4a21ef);
        border-radius: 0 2px 2px 0;
    }
    
    .method-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 70px;
        padding: 6px 12px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-right: 12px;
        text-transform: uppercase;
        flex-shrink: 0;
    }
    
    .method-get {
        background: rgba(45, 217, 143, 0.15);
        color: #2DD98F;
        border: 1px solid rgba(45, 217, 143, 0.3);
    }
    
    .method-post {
        background: rgba(27, 184, 255, 0.15);
        color: #1BB8FF;
        border: 1px solid rgba(27, 184, 255, 0.3);
    }
    
    .method-put {
        background: rgba(255, 184, 41, 0.15);
        color: #FFB829;
        border: 1px solid rgba(255, 184, 41, 0.3);
    }
    
    .method-delete {
        background: rgba(255, 28, 194, 0.15);
        color: #FF1CC2;
        border: 1px solid rgba(255, 28, 194, 0.3);
    }
    
    .endpoint-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 30px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .endpoint-card::before {
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
    
    .endpoint-card:hover::before {
        transform: translateX(0);
    }
    
    .endpoint-card:hover {
        border-color: rgba(45, 217, 143, 0.2);
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .endpoint-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }
    
    .endpoint-path {
        font-family: 'Courier New', monospace;
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
        margin: 0;
        flex: 1;
        word-break: break-all;
    }
    
    .endpoint-title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 15px;
        color: white;
    }
    
    .endpoint-description {
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.6;
        margin-bottom: 25px;
    }
    
    .code-block-minimal {
        background: rgba(13, 11, 51, 0.8);
        border-radius: 10px;
        padding: 25px;
        margin: 20px 0;
        border-left: 4px solid #2DD98F;
        overflow-x: auto;
    }
    
    .code-block-minimal pre {
        margin: 0;
        color: rgba(255, 255, 255, 0.9);
        font-family: 'Courier New', monospace;
        font-size: 14px;
        line-height: 1.6;
    }
    
    .param-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 10px;
        overflow: hidden;
    }
    
    .param-table th {
        background: rgba(45, 217, 143, 0.1);
        padding: 15px 20px;
        text-align: left;
        color: #2DD98F;
        font-weight: 600;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .param-table td {
        padding: 15px 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        color: rgba(255, 255, 255, 0.8);
        font-size: 14px;
        line-height: 1.5;
    }
    
    .param-table tr:hover {
        background: rgba(45, 217, 143, 0.05);
    }
    
    .required-badge {
        display: inline-block;
        padding: 3px 8px;
        background: rgba(220, 53, 69, 0.15);
        color: #dc3545;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        margin-left: 8px;
    }
    
    .optional-badge {
        display: inline-block;
        padding: 3px 8px;
        background: rgba(255, 184, 41, 0.15);
        color: #FFB829;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        margin-left: 8px;
    }
    
    .response-section {
        background: rgba(13, 11, 51, 0.5);
        border-radius: 10px;
        padding: 25px;
        margin: 25px 0;
        border: 1px solid rgba(45, 217, 143, 0.2);
    }
    
    .response-title {
        font-size: 16px;
        font-weight: 600;
        color: #2DD98F;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    
    .response-title .status-code {
        margin-left: auto;
        padding: 4px 12px;
        background: rgba(45, 217, 143, 0.15);
        color: #2DD98F;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }
    
    .response-example {
        background: rgba(8, 11, 24, 0.8);
        border-radius: 8px;
        padding: 20px;
        margin-top: 15px;
        overflow-x: auto;
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #2DD98F, #4a21ef);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .api-status {
        display: inline-flex;
        align-items: center;
        padding: 8px 16px;
        background: rgba(45, 217, 143, 0.1);
        border: 1px solid rgba(45, 217, 143, 0.3);
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
        color: #2DD98F;
    }
    
    .api-status::before {
        content: '';
        width: 8px;
        height: 8px;
        background: #2DD98F;
        border-radius: 50%;
        margin-right: 8px;
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(45, 217, 143, 0.7); }
        70% { box-shadow: 0 0 0 6px rgba(45, 217, 143, 0); }
        100% { box-shadow: 0 0 0 0 rgba(45, 217, 143, 0); }
    }
    
    .search-box-minimal {
        position: relative;
        margin-bottom: 30px;
    }
    
    .search-box-minimal input {
        width: 100%;
        padding: 15px 50px 15px 20px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: white;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    
    .search-box-minimal input:focus {
        outline: none;
        border-color: #2DD98F;
        box-shadow: 0 0 0 3px rgba(45, 217, 143, 0.1);
    }
    
    .search-box-minimal button {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #2DD98F;
        cursor: pointer;
    }
    
    .sdk-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .sdk-card::after {
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
    
    .sdk-card:hover::after {
        transform: translateX(0);
    }
    
    .sdk-card:hover {
        border-color: rgba(45, 217, 143, 0.2);
        transform: translateY(-5px);
    }
    
    .sdk-icon {
        width: 60px;
        height: 60px;
        background: rgba(45, 217, 143, 0.1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 24px;
        color: #2DD98F;
    }
    
    .copy-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(45, 217, 143, 0.1);
        border: 1px solid rgba(45, 217, 143, 0.2);
        color: #2DD98F;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .copy-btn:hover {
        background: rgba(45, 217, 143, 0.2);
    }
    
    @media (max-width: 768px) {
        .api-hero-minimal {
            min-height: auto;
            padding: 80px 0;
        }
        
        .api-section-minimal {
            padding: 60px 0;
        }
        
        .api-sidebar-minimal {
            position: static;
            height: auto;
            margin-bottom: 30px;
        }
        
        .endpoint-card {
            padding: 20px;
        }
        
        .endpoint-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        
        .method-badge {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }
</style>

<div class="api-docs-minimal">
    <!-- Hero Header -->
    <section class="api-hero-minimal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="mb-4">
                        <span class="api-status">
                            <span>API Status: Operational</span>
                        </span>
                    </div>
                    
                    <h1 class="display-4 fw-bold mb-4 gradient-text">
                        API Documentation
                    </h1>
                    
                    <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.85); font-size: 22px; line-height: 1.6;">
                        Complete reference for Meme Bull's REST API. Build powerful trading applications with our comprehensive endpoints.
                    </p>
                    
                   
                </div>
            </div>
        </div>
    </section>

    <!-- API Documentation Content -->
    <section class="api-section-minimal">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="api-sidebar-minimal">
                        <div class="search-box-minimal">
                            <input type="text" placeholder="Search API endpoints...">
                            <button type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        
                        <div class="sidebar-title-minimal">Getting Started</div>
                        <ul class="api-nav-minimal">
                            <li><a href="#introduction" class="active">Introduction</a></li>
                            <li><a href="#authentication">Authentication</a></li>
                            <li><a href="#rate-limiting">Rate Limiting</a></li>
                            <li><a href="#errors">Error Handling</a></li>
                        </ul>
                        
                        <div class="sidebar-title-minimal">Trading</div>
                        <ul class="api-nav-minimal">
                            <li><a href="#market-data">Market Data</a></li>
                            <li><a href="#place-order">Place Order</a></li>
                            <li><a href="#cancel-order">Cancel Order</a></li>
                            <li><a href="#order-status">Order Status</a></li>
                            <li><a href="#trade-history">Trade History</a></li>
                        </ul>
                        
                        <div class="sidebar-title-minimal">Account</div>
                        <ul class="api-nav-minimal">
                            <li><a href="#account-info">Account Information</a></li>
                            <li><a href="#balance">Balance</a></li>
                            <li><a href="#deposit">Deposit Address</a></li>
                            <li><a href="#withdraw">Withdraw Funds</a></li>
                        </ul>
                        
                        <div class="sidebar-title-minimal">Automation</div>
                        <ul class="api-nav-minimal">
                            <li><a href="#strategies">Trading Strategies</a></li>
                            <li><a href="#backtesting">Backtesting</a></li>
                            <li><a href="#webhooks">Webhooks</a></li>
                        </ul>
                        
                        <div class="sidebar-title-minimal">SDKs</div>
                        <ul class="api-nav-minimal">
                            <li><a href="#javascript-sdk">JavaScript SDK</a></li>
                            <li><a href="#python-sdk">Python SDK</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="col-lg-9">
                    <!-- Introduction -->
                    <div class="endpoint-card wow fadeInUp" id="introduction">
                        <h2 class="endpoint-title">Introduction</h2>
                        <p class="endpoint-description">
                            The Meme Bull API provides programmatic access to trading functionality, market data, and account management. All API endpoints are RESTful and return JSON responses.
                        </p>
                        
                        <div class="response-section">
                            <div class="response-title">
                                <span>Base URL</span>
                                <span class="status-code">All endpoints</span>
                            </div>
                            <div class="response-example">
                                <pre><code>https://api.memebull.com/v1</code></pre>
                            </div>
                        </div>
                        
                        <h4>Quick Start Example</h4>
                        <div class="code-block-minimal">
                            <button class="copy-btn">
                                <i class="far fa-copy"></i>
                            </button>
                            <pre><code><span style="color: #ff79c6;">import</span> axios <span style="color: #ff79c6;">from</span> <span style="color: #f1fa8c;">'axios'</span>;

<span style="color: #ff79c6;">const</span> api = axios.<span style="color: #8be9fd;">create</span>({
  <span style="color: #f1fa8c;">baseURL</span>: <span style="color: #f1fa8c;">'https://api.memebull.com/v1'</span>,
  <span style="color: #f1fa8c;">headers</span>: {
    <span style="color: #f1fa8c;">'Authorization'</span>: <span style="color: #f1fa8c;">'Bearer YOUR_API_KEY'</span>,
    <span style="color: #f1fa8c;">'Content-Type'</span>: <span style="color: #f1fa8c;">'application/json'</span>
  }
});

<span style="color: #6272a4;">// Get account balance</span>
<span style="color: #8be9fd;">async function</span> <span style="color: #50fa7b;">getBalance</span>() {
  <span style="color: #ff79c6;">try</span> {
    <span style="color: #ff79c6;">const</span> response = <span style="color: #ff79c6;">await</span> api.<span style="color: #8be9fd;">get</span>(<span style="color: #f1fa8c;">'/account/balance'</span>);
    console.<span style="color: #8be9fd;">log</span>(response.<span style="color: #f1fa8c;">data</span>);
  } <span style="color: #ff79c6;">catch</span> (error) {
    console.<span style="color: #8be9fd;">error</span>(error.<span style="color: #f1fa8c;">response</span>?.<span style="color: #f1fa8c;">data</span> || error.<span style="color: #f1fa8c;">message</span>);
  }
}</code></pre>
                        </div>
                    </div>
                    
                    <!-- Authentication -->
                    <div class="endpoint-card wow fadeInUp" data-wow-delay="0.1s" id="authentication">
                        <div class="endpoint-header">
                            <span class="method-badge method-get">GET</span>
                            <h3 class="endpoint-path">/auth/verify</h3>
                        </div>
                        
                        <h2 class="endpoint-title">Authentication</h2>
                        <p class="endpoint-description">
                            All API requests require authentication using your API key. API keys can be generated from your account dashboard.
                        </p>
                        
                        <h4>Authentication Headers</h4>
                        <div class="code-block-minimal">
                            <button class="copy-btn">
                                <i class="far fa-copy"></i>
                            </button>
                            <pre><code><span style="color: #6272a4;"># HTTP Header Example</span>
Authorization: Bearer sk_live_1234567890abcdef
X-API-Key: sk_live_1234567890abcdef</code></pre>
                        </div>
                        
                        <div class="alert alert-warning mt-4" style="background: rgba(255, 184, 41, 0.1); border-left: 4px solid #FFB829; color: #FFB829; padding: 15px; border-radius: 0 8px 8px 0;">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <strong>Important:</strong> Never expose your API keys in client-side code. Always keep them secure on your server.
                        </div>
                        
                        <h4>Generate API Key</h4>
                        <table class="param-table">
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        name
                                        <span class="required-badge">Required</span>
                                    </td>
                                    <td>string</td>
                                    <td>Descriptive name for the API key</td>
                                </tr>
                                <tr>
                                    <td>
                                        permissions
                                        <span class="optional-badge">Optional</span>
                                    </td>
                                    <td>array</td>
                                    <td>Array of permissions (read, trade, withdraw)</td>
                                </tr>
                                <tr>
                                    <td>
                                        expires_at
                                        <span class="optional-badge">Optional</span>
                                    </td>
                                    <td>timestamp</td>
                                    <td>Expiration date for the key</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Market Data -->
                    <div class="endpoint-card wow fadeInUp" data-wow-delay="0.2s" id="market-data">
                        <div class="endpoint-header">
                            <span class="method-badge method-get">GET</span>
                            <h3 class="endpoint-path">/market/tickers</h3>
                        </div>
                        
                        <h2 class="endpoint-title">Market Data</h2>
                        <p class="endpoint-description">
                            Get real-time market data including prices, volumes, and 24-hour statistics for all trading pairs.
                        </p>
                        
                        <h4>Request Parameters</h4>
                        <table class="param-table">
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        symbol
                                        <span class="optional-badge">Optional</span>
                                    </td>
                                    <td>string</td>
                                    <td>Trading pair symbol (e.g., BTC/USDT). If omitted, returns all tickers</td>
                                </tr>
                                <tr>
                                    <td>
                                        exchange
                                        <span class="optional-badge">Optional</span>
                                    </td>
                                    <td>string</td>
                                    <td>Specific exchange to fetch data from</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h4>Example Request</h4>
                        <div class="code-block-minimal">
                            <button class="copy-btn">
                                <i class="far fa-copy"></i>
                            </button>
                            <pre><code><span style="color: #6272a4;"># Get BTC/USDT ticker</span>
GET https://api.memebull.com/v1/market/tickers?symbol=BTC/USDT

<span style="color: #6272a4;"># Response Headers</span>
X-RateLimit-Limit: 100
X-RateLimit-Remaining: 99
X-RateLimit-Reset: 1640995200</code></pre>
                        </div>
                        
                        <div class="response-section">
                            <div class="response-title">
                                <span>Response Example</span>
                                <span class="status-code">200 OK</span>
                            </div>
                            <div class="response-example">
                                <pre><code>{
  <span style="color: #f1fa8c;">"success"</span>: true,
  <span style="color: #f1fa8c;">"data"</span>: {
    <span style="color: #f1fa8c;">"symbol"</span>: <span style="color: #f1fa8c;">"BTC/USDT"</span>,
    <span style="color: #f1fa8c;">"price"</span>: <span style="color: #bd93f9;">42000.50</span>,
    <span style="color: #f1fa8c;">"high_24h"</span>: <span style="color: #bd93f9;">42500.00</span>,
    <span style="color: #f1fa8c;">"low_24h"</span>: <span style="color: #bd93f9;">41500.00</span>,
    <span style="color: #f1fa8c;">"volume_24h"</span>: <span style="color: #bd93f9;">1250.45</span>,
    <span style="color: #f1fa8c;">"change_24h"</span>: <span style="color: #bd93f9;">2.5</span>,
    <span style="color: #f1fa8c;">"last_updated"</span>: <span style="color: #f1fa8c;">"2024-01-05T10:30:00Z"</span>,
    <span style="color: #f1fa8c;">"exchange"</span>: <span style="color: #f1fa8c;">"binance"</span>
  },
  <span style="color: #f1fa8c;">"timestamp"</span>: <span style="color: #bd93f9;">1641393000</span>
}</code></pre>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Place Order -->
                    <div class="endpoint-card wow fadeInUp" data-wow-delay="0.3s" id="place-order">
                        <div class="endpoint-header">
                            <span class="method-badge method-post">POST</span>
                            <h3 class="endpoint-path">/trading/order</h3>
                        </div>
                        
                        <h2 class="endpoint-title">Place Order</h2>
                        <p class="endpoint-description">
                            Place a new trading order. Supports market, limit, stop-loss, and take-profit order types.
                        </p>
                        
                        <h4>Request Body</h4>
                        <table class="param-table">
                            <thead>
                                <tr>
                                    <th>Parameter</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        symbol
                                        <span class="required-badge">Required</span>
                                    </td>
                                    <td>string</td>
                                    <td>Trading pair symbol (e.g., BTC/USDT)</td>
                                </tr>
                                <tr>
                                    <td>
                                        side
                                        <span class="required-badge">Required</span>
                                    </td>
                                    <td>string</td>
                                    <td>Order side: "buy" or "sell"</td>
                                </tr>
                                <tr>
                                    <td>
                                        type
                                        <span class="required-badge">Required</span>
                                    </td>
                                    <td>string</td>
                                    <td>Order type: "market", "limit", "stop", "take_profit"</td>
                                </tr>
                                <tr>
                                    <td>
                                        quantity
                                        <span class="required-badge">Required</span>
                                    </td>
                                    <td>number</td>
                                    <td>Order quantity in base currency</td>
                                </tr>
                                <tr>
                                    <td>
                                        price
                                        <span class="optional-badge">Optional</span>
                                    </td>
                                    <td>number</td>
                                    <td>Limit price (required for limit orders)</td>
                                </tr>
                                <tr>
                                    <td>
                                        stop_price
                                        <span class="optional-badge">Optional</span>
                                    </td>
                                    <td>number</td>
                                    <td>Stop price for stop-loss/take-profit orders</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <h4>Example Request</h4>
                        <div class="code-block-minimal">
                            <button class="copy-btn">
                                <i class="far fa-copy"></i>
                            </button>
                            <pre><code>POST https://api.memebull.com/v1/trading/order
Content-Type: application/json
Authorization: Bearer YOUR_API_KEY

{
  <span style="color: #f1fa8c;">"symbol"</span>: <span style="color: #f1fa8c;">"BTC/USDT"</span>,
  <span style="color: #f1fa8c;">"side"</span>: <span style="color: #f1fa8c;">"buy"</span>,
  <span style="color: #f1fa8c;">"type"</span>: <span style="color: #f1fa8c;">"limit"</span>,
  <span style="color: #f1fa8c;">"quantity"</span>: <span style="color: #bd93f9;">0.1</span>,
  <span style="color: #f1fa8c;">"price"</span>: <span style="color: #bd93f9;">41000</span>,
  <span style="color: #f1fa8c;">"time_in_force"</span>: <span style="color: #f1fa8c;">"GTC"</span>
}</code></pre>
                        </div>
                        
                        <div class="response-section">
                            <div class="response-title">
                                <span>Response Example</span>
                                <span class="status-code">201 Created</span>
                            </div>
                            <div class="response-example">
                                <pre><code>{
  <span style="color: #f1fa8c;">"success"</span>: true,
  <span style="color: #f1fa8c;">"data"</span>: {
    <span style="color: #f1fa8c;">"order_id"</span>: <span style="color: #f1fa8c;">"ORD_1234567890"</span>,
    <span style="color: #f1fa8c;">"symbol"</span>: <span style="color: #f1fa8c;">"BTC/USDT"</span>,
    <span style="color: #f1fa8c;">"side"</span>: <span style="color: #f1fa8c;">"buy"</span>,
    <span style="color: #f1fa8c;">"type"</span>: <span style="color: #f1fa8c;">"limit"</span>,
    <span style="color: #f1fa8c;">"quantity"</span>: <span style="color: #bd93f9;">0.1</span>,
    <span style="color: #f1fa8c;">"price"</span>: <span style="color: #bd93f9;">41000</span>,
    <span style="color: #f1fa8c;">"status"</span>: <span style="color: #f1fa8c;">"open"</span>,
    <span style="color: #f1fa8c;">"filled_quantity"</span>: <span style="color: #bd93f9;">0.0</span>,
    <span style="color: #f1fa8c;">"created_at"</span>: <span style="color: #f1fa8c;">"2024-01-05T10:30:00Z"</span>,
    <span style="color: #f1fa8c;">"updated_at"</span>: <span style="color: #f1fa8c;">"2024-01-05T10:30:00Z"</span>
  },
  <span style="color: #f1fa8c;">"timestamp"</span>: <span style="color: #bd93f9;">1641393000</span>
}</code></pre>
                            </div>
                        </div>
                    </div>
                    
                    <!-- JavaScript SDK -->
                    <div class="endpoint-card wow fadeInUp" data-wow-delay="0.4s" id="javascript-sdk">
                        <h2 class="endpoint-title">JavaScript SDK</h2>
                        <p class="endpoint-description">
                            Official JavaScript/TypeScript SDK for interacting with the Meme Bull API. Provides a clean, promise-based interface.
                        </p>
                        
                        <h4>Installation</h4>
                        <div class="code-block-minimal">
                            <button class="copy-btn">
                                <i class="far fa-copy"></i>
                            </button>
                            <pre><code><span style="color: #6272a4;"># Using npm</span>
npm install @memebull/sdk

<span style="color: #6272a4;"># Using yarn</span>
yarn add @memebull/sdk</code></pre>
                        </div>
                        
                        <h4>Basic Usage</h4>
                        <div class="code-block-minimal">
                            <button class="copy-btn">
                                <i class="far fa-copy"></i>
                            </button>
                            <pre><code><span style="color: #ff79c6;">import</span> MemeBull <span style="color: #ff79c6;">from</span> <span style="color: #f1fa8c;">'@memebull/sdk'</span>;

<span style="color: #ff79c6;">const</span> client = <span style="color: #ff79c6;">new</span> <span style="color: #8be9fd;">MemeBull</span>({
  <span style="color: #f1fa8c;">apiKey</span>: <span style="color: #f1fa8c;">'YOUR_API_KEY'</span>,
  <span style="color: #f1fa8c;">environment</span>: <span style="color: #f1fa8c;">'production'</span> <span style="color: #6272a4;">// or 'sandbox'</span>
});

<span style="color: #6272a4;">// Get account balance</span>
<span style="color: #8be9fd;">async function</span> <span style="color: #50fa7b;">getAccountInfo</span>() {
  <span style="color: #ff79c6;">try</span> {
    <span style="color: #ff79c6;">const</span> balance = <span style="color: #ff79c6;">await</span> client.<span style="color: #8be9fd;">account</span>.<span style="color: #8be9fd;">getBalance</span>();
    console.<span style="color: #8be9fd;">log</span>(<span style="color: #f1fa8c;">'Account balance:'</span>, balance);
    
    <span style="color: #6272a4;">// Place an order</span>
    <span style="color: #ff79c6;">const</span> order = <span style="color: #ff79c6;">await</span> client.<span style="color: #8be9fd;">trading</span>.<span style="color: #8be9fd;">placeOrder</span>({
      <span style="color: #f1fa8c;">symbol</span>: <span style="color: #f1fa8c;">'BTC/USDT'</span>,
      <span style="color: #f1fa8c;">side</span>: <span style="color: #f1fa8c;">'buy'</span>,
      <span style="color: #f1fa8c;">type</span>: <span style="color: #f1fa8c;">'market'</span>,
      <span style="color: #f1fa8c;">quantity</span>: <span style="color: #bd93f9;">0.01</span>
    });
    
    console.<span style="color: #8be9fd;">log</span>(<span style="color: #f1fa8c;">'Order placed:'</span>, order);
  } <span style="color: #ff79c6;">catch</span> (error) {
    console.<span style="color: #8be9fd;">error</span>(<span style="color: #f1fa8c;">'Error:'</span>, error);
  }
}</code></pre>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="sdk-card">
                                    <div class="sdk-icon">
                                        <i class="fab fa-js"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Node.js SDK</h5>
                                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 14px;">
                                        Full Node.js support with TypeScript definitions
                                    </p>
                                    <a href="#" class="card-link" style="font-size: 14px;">
                                        View Documentation <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sdk-card">
                                    <div class="sdk-icon">
                                        <i class="fab fa-python"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Python SDK</h5>
                                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 14px;">
                                        Python client with async/await support
                                    </p>
                                    <a href="#" class="card-link" style="font-size: 14px;">
                                        View Documentation <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="api-section-minimal" style="background: #0d0b33;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-4 gradient-text">
                        Ready to Integrate?
                    </h2>
                    <p class="lead mb-5" style="color: rgba(255, 255, 255, 0.85);">
                        Start building with our API today. Generate your API key and begin trading programmatically in minutes.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="{{ route('dashboard') }}" class="them-btn">
                            <span class="btn_label" data-text="Get API Key">Get API Key</span>
                            <span class="btn_icon">
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z" fill="white"></path>
                                </svg>
                            </span>
                        </a>
                        <a href="mailto:support@memebull.com" class="them-btn btn-outline">
                            <span class="btn_label" data-text="Contact Support">Contact Support</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // Initialize animations
    new WOW().init();
    
    $(document).ready(function() {
        // Smooth scrolling for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            const target = $(this.getAttribute('href'));
            if (target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });
        
        // Update active navigation on scroll
        $(window).on('scroll', function() {
            const scrollPos = $(document).scrollTop() + 150;
            
            $('.endpoint-card').each(function() {
                const sectionTop = $(this).offset().top;
                const sectionBottom = sectionTop + $(this).outerHeight();
                
                if (scrollPos >= sectionTop && scrollPos <= sectionBottom) {
                    const id = $(this).attr('id');
                    $('.api-nav-minimal a').removeClass('active');
                    $(`.api-nav-minimal a[href="#${id}"]`).addClass('active');
                }
            });
        });
        
        // Copy code functionality
        $('.copy-btn').click(function() {
            const $codeBlock = $(this).siblings('pre');
            const codeText = $codeBlock.text();
            
            navigator.clipboard.writeText(codeText).then(() => {
                const $icon = $(this).find('i');
                const originalClass = $icon.attr('class');
                
                $icon.removeClass().addClass('fas fa-check');
                $(this).css('background', 'rgba(45, 217, 143, 0.2)');
                
                setTimeout(() => {
                    $icon.removeClass().addClass(originalClass);
                    $(this).css('background', 'rgba(45, 217, 143, 0.1)');
                }, 2000);
            });
        });
        
        // Search functionality
        $('.search-box-minimal input').on('input', function() {
            const query = $(this).val().toLowerCase();
            
            if (query.length > 2) {
                $('.api-nav-minimal a').each(function() {
                    const text = $(this).text().toLowerCase();
                    if (text.includes(query)) {
                        $(this).parent().show();
                        $(this).addClass('highlight');
                    } else {
                        $(this).parent().hide();
                        $(this).removeClass('highlight');
                    }
                });
            } else {
                $('.api-nav-minimal li').show();
                $('.api-nav-minimal a').removeClass('highlight');
            }
        });
        
        // Highlight current section on page load
        const hash = window.location.hash;
        if (hash) {
            $(`.api-nav-minimal a[href="${hash}"]`).addClass('active');
        }
    });
</script>

@endsection
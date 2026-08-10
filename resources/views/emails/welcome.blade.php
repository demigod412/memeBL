<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 20px;">
    
    <table role="presentation" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.3);">
        
        <!-- Animated Header -->
        <tr>
            <td style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); padding: 50px 40px; text-align: center; position: relative;">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; animation: pulse 2s infinite;">
                    <span style="font-size: 40px;">🤖</span>
                </div>
                <h1 style="color: #ffffff; margin: 0 0 10px 0; font-size: 32px; font-weight: 700; letter-spacing: -0.5px;">Welcome Aboard!</h1>
                <p style="color: #00f2fe; font-size: 16px; margin: 0; font-weight: 500;">Your AI Trading Journey Starts Now</p>
            </td>
        </tr>
        
        <!-- Main Content -->
        <tr>
            <td style="padding: 40px;">
                
                <!-- Greeting -->
                <p style="color: #2d3748; font-size: 18px; line-height: 1.6; margin: 0 0 25px 0;">
                    Hi <strong style="color: #667eea;">{{$user->name}}</strong>,
                </p>
                
                <p style="color: #4a5568; font-size: 16px; line-height: 1.8; margin: 0 0 30px 0;">
                    Welcome to the future of cryptocurrency trading! Your account is now powered by cutting-edge AI algorithms that work around the clock to maximize your trading potential.
                </p>
                
                <!-- Feature Highlights -->
                <div style="background: linear-gradient(135deg, #f0f4ff 0%, #faf5ff 100%); border-radius: 12px; padding: 30px; margin: 0 0 30px 0; border-left: 4px solid #667eea;">
                    <h2 style="color: #2d3748; font-size: 20px; margin: 0 0 20px 0; font-weight: 600;">What You Get:</h2>
                    
                    <table style="width: 100%;">
                        <tr>
                            <td style="padding: 12px 0; border-bottom: 1px solid #e2e8f0;">
                                <span style="font-size: 24px; margin-right: 12px;">⚡</span>
                                <strong style="color: #2d3748; font-size: 15px;">24/7 Automated Trading</strong>
                                <p style="color: #718096; font-size: 14px; margin: 5px 0 0 36px; line-height: 1.5;">Never miss a market opportunity, even while you sleep</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 12px 0; border-bottom: 1px solid #e2e8f0;">
                                <span style="font-size: 24px; margin-right: 12px;">🧠</span>
                                <strong style="color: #2d3748; font-size: 15px;">AI-Powered Decisions</strong>
                                <p style="color: #718096; font-size: 14px; margin: 5px 0 0 36px; line-height: 1.5;">Advanced algorithms that eliminate emotional trading</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 12px 0;">
                                <span style="font-size: 24px; margin-right: 12px;">🎯</span>
                                <strong style="color: #2d3748; font-size: 15px;">Precision Execution</strong>
                                <p style="color: #718096; font-size: 14px; margin: 5px 0 0 36px; line-height: 1.5;">Lightning-fast trades with zero human error</p>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- CTA Button -->
                <div style="text-align: center; margin: 35px 0;">
                    <a href="{{ config('app.url').'/dashboard' }}" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; padding: 16px 45px; text-decoration: none; border-radius: 50px; font-weight: 600; font-size: 16px; box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4); transition: transform 0.3s;">
                        Activate Your Bot →
                    </a>
                </div>
                
                <!-- Quick Start -->
                <div style="background-color: #f7fafc; border-radius: 10px; padding: 25px; margin: 30px 0 0 0;">
                    <h3 style="color: #2d3748; font-size: 16px; margin: 0 0 15px 0; font-weight: 600;">🚀 Quick Start Guide:</h3>
                    <ol style="color: #4a5568; font-size: 14px; line-height: 2; margin: 0; padding-left: 20px;">
                        <li><strong>Fund Your Account</strong> – Deposit crypto to start trading</li>
                        <li><strong>Choose Your Strategy</strong> – Select conservative or aggressive</li>
                        <li><strong>Activate & Relax</strong> – Let AI do the heavy lifting</li>
                    </ol>
                </div>
                
            </td>
        </tr>
        
        <!-- Stats Bar -->
        <tr>
            <td style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); padding: 30px 40px;">
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: center; padding: 0 10px;">
                            <div style="color: #00f2fe; font-size: 28px; font-weight: 700; margin-bottom: 5px;">24/7</div>
                            <div style="color: #a0aec0; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">Trading</div>
                        </td>
                        <td style="text-align: center; padding: 0 10px; border-left: 1px solid #2d3748; border-right: 1px solid #2d3748;">
                            <div style="color: #00f2fe; font-size: 28px; font-weight: 700; margin-bottom: 5px;">0%</div>
                            <div style="color: #a0aec0; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">Emotion</div>
                        </td>
                        <td style="text-align: center; padding: 0 10px;">
                            <div style="color: #00f2fe; font-size: 28px; font-weight: 700; margin-bottom: 5px;">100%</div>
                            <div style="color: #a0aec0; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">AI-Driven</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <!-- Footer -->
        <tr>
            <td style="background-color: #f7fafc; padding: 30px 40px; text-align: center;">
                <p style="color: #2d3748; font-size: 15px; margin: 0 0 10px 0;">
                    <strong>Need Help?</strong> Our support team is available 24/7
                </p>
                <p style="color: #718096; font-size: 13px; margin: 0;">
                    © {{date('Y')}} {{$settings->site_name}}. Powered by Advanced AI Technology
                </p>
            </td>
        </tr>
        
    </table>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f4f7; color: #51545e;">
    
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #f4f4f7;">
        <tr>
            <td style="padding: 40px 20px;">
                
                <!-- Main Container -->
                <table role="presentation" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 20px; text-align: center; background-color: #ffffff;">
                            <h1 style="margin: 0; font-size: 24px; font-weight: 600; color: #2d3748;">
                                {{ config('app.name') }}
                            </h1>
                        </td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 20px 40px;">
                            
                            <p style="margin: 0 0 20px; font-size: 16px; line-height: 1.6; color: #51545e;">
                                Hello <strong>{{ $recipient }}</strong>,
                            </p>
                            
                            @if ($attachment != null)
                            <div style="margin: 20px 0;">
                                <img src="{{ $message->embed(asset('storage/'. $attachment)) }}" 
                                     style="max-width: 100%; height: auto; border-radius: 8px; display: block;" 
                                     alt="Attachment">
                            </div>
                            @endif
                            
                            <div style="margin: 20px 0; font-size: 15px; line-height: 1.6; color: #51545e;">
                                {!! $body !!}
                            </div>
                            
                            @if ($url)
                            <table role="presentation" style="margin: 30px 0;">
                                <tr>
                                    <td style="text-align: center;">
                                        <a href="{{ $url }}" 
                                           style="display: inline-block; padding: 12px 32px; background-color: #3490dc; color: #ffffff; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 15px;">
                                            View Details
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            @endif
                            
                        </td>
                    </tr>
                    
                    <!-- Divider -->
                    <tr>
                        <td style="padding: 0 40px;">
                            <hr style="border: none; border-top: 1px solid #e8e8e8; margin: 20px 0;">
                        </td>
                    </tr>
                    
                    <!-- Support Section -->
                    <tr>
                        <td style="padding: 20px 40px;">
                            <p style="margin: 0; font-size: 14px; line-height: 1.6; color: #51545e;">
                                Need help? 
                                <a href="{{ config('app.url') }}/support" style="color: #3490dc; text-decoration: none;">Contact Support</a> 
                                or email us at 
                                <a href="mailto:{{ $settings->contact_email }}" style="color: #3490dc; text-decoration: none;">{{ $settings->contact_email }}</a>
                            </p>
                        </td>
                    </tr>
                    
                    <!-- Signature -->
                    <tr>
                        <td style="padding: 20px 40px 40px;">
                            <p style="margin: 0; font-size: 15px; line-height: 1.6; color: #51545e;">
                                Best regards,<br>
                                <strong>{{ config('app.name') }} Team</strong>
                            </p>
                        </td>
                    </tr>
                    
                </table>
                
                <!-- Footer -->
                <table role="presentation" style="max-width: 600px; margin: 20px auto 0;">
                    <tr>
                        <td style="padding: 20px; text-align: center; font-size: 13px; line-height: 1.6; color: #6b7280;">
                            <p style="margin: 0 0 10px;">
                                &copy; {{ date('Y') }} {{ $settings->site_name }}. All rights reserved.
                            </p>
                            <p style="margin: 0;">
                                <a href="{{ config('app.url') }}/dashboard/settings" style="color: #3490dc; text-decoration: none;">Update Preferences</a>
                            </p>
                        </td>
                    </tr>
                </table>
                
            </td>
        </tr>
    </table>
    
</body>
</html>

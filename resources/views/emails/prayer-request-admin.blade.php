<!-- resources/views/emails/prayer-request-admin.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Prayer Request</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #2c3e50;">New Prayer Request Submitted</h2>
        
        <div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin: 20px 0;">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            
            @if(!empty($data['email']))
                <p><strong>Email:</strong> {{ $data['email'] }}</p>
            @endif
            
            @if(!empty($data['phone']))
                <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
            @endif
            
            <p><strong>Request Type:</strong> {{ $data['request_type'] }}</p>
            
            @if(!empty($data['is_urgent']) && $data['is_urgent'])
                <p style="color: #e74c3c;"><strong>⚠️ URGENT REQUEST</strong></p>
            @endif
            
            @if(!empty($data['is_private']) && $data['is_private'])
                <p style="color: #f39c12;"><strong>🔒 PRIVATE REQUEST</strong></p>
            @endif
            
            <div style="margin-top: 20px;">
                <strong>Prayer Request:</strong>
                <div style="background-color: #fff; padding: 15px; border-left: 4px solid #3498db; margin-top: 10px;">
                    {{ $data['prayer_request'] }}
                </div>
            </div>
        </div>
        
        <p style="color: #7f8c8d; font-size: 14px;">
            This prayer request was submitted on {{ now()->format('F j, Y \a\t g:i A') }}
        </p>
    </div>
</body>
</html>

<!-- resources/views/emails/prayer-request-auto-reply.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Thank You for Your Prayer Request</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="color: #2c3e50;">Thank You for Your Prayer Request</h2>
        
        <p>Dear {{ $data['name'] }},</p>
        
        <p>Thank you for submitting your prayer request. We are honored that you have shared your heart with us, and we want you to know that your request is important to us.</p>
        
        <div style="background-color: #e8f5e8; padding: 20px; border-radius: 5px; margin: 20px 0; border-left: 4px solid #27ae60;">
            <p style="margin: 0; font-style: italic;">"And this is the confidence that we have toward him, that if we ask anything according to his will he hears us." - 1 John 5:14</p>
        </div>
        
        <p><strong>What happens next:</strong></p>
        <ul>
            <li>Our prayer team will begin praying for your request</li>
            @if(empty($data['is_private']) || !$data['is_private'])
                <li>Your request may be added to our prayer wall for others to pray with you</li>
            @else
                <li>Your request will be kept private as requested</li>
            @endif
            <li>We may reach out to you with updates or encouragement</li>
        </ul>
        
        <p>Remember that God loves you deeply and cares about every detail of your life. We are standing with you in prayer.</p>
        
        <p style="margin-top: 30px;">
            Blessings,<br>
            <strong>The Prayer Team</strong>
        </p>
        
        <hr style="border: none; border-top: 1px solid #eee; margin: 30px 0;">
        
        <p style="color: #7f8c8d; font-size: 14px;">
            If you have any questions or need immediate assistance, please don't hesitate to contact us.
        </p>
    </div>
</body>
</html>
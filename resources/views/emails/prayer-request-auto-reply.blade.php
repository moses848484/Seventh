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
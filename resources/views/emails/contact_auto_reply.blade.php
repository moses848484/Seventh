<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Auto Reply</title>
</head>
<body>
    <p>Dear {{ $contact['first_name'] }},</p>

    <p>Thank you for reaching out to us! We have received your message and will get back to you as soon as possible.</p>

    <p><strong>Your Message:</strong></p>
    <blockquote>
        {{ $contact['message'] }}
    </blockquote>

    <p>Kind regards,<br>
    The UniSDA Team</p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>

    <p><strong>First Name:</strong> {{ $contact['first_name'] }}</p>
    <p><strong>Last Name:</strong> {{ $contact['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $contact['email'] }}</p>
    <p><strong>Phone:</strong> {{ $contact['phone'] ?? 'N/A' }}</p>
    <p><strong>Subject:</strong> {{ $contact['subject'] }}</p>

    <p><strong>Message:</strong></p>
    <blockquote>
        {{ $contact['message'] }}
    </blockquote>

    @if(isset($contact['newsletter']) && $contact['newsletter'])
        <p><em>The user also subscribed to the newsletter.</em></p>
    @endif
</body>
</html>

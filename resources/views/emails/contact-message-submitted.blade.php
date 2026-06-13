<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h2>New Contact Message from COCO</h2>

    <p><strong>Name:</strong> {{ $messageData->name }}</p>
    <p><strong>Email:</strong> {{ $messageData->email }}</p>
    @if(!empty($messageData->phone))
        <p><strong>Phone:</strong> {{ $messageData->phone }}</p>
    @endif
    <hr>
    <p><strong>Message:</strong></p>
    <p style="white-space: pre-wrap;">{{ $messageData->message }}</p>

    <hr>
    <p style="font-size: 12px; color: #666;">This email was sent automatically from the COCO website.</p>
</body>
</html>


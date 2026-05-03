<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
        }
        h1 { color: #1A5276; }
        p  { color: #333333; }
        .footer { color: #999999; font-size: 12px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, {{ $name }}! 🎉</h1>
        <p>Thank you for registering with us.</p>
        <p>Your account has been created successfully. You can now login and start using our app.</p>
        <p>If you have any questions, feel free to contact us.</p>
        <div class="footer">
            <p>Best regards,<br>Laravel App Team</p>
        </div>
    </div>
</body>
</html>
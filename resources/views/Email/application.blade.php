<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
            font-size: 16px;
        }
        strong {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Job Application Received</h1>
        <p><strong>Full Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email Address:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
        <p><strong>Position Applying For:</strong> {{ $data['position'] }}</p>
        <p><strong>CV Attachment:</strong> Attached</p>
        <div class="footer">
            <p>Please review this application and get in touch with the applicant if necessary.</p>
            <p>Thank you!</p>
        </div>
    </div>
</body>
</html>

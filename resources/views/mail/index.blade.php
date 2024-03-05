<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" bgcolor="#f8f8f8" style="padding: 40px 0 30px 0;">
            <img src="https://yourdomain.com/logo.png" alt="Logo" width="150">
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td>
                        <h2>Contact Form Submission</h2>
                        <p><strong>Full Name:</strong> {{$mailData['fullname']}}</p>
                        <p><strong>Email:</strong> {{$mailData['email']}}</p>
                        <p><strong>Subject:</strong> {{$mailData['subject']}}</p>
                        <p><strong>Message:</strong><br>{{$mailData['message']}}</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f8f8f8" style="padding: 30px 30px 30px 30px;">
            <p style="font-size: 14px; color: #333333; text-align: center;">&copy; {{ date('Y') }} {{env('APP_NAME')}}. All rights reserved.</p>
        </td>
    </tr>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo img {
            max-width: 150px;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            font-size: 22px;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff !important;
            padding: 12px 24px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 6px;
            font-weight: bold;
            margin-top: 10px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .link-text {
            color: #007bff;
            text-decoration: none;
            word-wrap: break-word;
            font-size: 14px;
        }

        .footer {
            color: #777;
            font-size: 12px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
        }

        .social-icons a {
            margin: 0 8px;
            color: #777;
            text-decoration: none;
            font-size: 14px;
        }

        .social-icons a:hover {
            color: #007bff;
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 90%;
                padding: 15px;
            }

            .button {
                width: 80%;
                padding: 10px;
            }

            p {
                font-size: 14px;
            }

            .social-icons a {
                display: inline-block;
                margin: 5px 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="EMS Logo">
        </div>
        <h2><strong>HI {{$data['first_name']}},</strong>Verify Your Email Address Here!!</h2>
        <p>You're almost there! Please confirm your email to start using <strong>EMS</strong>.</p>
        <a href="{{ $data['verificationUrl'] }}" class="button">Verify Email</a>
        <p>If the button above doesn’t work, copy and paste the link below into your browser:</p>
        <p><a href="{{ $data['verificationUrl'] }}" class="link-text">{{ $data['verificationUrl'] }}</a></p>
        <p>This link will expire in 24 hours. If you didn't request this, ignore this email.</p>
        <div class="footer">
            <p>© {{ date('Y') }} EMS. All rights reserved.</p>
            <div class="social-icons">
                <a href="https://twitter.com" target="_blank">Twitter</a> |
                <a href="https://facebook.com" target="_blank">Facebook</a> |
                <a href="https://plus.google.com" target="_blank">Google+</a>
            </div>
            <p>Need help? <a href="mailto:mhrznaa.980@gmail.com">Contact Support</a></p>
        </div>
    </div>
</body>

</html>
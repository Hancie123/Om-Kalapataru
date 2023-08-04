<!DOCTYPE html>
<html>
<head>
    <title>Email Inbox Template</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; background-color: #f2f2f2; margin: 0; padding: 0;">

    <!-- Main container -->
    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border: 1px solid #eaeaea;">

        <!-- Email message -->
        <div style="padding: 20px;">
            <h2 style="color: #3498db;">Message from {{$name}}</h2>
            <p><strong>From:</strong> {{$email}}</p>
            <p><strong>Subject:</strong> {{$subject}}</p>
            <hr>
            <p>
                Hi,
            </p>
            <p>
                {{$contactmessage}}
            </p>
            <p>
                Best regards,<br>
                {{$name}}
            </p>
        </div>

        <!-- Footer -->
        <div style="background-color: #3498db; color: #fff; text-align: center; padding: 10px;">
            &copy; {{ date('Y') }} Om Kalpataru Carriers Pvt.Ltd. All rights reserved.
        </div>

    </div>

</body>
</html>

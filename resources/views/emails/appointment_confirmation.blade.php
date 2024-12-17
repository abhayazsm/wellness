<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">
<?php
?>
    <img src="{{ asset('img/logo_header.png') }}" alt="Wellness Integrated Logo" style="max-width: 150px;">

    <p>Dear {{$appointment['name']}} {{$appointment['last_name']}},</p>

    <p>Thank you for making the decision to take a deeper dive into your health and wellness by scheduling an appointment with Wellness Integrated! We are thrilled to support you on your journey toward balance and vitality.</p>

    <h3>Next Steps:</h3>
    <p>A team member will reach out shortly to confirm the details of your appointment.</p>

    <h3>Action Required:</h3>
    <p>To make the most of your time during the session, please complete the attached forms and email them back to us at {{ env('MAIL_FROM_ADDRESS') }} before your appointment.</p>

    <h3>What to Expect During Your Session:</h3>
    <ul>
        <li>We’ll use advanced bioenergetic testing to identify stressors, imbalances, and areas for improvement in your overall wellness.</li>
        <li>Each session lasts about 45 minutes and includes a personalized consultation to guide your next steps.</li>
    </ul>

    <p>If you have any questions or need assistance with the forms, feel free to contact us at {{ env('INFO_CONTACT') }} or {{ env('MAIL_FROM_ADDRESS') }}.</p>

    <p>We look forward to partnering with you on your wellness journey!</p>

    <p>Warm regards,<br>
    {{ env('FOUNDER_NAME') }}<br>
    {{ env('APP_NAME') }}</p>

    <p><a href="{{ env('WEBSITE_LINK') }}">{{ env('WEBSITE') }}</a> | {{ env('INFO_CONTACT') }}</p>

</body>
</html>
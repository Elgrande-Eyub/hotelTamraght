<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333333;
        }

        p {
            color: #555555;
        }

        .details {
            margin-top: 20px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Booking Notification</h1>
        <p>Hello Said,</p>
        <p>You have a new booking that requires your attention and confirmation. Please review the details below:</p>

        <div class="details">
            <h2>Booking Details:</h2>
            <p><strong>Booking ID:</strong> {{ $booking->id }}</p>
            <p><strong>Customer Name:</strong> {{ $booking->name }}</p>
            <p><strong>Check-in Date:</strong> {{ $booking->checkin }}</p>
            <p><strong>Accommodation:</strong> {{ $booking->accommodation }}</p>
            {{-- <p><strong>Check-out Date:</strong> [Check-out Date]</p> --}}
            <p><strong>Number of Guests:</strong> {{ $booking->person }} person</p>
            <p><strong>E-mail:</strong> {{ $booking->email }}</p>
            <p><strong>Country:</strong> {{ $booking->country }}</p>
            <p><strong>Total:</strong> {{ $booking->total }}</p>
            <p><strong>Message:</strong> {{ $booking->message }}</p>
            <!-- Add more booking details as needed -->
        </div>

        <p>Please take prompt action to confirm or manage this booking through your dashboard.</p>
        <p>Thank you for using our service.</p>
        <div class="footer">
            <p>Best regards,<br>Salty Waves Booking System</p>
        </div>
    </div>
</body>
</html>

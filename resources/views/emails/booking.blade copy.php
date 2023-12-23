<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
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
        <h1>Booking Confirmation</h1>
        <p>Dear {{ $booking->name }},</p>
        <p>We have received your booking request and would like to confirm that it is being processed. Our team will get in touch with you as soon as possible to finalize the details.</p>

        <div class="details">
            <h2>Booking Details:</h2>
            <p><strong>Check-in Date:</strong> {{ $booking->checkin }}</p>
            <p><strong>Accommodation:</strong> {{ $booking->accommodation }}</p>
            <p><strong>Number of Guests:</strong> {{ $booking->person }} Person</p>
            <p><strong>Total :</strong> €{{ $booking->total }}</p>
        </div>

        <p>Thank you for choosing us. We look forward to providing you with an excellent experience.</p>
        <div class="footer">
            <p>Best regards,<br><a href="#">Salty Waves</a> </p>
        </div>
    </div>
</body>
</html>

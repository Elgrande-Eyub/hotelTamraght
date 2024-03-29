<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>Your reservation is under Review</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


  <style>
    @media screen {
      img {
        max-width: 100%;
      }
      td,
      th {
        box-sizing: border-box;
      }
      u~div .wrapper {
        min-width: 100vw;
      }
      a[x-apple-data-detectors] {
        color: inherit;
        text-decoration: none;
      }
      .all-font-roboto {
        font-family: Roboto, -apple-system, "Segoe UI", sans-serif !important;
      }
      .all-font-sans {
        font-family: -apple-system, "Segoe UI", sans-serif !important;
      }
    }
    @media (max-width: 600px) {
      .sm-inline-block {
        display: inline-block !important;
      }
      .sm-hidden {
        display: none !important;
      }
      .sm-leading-32 {
        line-height: 32px !important;
      }
      .sm-p-20 {
        padding: 20px !important;
      }
      .sm-py-12 {
        padding-top: 12px !important;
        padding-bottom: 12px !important;
      }
      .sm-text-center {
        text-align: center !important;
      }
      .sm-text-xs {
        font-size: 12px !important;
      }
      .sm-text-lg {
        font-size: 18px !important;
      }
      .sm-w-1-4 {
        width: 25% !important;
      }
      .sm-w-3-4 {
        width: 75% !important;
      }
      .sm-w-full {
        width: 100% !important;
      }
    }
  </style>
  <style>
    @media (max-width: 600px) {
      .sm-dui17-b-t {
        border: solid #4299e1;
        border-width: 4px 0 0;
      }
    }
  </style>
</head>
<body style="box-sizing: border-box; margin: 0; padding: 0; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #f4f4f4e4;">
  <div style="display: none; line-height: 0; font-size: 0;">Hey {{ $booking->name }}, thanks for booking with Salty Waves - your reservation is Under Review ✔</div>
  <table class="wrapper all-font-sans" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
      <td align="center" style="padding: 24px;" width="100%">
        <table class="sm-w-full" width="600" cellpadding="0" cellspacing="0" role="presentation">
          <tr>
            {{-- <td colspan="2" class="sm-inline-block" style="display: none;">
              <img src="https://images.unsplash.com/photo-1505577058444-a3dab90d4253?ixlib=rb-0.3.5&s=fed02ccbe457c9b8fc1f2cf76f30d755&w=600&h=400&q=80&fit=crop" alt="Double Room" style="border: 0; line-height: 100%; vertical-align: middle; border-top-left-radius: 4px; border-top-right-radius: 4px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);">
            </td> --}}
          </tr>
          <tr>
            {{-- <td class="sm-hidden" style="padding-top: 40px; padding-bottom: 40px;" width="160">
              <img src="https://images.unsplash.com/photo-1505577058444-a3dab90d4253?ixlib=rb-0.3.5&s=fed02ccbe457c9b8fc1f2cf76f30d755&w=320&h=800&q=80&fit=crop" alt="Double room" style="border: 0; line-height: 100%; vertical-align: middle; border-top-left-radius: 4px; border-bottom-left-radius: 4px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);" width="160">
            </td> --}}
            <td align="left" class="sm-p-20 sm-dui17-b-t" style="border-radius: 2px; padding: 40px; position: relative; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05); vertical-align: top; z-index: 50;" bgcolor="#ffffff" valign="top">
              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td width="80%">
                    <h1 class="sm-text-lg all-font-roboto" style="font-weight: 700; line-height: 100%; margin: 0; margin-bottom: 4px; font-size: 24px;">Booking Receipt</h1>
                    <p class="sm-text-xs" style="margin: 0; color: #a0aec0; font-size: 14px;">Your reservation is Under Review</p>
                  </td>
                 {{--  <td style="text-align: right;" width="20%" align="right">
                    <a href="https://example.com" target="_blank" style="text-decoration: none;">
                      <img src="https://image0.flaticon.com/icons/png/128/872/872220.png" alt="Download PDF" style="border: 0; line-height: 100%; vertical-align: middle; font-size: 12px;" width="24">
                    </a>
                  </td> --}}
                </tr>
              </table>
              <div style="line-height: 32px;">&zwnj;</div>
              <p>
                <h3>Dear {{ $booking->name }},</h3>

                {{-- <br><br> --}}
                <h4 style="color: #000;font-weight: 600;">  Thank you for choosing Salty Waves! We have received your booking request, and it is currently under review. Here are the details of your booking:
                </h4>
                {{-- <div style="line-height: 32px;">&zwnj;</div> --}}
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td style="padding-top: 24px; padding-bottom: 24px;">
                        <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
                      </td>
                    </tr>
                  </table>
              <table class="sm-leading-32" style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td class="sm-inline-block" style="color: #718096;" width="50%">Guest</td>
                  <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->name }}</td>
                </tr>
                <tr>
                  <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Phone</td>
                  <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->phone }}</td>
                </tr>
                <tr>
                    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Email</td>
                    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->email }}</td>
                  </tr>
                  <tr>
                    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Country</td>
                    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->country }}</td>
                  </tr>

              </table>

              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td style="padding-top: 24px; padding-bottom: 24px;">
                    <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
                  </td>
                </tr>
              </table>

              <table class="sm-leading-32" style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">

                <tr>
                    <td class="sm-inline-block" style="color: #718096;" width="50%">Accommodation</td>
                    <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->accommodation }}</td>
                </tr>

                @if($booking->accommodation != "Hostle Tamraght")
                <tr>
                    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Number of Guests</td>
                    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->person }} Guest(s)</td>
                  </tr>
                @endif

                @if($booking->pack!="" & $booking->accommodation != "Hostle Tamraght")
                <tr>
                    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Packages Selected</td>
                    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->pack }}</td>
                </tr>
                @endif

                @if($booking->accommodation== "Hostle Tamraght" & ($booking->surfcoaching || $booking->surfyoga || $booking->surfbasic) != true )
                <tr>
                    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Package Selected</td>
                    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->pack }}</td>
                </tr>
                <tr>
                    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Rooms</td>
                    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->rooms }}</td>
                </tr>

                <tr>
                    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Dormitory</td>
                    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->dorms }}</td>
                </tr>

                @else


                    @if($booking->surfcoaching == true)
                    <tr>
                        <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Package Selected</td>
                        <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">Popular Surf Coaching Pack</td>
                    </tr>
                    <tr>
                        <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Types</td>
                        <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->solocoaching }}, {{ $booking->buddiescoaching }}</td>
                    </tr>
                    <tr>
                        <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%"></td>
                        <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right"></td>
                    </tr>
                    @endif

                    @if($booking->surfyoga == true)
                    <tr>
                        <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Package Selected</td>
                        <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">Premuim Surf & Yoga Pack</td>
                    </tr>
                    <tr>
                        <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Types</td>
                        <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->soloyoga }}, {{ $booking->buddiesyoga }}</td>
                    </tr>

                    @endif

                    @if($booking->surfbasic == true)
                    <tr>
                        <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Package Selected</td>
                        <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">Basic Surf Coaching Package</td>
                    </tr>
                    <tr>
                        <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Types</td>
                        <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">{{ $booking->solobasic }}, {{ $booking->buddiesbasic }}</td>
                    </tr>



                    @endif

                @endif

              </table>
              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td style="padding-top: 24px; padding-bottom: 24px;">
                    <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
                  </td>
                </tr>
              </table>
              <table style="font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td class="sm-w-full sm-inline-block sm-text-center" width="40%">
                    <p class="all-font-roboto" style="margin: 0; margin-bottom: 4px; color: #a0aec0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px;">Check-in</p>
                    <p class="all-font-roboto" style="font-weight: 600; margin: 0; color: #000000;">{{ $booking->checkin }}</p>
                  </td>
                  <td class="sm-w-full sm-inline-block sm-py-12" style="font-family: Menlo, Consolas, monospace; font-weight: 600; text-align: center; color: #cbd5e0; font-size: 18px; letter-spacing: -1px;" width="20%" align="center">&gt;&gt;&gt;</td>
                  <td class="sm-w-full sm-inline-block sm-text-center" style="text-align: right;" width="40%" align="right">
                    <p class="all-font-roboto" style="margin: 0; margin-bottom: 4px; color: #a0aec0; font-size: 10px; text-transform: uppercase; letter-spacing: 1px;">Check-out</p>
                    <p class="all-font-roboto" style="font-weight: 600; margin: 0; color: #000000;">{{ $booking->checkout }}</p>
                  </td>
                </tr>
              </table>
              <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td style="padding-top: 24px; padding-bottom: 24px;">
                    <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
                  </td>
                </tr>
              </table>
              <table style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
              {{--   <tr>
                  <td style="color: #718096;" width="50%">Price per night</td>
                  <td style="font-weight: 600; text-align: right;" width="50%" align="right">$144.99</td>
                </tr>
                <tr>
                  <td style="color: #718096;" width="50%">Cleaning fee</td>
                  <td style="font-weight: 600; text-align: right;" width="50%" align="right">$19.99</td>
                </tr> --}}
                <tr>
                  <td style="font-weight: 600; padding-top: 32px; color: #000000; font-size: 20px;" width="50%">Total</td>
                  <td style="font-weight: 600; padding-top: 32px; text-align: right; color: #68d391; font-size: 20px;" width="50%" align="right">€{{ $booking->total }}</td>
                </tr>
              </table>


              {{-- <h3>Dear {{ $booking->name }},</h3> --}}

                 {{-- <br><br> --}}
                 <h4 style="color: #000;font-weight: 600;"> Please note that your booking is not confirmed until you receive a final confirmation from us. Our team will review your request and get back to you shortly with further details.
                    <br> <br>
                    If you have any questions or need immediate assistance, feel free to contact us at <a href="mailto:info@salty-wave.com">info@salty-wave.com</a> or <a href="tel:+49 1762 489 8825">+49 1762 489 8825</a>.
                    <br> <br>
                    Thank you for choosing Salty Waves! We look forward to hosting you.
                 </h4>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>

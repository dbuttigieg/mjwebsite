<?php

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'info@mjcarrentals.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "(Website) Contact Us Form:  $name";
$email_body =
    "<html lang='en'>
    <head>
        <meta charset='UTF-8'>
    </head>
    <body>
        <h2 style='font-family: Montserrat; color: #222222' align='center'>GENERAL QUERY FROM M&J CAR RENTALS WEBSITE</h2>
        <p style=\"font-family: 'Droid Serif'; color: #222222\"> 
            Details: <br> <br>
            Name:  $name <br>
            Email:  $email_address <br>
            Phone:  $phone <br><br>
            Message:  $message <br> <br>
        </p>
       
        <div style='font-family: Montserrat; color: #222222'>
            <table style='border-top: 7px solid #225a9f'>
                <tr>
                    <th rowspan='3' style='padding: 5px'>
                        <a href='http://www.mjcarrentals.com' style='color: #222222'><img src='http://mjcarrentals.com/resources/m&j-logo.jpg' width='160' ></a></th>
                    <td style='padding: 5px'>
                        <img src='http://mjcarrentals.com/resources/phone-receiver.png' width='20px'/>
                        <a href='tel://+35621562771' style='color: #222222'>+356 21562771</a> /
                        <a href='tel://+35699459772' style='color: #222222'>+356 99459772</a>
                    </td>
                </tr>
                <tr>
                    <td style='padding: 5px'>
                        <img src='http://mjcarrentals.com/resources/close-envelope.png' width='20px'/>
                        <a href='mailto:info@mjcarrentals.com' style='color: #222222'>info@mjcarrentals.com</a>
                    </td>
                </tr>
                <tr>
                    <td style='padding: 5px'>
                        <a href='https://www.facebook.com/mjcarrentals/?fref=ts' target='_blank' style='color: #222222; padding-right: 5px'>
                            <img src='http://mjcarrentals.com/resources/facebook-logo.png' width='20px'/></a>
                        <a href='https://goo.gl/maps/wHFiNnEYFwQ2' target='_blank' style='color: #222222'>
                            <img src='http://mjcarrentals.com/resources/map-pin.png' width='20px'/></a>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    </html>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:MJCarRentals.com'."\r\n" .
    'Reply-To: '.$email_address . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to,$email_subject,$email_body,$headers);

$reply_headers  = 'MIME-Version: 1.0' . "\r\n";
$reply_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$reply_headers .= 'From:MJCarRentals.com'."\r\n" .
    'Reply-To: '.$to . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$reply_subject = "M&J Car Rentals General Query Confirmation";

$email_reply =
    "<html lang='en'>
    <head>
        <meta charset='UTF-8'>
    </head>
    <body>
        <h2 style='font-family: Montserrat; color: #222222' align='center'>GENERAL QUERY CONFIRMATION FROM M&J CAR RENTALS</h2>
        <h4 style='font-family: Montserrat; color: #222222'>Your query has been received. </h4>
        <p style=\"font-family: 'Droid Serif'; color: #222222\"> 
            Details submitted: <br> <br>
            Name:  $name <br>
            Email:  $email_address <br>
            Phone:  $phone <br><br>
            Message:  $message <br> <br>
        </p>
        
        <div style='font-family: Montserrat; color: #222222'>
            <table style='border-top: 7px solid #225a9f'>
                <tr>
                    <th rowspan='3' style='padding: 5px'>
                        <a href='http://www.mjcarrentals.com' style='color: #222222'><img src='http://mjcarrentals.com/resources/m&j-logo.jpg' width='160' ></a></th>
                    <td style='padding: 5px'>
                        <img src='http://mjcarrentals.com/resources/phone-receiver.png' width='20px'/>
                        <a href='tel://+35621562771' style='color: #222222'>+356 21562771</a> /
                        <a href='tel://+35699459772' style='color: #222222'>+356 99459772</a>
                    </td>
                </tr>
                <tr>
                    <td style='padding: 5px'>
                        <img src='http://mjcarrentals.com/resources/close-envelope.png' width='20px'/>
                        <a href='mailto:info@mjcarrentals.com' style='color: #222222'>info@mjcarrentals.com</a>
                    </td>
                </tr>
                <tr>
                    <td style='padding: 5px'>
                        <a href='https://www.facebook.com/mjcarrentals/?fref=ts' target='_blank' style='color: #222222; padding-right: 5px'>
                            <img src='http://mjcarrentals.com/resources/facebook-logo.png' width='20px'/></a>
                        <a href='https://goo.gl/maps/wHFiNnEYFwQ2' target='_blank' style='color: #222222'>
                            <img src='http://mjcarrentals.com/resources/map-pin.png' width='20px'/></a>
                    </td>
                </tr>
            </table>
        </div>
    </body>
    </html>";

mail($email_address, $reply_subject, $email_reply, $reply_headers);

return true;         
?>

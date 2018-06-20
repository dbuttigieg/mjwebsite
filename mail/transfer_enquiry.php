<?php

$name = strip_tags(htmlspecialchars($_POST['name']));
$surname = strip_tags(htmlspecialchars($_POST['surname']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$oneWayTransfer = strip_tags(htmlspecialchars($_POST['oneWayTransfer']));
$returnTransfer = strip_tags(htmlspecialchars($_POST['returnTransfer']));
$trf1_transferType = strip_tags(htmlspecialchars($_POST['trf1_transferType']));
$trf1_numAdults = strip_tags(htmlspecialchars($_POST['trf1_numAdults']));
$trf1_numChildren = strip_tags(htmlspecialchars($_POST['trf1_numChildren']));
$trf1_datetime = strip_tags(htmlspecialchars($_POST['trf1_datetime']));
$trf1_pickup = strip_tags(htmlspecialchars($_POST['trf1_pickup']));
$trf1_dropoff = strip_tags(htmlspecialchars($_POST['trf1_dropoff']));
$trf2_transferType = strip_tags(htmlspecialchars($_POST['trf2_transferType']));
$trf2_numAdults = strip_tags(htmlspecialchars($_POST['trf2_numAdults']));
$trf2_numChildren = strip_tags(htmlspecialchars($_POST['trf2_numChildren']));
$trf2_datetime = strip_tags(htmlspecialchars($_POST['trf2_datetime']));
$trf2_pickup = strip_tags(htmlspecialchars($_POST['trf2_pickup']));
$trf2_dropoff = strip_tags(htmlspecialchars($_POST['trf2_dropoff']));
$additionalcomments = strip_tags(htmlspecialchars($_POST['comments']));

$to = 'info@mjcarrentals.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "(Website) Transfer Inquiry:  $name $surname";

if ($oneWayTransfer == true) {
    $email_body =
        "<html lang='en'>
        <head>
            <meta charset='UTF-8'>
        </head>
        <body>
            <h2 style='font-family: Montserrat; color: #222222' align='center'>ENQUIRY FROM M&J CAR RENTALS WEBSITE</h2>
            <p style=\"font-family: 'Droid Serif'; color: #222222\"> 
                Details for <b>Transfer</b> enquiry: <br> <br>
                Name: $name<br>
                Surname: $surname<br>
                Email: $email_address<br>
                Phone: $phone<br>
                Return: No <br><br>
                
                <b>Transfer Details:</b><br>
                Type: $trf1_transferType<br>
                Number of Adults: $trf1_numAdults<br>
                Number of Children: $trf1_numChildren<br>
                Date and Time: $trf1_datetime<br>
                Pick up Location: $trf1_pickup<br>
                Drop Off Location: $trf1_dropoff<br><br>
                Additional Comments: $additionalcomments<br><br>
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

    $email_reply =
        "<html lang='en'>
        <head>
            <meta charset='UTF-8'>
        </head>
        <body>
            <h2 style='font-family: Montserrat; color: #222222' align='center'>ENQUIRY CONFIRMATION FROM M&J CAR RENTALS</h2>
            <h4 style='font-family: Montserrat; color: #222222'>Your Transfer enquiry has been received. </h4>
            <p style=\"font-family: 'Droid Serif'; color: #222222\"> 
                Details submitted: <br> <br>
                Name: $name<br>
                Surname: $surname<br>
                Email: $email_address<br>
                Phone: $phone<br>
                Return: No <br><br>
                
                <b>Transfer Details:</b><br>
                Type: $trf1_transferType<br>
                Number of Adults: $trf1_numAdults<br>
                Number of Children: $trf1_numChildren<br>
                Date and Time: $trf1_datetime<br>
                Pick up Location: $trf1_pickup<br>
                Drop Off Location: $trf1_dropoff<br><br>
                Additional Comments: $additionalcomments<br><br>
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

} else {
    $email_body =
        "<html lang='en'>
        <head>
            <meta charset='UTF-8'>
        </head>
        <body>
            <h2 style='font-family: Montserrat; color: #222222' align='center'>ENQUIRY FROM M&J CAR RENTALS WEBSITE</h2>
            <p style=\"font-family: 'Droid Serif'; color: #222222\"> 
                Details for <b>Transfer</b> enquiry: <br> <br>
                Name: $name<br>
                Surname: $surname<br>
                Email: $email_address<br>
                Phone: $phone<br>
                Return: Yes <br><br>
                
                <b>Transfer Details:</b><br>
                Type: $trf1_transferType<br>
                Number of Adults: $trf1_numAdults<br>
                Number of Children: $trf1_numChildren<br>
                Date and Time: $trf1_datetime<br>
                Pick up Location: $trf1_pickup<br>
                Drop Off Location: $trf1_dropoff<br><br>
                
                <b>Return Transfer Details:</b><br>
                Type: $trf2_transferType<br>
                Number of Adults: $trf2_numAdults<br>
                Number of Children: $trf2_numChildren<br>
                Date and Time: $trf2_datetime<br>
                Pick up Location: $trf2_pickup<br>
                Drop Off Location: $trf2_dropoff<br><br>
                
                Additional Comments: $additionalcomments<br><br>
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

    $email_reply =
        "<html lang='en'>
        <head>
            <meta charset='UTF-8'>
        </head>
        <body>
            <h2 style='font-family: Montserrat; color: #222222' align='center'>ENQUIRY CONFIRMATION FROM M&J CAR RENTALS</h2>
            <h4 style='font-family: Montserrat; color: #222222'>Your Transfer enquiry has been received. </h4>
            <p style=\"font-family: 'Droid Serif'; color: #222222\"> 
                Details submitted: <br> <br>
                Name: $name<br>
                Surname: $surname<br>
                Email: $email_address<br>
                Phone: $phone<br>
                Return: Yes <br><br>
                
                <b>Transfer Details:</b><br>
                Type: $trf1_transferType<br>
                Number of Adults: $trf1_numAdults<br>
                Number of Children: $trf1_numChildren<br>
                Date and Time: $trf1_datetime<br>
                Pick up Location: $trf1_pickup<br>
                Drop Off Location: $trf1_dropoff<br><br>
                
                <b>Return Transfer Details:</b><br>
                Type: $trf2_transferType<br>
                Number of Adults: $trf2_numAdults<br>
                Number of Children: $trf2_numChildren<br>
                Date and Time: $trf2_datetime<br>
                Pick up Location: $trf2_pickup<br>
                Drop Off Location: $trf2_dropoff<br><br>
                
                Additional Comments: $additionalcomments<br><br>
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
}
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
$reply_subject = "M&J Car Rentals Enquiry Confirmation";

mail($email_address, $reply_subject, $email_reply, $reply_headers);
return true;         
?>

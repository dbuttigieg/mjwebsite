<?php
// Check for empty fields
if(empty($_POST['name'])                  ||
   empty($_POST['surname'])               ||
   empty($_POST['email'])                 ||
   empty($_POST['phone'])                 ||
   empty($_POST['loc'])                   ||
   empty($_POST['total_adults'])          ||
   empty($_POST['total_child'])           ||
   empty($_POST['date'])                  ||
   empty($_POST['pu_loc'])                ||
   empty($_POST['do_loc'])                ||
   empty($_POST['comments'])              ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$surname = strip_tags(htmlspecialchars($_POST['surname']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$loc = strip_tags(htmlspecialchars($_POST['loc']));
$total_adults = strip_tags(htmlspecialchars($_POST['total_adults']));
$total_child = strip_tags(htmlspecialchars($_POST['total_child']));
$date = strip_tags(htmlspecialchars($_POST['date']));
$pu_loc = strip_tags(htmlspecialchars($_POST['pu_loc']));
$do_loc = strip_tags(htmlspecialchars($_POST['do_loc']));
$additionalcomments = strip_tags(htmlspecialchars($_POST['comments']));
   
// Create the email and send the message
$to = 'info@mjcarrentals.com';
$email_subject = "(Website) Tour Inquiry:  $name";
$email_body = "You have received a new Day Tour Enquiry from M&J Car Rentals Website.\n\n".
               "Here are the details:\n\n
               Name: $name\n\n
               Surname: $surname\n\n
               Email: $email_address\n\n
               Phone: $phone\n\n
               \n\n
               Date: $date\n\n
               Tour Location: $loc\n\n
               Number of Adults: $total_adults \n\n
               Number of Children: $total_child \n\n
               Pick-up Location: $pu_loc \n\n
               Drop-off Location: $do_loc \n\n
               \n\n
               Additional Comments:\n$additionalcomments";
$headers = "From: MJCarRentals.com@shared81.accountservergroup.com\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>

<?php
// Check for empty fields
if(empty($_POST['name'])                  ||
   empty($_POST['surname'])               ||
   empty($_POST['email'])                 ||
   empty($_POST['phone'])                 ||
   empty($_POST['isReturn'])              ||
   empty($_POST['trf1_transferType'])     ||
   empty($_POST['trf1_numAdults'])        ||
   empty($_POST['trf1_numChildren'])      ||
   empty($_POST['trf1_datetime'])         ||
   empty($_POST['trf1_pickup'])           ||
   empty($_POST['trf1_dropoff'])          ||
   empty($_POST['trf2_transferType'])     ||
   empty($_POST['trf2_numAdults'])        ||
   empty($_POST['trf2_numChildren'])      ||
   empty($_POST['trf2_datetime'])         ||
   empty($_POST['trf2_pickup'])           ||
   empty($_POST['trf2_dropoff'])          ||
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
$isReturn = strip_tags(htmlspecialchars($_POST['isReturn']));
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
   
// Create the email and send the message
$to = 'info@mjcarrentals.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "(Website) Transfer Inquiry:  $name";
$email_body = "You have received a new Transfer Enquiry from M&J Car Rentals Website Transfer Enquiry Form.\n\n".
               "Here are the details:\n\n
               Name: $name\n
               Surname: $surname\n
               Email: $email_address\n
               Phone: $phone\n
               Return: $isReturn\n\n
               Transfer 1 Details:\n
               Type: $trf1_transferType\n
               Number of Adults: $trf1_numAdults\n
               Number of Children: $trf1_numChildren\n
               Date and Time: $trf1_datetime\n
               Pick up Location: $trf1_pickup\n
               Drop Off Location: $trf1_dropoff\n\n
               Transfer 2 Details:\n
               Type: $trf2_transferType\n
               Number of Adults: $trf2_numAdults\n
               Number of Children: $trf2_numChildren\n
               Date and Time: $trf2_datetime\n
               Pick up Location: $trf2_pickup\n
               Drop Off Location: $trf2_dropoff\n\n
               Additional Comments:\n$additionalcomments";
$headers = "From: MJCarRentals.com@shared81.accountservergroup.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>

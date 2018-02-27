<?php
// Check for empty fields
if(empty($_POST['name'])                  ||
   empty($_POST['surname'])               ||
   empty($_POST['email'])                 ||
   empty($_POST['phone'])                 ||
   empty($_POST['group'])                 ||
   empty($_POST['age'])                   ||
   empty($_POST['car_pu_time'])           ||
   empty($_POST['car_pu_loc'])            ||
   empty($_POST['car_do_time'])           ||
   empty($_POST['car_do_loc'])            ||
   empty($_POST['ins'])                   ||
   empty($_POST['additionalDriver'])      ||
   empty($_POST['additionalDriverAge'])   ||
   empty($_POST['babyseat'])              ||
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
$group = strip_tags(htmlspecialchars($_POST['group']));
$age = strip_tags(htmlspecialchars($_POST['age']));
$car_pu_time = strip_tags(htmlspecialchars($_POST['car_pu_time']));
$car_pu_loc = strip_tags(htmlspecialchars($_POST['car_pu_loc']));
$car_do_time = strip_tags(htmlspecialchars($_POST['car_do_time']));
$car_do_loc = strip_tags(htmlspecialchars($_POST['car_do_loc']));
$ins = strip_tags(htmlspecialchars($_POST['ins']));
$addDriver = strip_tags(htmlspecialchars($_POST['additionalDriver']));
$addDriverAge = strip_tags(htmlspecialchars($_POST['additionalDriverAge']));
$babyseat = strip_tags(htmlspecialchars($_POST['babyseat']));
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
$to = 'denisebuttigieg04@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new Transfer Enquiry from M&J Car Rentals Website Transfer Enquiry Form.\n\n".
               "Here are the details:\n\n
               Name: $name\n\n
               Surname: $surname\n\n
               Email: $email_address\n\n
               Phone: $phone\n\n
               Return: $isReturn\n\n
               \n\n
               Car Rental Details:\n\n
               Group: $group\n\n
               Age of Driver: $age\n\n
               From: $car_pu_time at $car_pu_loc\n\n
               To: $car_pu_time at $car_do_loc\n\n
               \n\n
               Extras:\n\n
               Insurance: $ins\n\n
               Additional Driver: $addDriver \n\n
               Additional Driver Age: $addDriverAge\n\n
               Baby seat: $babyseat\n\n
               \n\n
               Transfer 1 Details:\n\n
               Type: $trf1_transferType\n\n
               Number of Adults: $trf1_numAdults\n\n
               Number of Children: $trf1_numChildren\n\n
               Date and Time: $trf1_datetime\n\n
               Pick up Location: $trf1_pickup\n\n
               Drop Off Location: $trf1_dropoff\n\n
               \n\n
               Transfer 2 Details:\n\n
               Type: $trf2_transferType\n\n
               Number of Adults: $trf2_numAdults\n\n
               Number of Children: $trf2_numChildren\n\n
               Date and Time: $trf2_datetime\n\n
               Pick up Location: $trf2_pickup\n\n
               Drop Off Location: $trf2_dropoff\n\n
               \n\n
               Additional Comments:\n$additionalcomments";
$headers = "From: noreply@mjcarrentals.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
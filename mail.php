<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$message= $_POST['subject'];
$to = "info.mapbud@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Subject = " . $subject . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: info.mapbud@gmailcom" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
<?php
$to = "email@example.com";
$subject = "Caliber - Multi Purpose HTML Theme";
$message = "Name:<br>".$_POST["name"]."<br><br>Email:<br>".$_POST["email"]."<br><br>Phone:<br>".$_POST["phone"]."<br><br>Message:<br>".$_POST["msg"];
$from = $_POST["email"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: <'.$_POST["email"].'>' . "\r\n";
mail($to,$subject,$message,$headers);
echo "Thank you. Message Sent Successfully !";
?>

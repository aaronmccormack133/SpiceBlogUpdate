<?php

$from="";
$to = "gavinmulvany96@gmail.com";

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$Message = Trim(stripslashes($_POST['Message']));
$promo = Trim(stripslashes($_POST['promo']));
$team = Trim(stripslashes($_POST['team']));

$body ="";
$body .="name: ";
$body .=$name;
$body .="\n";
$body .="email: ";
$body .=$email;
$body .="\n";
$body .="message: ";
$body .=$message;
$body .="\n";
$body .="promo: ";
$body .=$promo;
$body .="\n";
$body .="team: ";
$body .=$team;
$body .="\n";





$go = mail($to, $subject, $body, "From:<$from>");

if($go){

	print("It has been sent, thank you based god");




}
else{

	print("your email flopped like tyga's albums");



}





?>
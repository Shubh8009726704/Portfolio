<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "shbh8055@mail.com";
$subject = "Mail From website" ;
$headers = "From: $email" ;
if($email!=NULL){
    mail($to,$name,$message,$headers);
}
?>
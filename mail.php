<?php
 $to = "stamilselvi2k2@gmail.com";
 $subject = "THANK YOU FOR YOUR ORDER";

 $headers = array(
    "MIME-Version" =>"1.0",
    "Content-Type" =>"text/html;charset=UTF-8",
    "From" =>"dennis@gmail.com",
    "Reply-To" =>"dennis@gmail.com"
 );
 $message = file_get_contents("mail-template.php");
 $send =mail($to,$subject,$message,$headers);
 echo($send ? "Mail is send":"there was an error");

 ?>
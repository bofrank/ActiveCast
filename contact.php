<?php

  $myOrder = " ";
  
  $to = "bo@bofrank.com";
  $subject = "Inquiry";
  $body = "Name: ".$_POST["contactName"]." \n email: ".$_POST["email"]." \n comments: ".$_POST["comments"];
  $headers = "From:LPL form";

  if ((mail($to,$subject,$body,$headers))) {
    echo("Thank you ".$_POST["contactName"]."! We will be in touch soon.");
  }else{
    echo("Your message did not go through, please try again.");
  }

?>

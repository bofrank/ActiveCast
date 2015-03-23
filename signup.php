<?php

	$to = "info@topicb.com";
	$subject = "registered from ActiveCast.tv";
	$body = "new registration from ".$_GET["useremail"];;
	$headers = "From:ActiveCast";

	if (mail($to,$subject,$body,$headers)) {
    echo("thank you");
  }else{
    echo("Your email did not go through.");
  }

?>
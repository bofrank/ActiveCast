<?php
require_once 'facebook.php';

$appapikey = '68d5b5eb3f1c319d9e84f4e439986339';
$appsecret = 'e50a380bf44ce26f74de93c4aa18d2cf';
$facebook = new Facebook($appapikey, $appsecret);
$user = $facebook->require_login();

//[todo: change the following url to your callback url]
$appcallbackurl = 'http://www.bofrank.com/fb/';

//catch the exception that gets thrown if the cookie has an invalid session_key in it
/*
try {
  if (!$facebook->api_client->users_isAppAdded()) {
    $facebook->redirect($facebook->get_add_url());
  }
} catch (Exception $ex) {
  //this will clear cookies for your application and redirect them to a login prompt
  $facebook->set_user(null, null);
  $facebook->redirect($appcallbackurl);
}
*/
<center>
<span><b>Friendsteroids 1.00</b></span>
</center>
<table style='float:left;'>
<?php
require_once 'dbappinclude.php';
require_once 'appinclude.php';
$facebook = new Facebook($appapikey, $appsecret);

$facebook->api_client->fbml_refreshRefUrl("http://apps.facebook.com/friendsteroids/");

$today = date("Ymd"); 
$result=query("SELECT * FROM highscoreasteroids WHERE date=$today ORDER BY score DESC") or die (mysql_error());
$number_cols=mysql_num_fields($result);

$i=1;
while ($row=mysql_fetch_row($result))
{
	$result_username=$row[0];
	$result_score=$row[1];
	echo "<tr><td><font face='arial' size='1'>&nbsp;&nbsp;&nbsp;$i.</td><td width='60'><font face='arial' size='1'>&nbsp;$result_username</td><td class='scoredisplay' width='170'><font face='arial' size='1'>$result_score&nbsp;&nbsp;&nbsp;</td></tr>";
	$i++;
	if(($i==6)||($i==11))
		echo "</table><table style='float:left;'>";
	if($i>15)
		break;
}

?>
</table>
<div style="clear:both;"></div>
<br>
<br>
<?php
  $result1 = $facebook->api_client->fql_query("SELECT pic_square FROM user WHERE uid=$user");
  $result2 = $facebook->api_client->fql_query("SELECT name FROM user WHERE uid=$user");

  $pic_square = $result1[0]['pic_square'];
  $name = $result2[0]['name'];

  $friend = $facebook->api_client->friends_get();
  

  //boost
  
  $length=sizeof($friend);
  $random = (rand()%$length);
  $result3a = $facebook->api_client->fql_query("SELECT pic_square FROM user WHERE uid=$friend[$random]");
  $random = (rand()%$length);
  $result3b = $facebook->api_client->fql_query("SELECT pic_square FROM user WHERE uid=$friend[$random]");
  $random = (rand()%$length);
  $result3c = $facebook->api_client->fql_query("SELECT pic_square FROM user WHERE uid=$friend[$random]");
    
  $result4 = $facebook->api_client->fql_query("SELECT name FROM user WHERE uid=$friend[0]");

  $pic_square2a = $result3a[0]['pic_square'];
  $pic_square2b = $result3b[0]['pic_square'];
  $pic_square2c = $result3c[0]['pic_square'];
  
  //if($pic_square2c==""){
  //	$pic_square2c="rock.jpg";
  //}
  
  $name2 = $result4[0]['name'];
  
  //friendsteroids
  //echo "3rd = $pic_square2c";
  echo "<div style='border:solid 1px #333333;'>";
  echo "<fb:swf swfbgcolor='ffffff' swfsrc='http://www.bofrank.com/games/friendsteroids/fb/friendsteroids.swf' width='645' height='400' flashvars='friendPhoto1=$pic_square2a&friendPhoto2=$pic_square2b&friendPhoto3=$pic_square2c' />";
  echo "</div>";
  echo "hello";

?>


      

  
      <fb:iframe width="645" height="60" src="http://www.socialmedia.com/facebook/monetize.php?adid=afc9c36d040fd81293b450f2da6e553b&amp ></fb:iframe>
    






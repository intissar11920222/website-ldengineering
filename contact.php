<?php 
$errors = '';
$secret = '6LePaWAUAAAAAM-2OEnSokwhfOwDGCA7bS3V42bg';
$response=$_POST["captcha"];

$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$captcha_success=json_decode($verify);
if ($captcha_success->success==true) {
  //This user was not verified by recaptcha.

	$limit_size=10000000;
	$myemail = 'saif.sidaoui@yahoo.fr'; 
	
	if(empty($_POST['name'])  ||
	   empty($_POST['email']) ||
	   empty($_POST['subject']) ||
	   empty($_POST['message']))
	{
	$errors .= "\n Error: Champ obligatoire";
	echo $errors ;
	} else{	

    /*data*/
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$headers = "From: webmaster@LDEngineering.fr";

	$to = $myemail;
	$email_subject = "Un nouveau message vous attend: $subject";
	$txt = "Vous avez reçu un nouveau message de votre site Web http://www.LDEngineering.fr. Les détails sont donnés ci-dessous.\n Name: $name \n Email: $email \n Message: \n $message";
	
	// preparing attachments
	
 
	$success = mail($to, $email_subject, $txt, $headers);
	echo "ok" ;
	}
}
else if ($captcha_success->success==false) {
  //This user is verified by recaptcha
echo  "no";

}


   
?>


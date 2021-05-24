<?php

if(isset($_POST['g-recaptcha-response'])){
	$captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
	echo '<h2>Please check the the captcha form.</h2>';
	exit;
}

$secretKey = "6LcncNsUAAAAAJcfkQqgjZewwRIdc_7jFpJ_7qnP";
$ip = $_SERVER['REMOTE_ADDR'];

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);


if ($responseKeys["success"] && isset($_POST['email'])) {
	$nom = $_POST['nom'];
	$email =$_POST['email'];
	$message = $_POST['message'];

	$sujet = $nom." vous a contacté ";
	$messagePerso = "Vous avez reçu le message suivant : ".$message." vous pouvez la recontacter à l'adresse : ".$email;

	mail("raulet.pauline@gmail.com", $sujet, $messagePerso);
	echo "Votre message a été envoyé.";

	header("Location: contact.html");
	sleep(5);
} else {
	header("Location: contact.html");
}
?>
<?
error_reporting(E_ALL);
ini_set('display_errors',	1);
require("phpmailer/class.phpmailer.php");

define("email_host", "mail.umates.com");
define("email_defauthusername", "uniflip@uniflip.com");
define("email_defauthpassword", "UniMail200");
define("email_smtpauth", false);
define("email_deffrom", "uniflip@uniflip.com");
define("email_deffromname", "Mailer uniflip.com");
define("email_defreplyto", "uniflip@uniflip.com");
define("email_defreplytoname", "Support uniflip.com");

$from= 'rpeinado@asystem.es';
$to= 'rpeinado@asystem.es';
$subject= 'the subject';
$message= 'the test message';
$headers= 'From: ' . $from . "\r\n" .
		  'Reply-To: ' . $from . "\r\n" .
		  'X-Mailer: PHP/' . phpversion();

	$mail = new PHPMailer();
  	$mail->CharSet  = "UTF-8";
	$mail->Host     = email_host;
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Username = email_defauthusername;
	$mail->Password = email_defauthpassword;
	$mail->From     = $from;
	$mail->FromName = $from;
	$mail->Subject  = $subject;
	$mail->Body     = $message;
	$mail->AltBody  = $message;
	$mail->AddAddress($to, $to);
	$mail->AddReplyTo($from, $from);
	$mail->AddReplyTo($from, $from);

	$result= $mail->Send();

	$mail->ClearAddresses();


	//$result= mail($to, $subject, $message, $headers);

	pinta($result);

	if (!$result)
	{
		print_r(error_get_last());
		die("not sent!!");
	}
	else
	{
		die("success!!");
	}

	unset($mail);


function pinta($data, $end= false)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";

	if ($end)
	{
		die();
	}
}
?>
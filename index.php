<?
die("pipi");
error_reporting(E_ALL);
ini_set('display_errors',	1);
$path_log= __DIR__ . '/' . 'log.log';
ini_set('error_log', $path_log);

print_r($path_log);

//$po= 4/0; echo "(($po))"; // dsdfsd

$to= 'rpeinado@asystem.es';
$subject= 'asunto';
$message= 'lets get outta here madafaca';
$headers= 'From: popo@uniflip.dev' . "\r\n" .
		  'Reply-To: popo@pipi.com' . "\r\n" .
		  'X-Mailer: PHP/' . phpversion();

$result= mail($to, $subject, $message, $headers);

if (!$result)
{
	print_r(error_get_last());
	die("very bad!!");
}
else
{
	die("success!!");
}

echo "mail result: (($result))";

?>
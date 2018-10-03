<?

//die("pipi");
error_reporting(E_ALL);
ini_set('display_errors',	1);
$path_log= __DIR__ . '/' . 'log.log';
ini_set('error_log', $path_log);

pinta($path_log);

//$po= 4/0; echo "(($po))"; // dsdfsd

$to= 'rpeinado@asystem.es';
$subject= 'the subject';
$message= 'the test message';
$headers= 'From: uniflip@uniflip.com' . "\r\n" .
		  'Reply-To: uniflip@uniflip.com' . "\r\n" .
		  'X-Mailer: PHP/' . phpversion();

$result= mail($to, $subject, $message, $headers);

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
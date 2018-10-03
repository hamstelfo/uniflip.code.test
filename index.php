
<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "emailtest@asystem.es";
    $to = "rpeinado@asystem.es";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";
?>

<?

//die("pipi");
error_reporting(E_ALL);
ini_set('display_errors',	1);
$path_log= __DIR__ . '/' . 'log.log';
ini_set('error_log', $path_log);

pinta($path_log);

//$po= 4/0; echo "(($po))"; // dsdfsd

$to= 'rpeinado@asystem.es';
$subject= 'asunto';
$message= 'lets get outta here madafaca';
$headers= 'From: popo@uniflip.dev' . "\r\n" .
		  'Reply-To: popo@pipi.com' . "\r\n" .
		  'X-Mailer: PHP/' . phpversion();

$result= mail($to, $subject, $message, $headers);

pinta($result);

if (!$result)
{
	print_r(error_get_last());
	die("very bad!!");
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
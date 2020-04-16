<?
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
require 'class.phpmailer.php';

//
// Receive params
//
$surname = addslashes( $_POST['surname'] );
$name = addslashes( $_POST['name'] );
$patronymic = addslashes( $_POST['patronymic'] );
$phone = addslashes( $_POST['phone'] );
$via_email = isset( $_POST['answer_type_email'] );
$via_post = isset( $_POST['answer_type_letter'] );
$email = addslashes( $_POST['email'] );
$post_addr = addslashes( $_POST['post_addr'] );
$agree = isset( $_POST['agree'] );
$letter = htmlspecialchars( $_POST['letter'] );

//
// Check mandatory attrs
//

if ( 
	$surname == '' || 
	$name == '' || 
	( $via_email && $email == '' ) || 
	( $via_post && $post_addr == '' ) ||
	!$agree || $letter == '' )
{
	$answer = array(
		'status' => 'FAILED',
		'message' => 'Ошибка отправки сообщения: не все обязательные поля были заполнены или отправлено пустое письмо',
		'fields' => "$surname $name $vai_email $email $via_post $post_addr $agree $letter"
	);
	
	header('Content-Type', 'application/json; charset=UTF-8');
	echo json_encode( $answer );
	exit;
}

//
// Captcha test
//
/*
$secret = '6Lda0TQUAAAAAPq4thR-ID28WgcXKWhCo4ja-jHG';
$response = addslashes( $_POST['g-recaptcha-response'] );
$ip = $_SERVER['REMOTE_ADDR'];
$params = array( 'secret' => $secret, 'response' => $response, 'remoteip' => $ip );
//"secret=$secret&response=response&remoteip=$ip"


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt($ch, CURLOPT_POST, true );
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $params ) );
$captcha_result = curl_exec($ch);
curl_close($ch);
//$captcha_result = json_decode( $captcha_result );


//$captcha_result = http_post('www.google.com', '/recaptcha/api/siteverify/', $params, 443);

echo '-';
var_dump( $captcha_result );
exit;



function http_post($host, $path, $params, $port = 80) 
{
	$req = http_build_query( $params );

	$http_request  = "POST $path HTTP/1.0\r\n";
	$http_request .= "Host: $host\r\n";
	$http_request .= "Content-Type: application/x-www-form-urlencoded;\r\n";
	$http_request .= "Content-Length: " . strlen($req) . "\r\n";
	$http_request .= "User-Agent: reCAPTCHA/PHP\r\n";
	$http_request .= "\r\n";
	$http_request .= $req;

	$response = '';
	if( false == ( $fs = @fsockopen($host, $port, $errno, $errstr, 10) ) ) {
					die ('Could not open socket');
	}

	fwrite($fs, $http_request);

	while ( !feof($fs) )
					$response .= fgets($fs, 1160); // One TCP-IP packet
	fclose($fs);
	$response = explode("\r\n\r\n", $response, 2);

	return $response;
}
*/



//
// Send email message
//
$subject = '[WEB] Сообщение с сайта';

$html = '<p>Сообщение с сайта:</p>';
$html .= "<p><b>Отправитель:</b> $surname $name $patronymic</p>";
if ( $phone != '' ) "<p><b>Телефон:</b> $phone</p>";
if ( $via_email ) $html .= "<p>Отправитель запросил ответ по электронной почте на адрес: <a href=\"mailto:$email\">$email</a></p>";
if ( $via_post ) $html .= "<p>Отправитель запросил письменный ответ на адрес: $post_addr</p>";
$html .= '<p><b>Текст сообщения</b></p>';
$html .= $letter;


$body = "Сообщение с сайта:\n";
$body .= $letter;
$body .= "\n\nС уважением,";
$body .= "\n\t$surname $name $patronymic";
$body .= "\n\tE-mail: $email";
$body .= "\n\tАдрес: $post_addr";


//$recipient = 'tarasenkoia@kamgov.ru';
$recipient = 'gko@kamgov.ru';
$from = 'gko-noreply@kamgov.ru';

$host = "proxy-01";
$port = 25;
//$protocol = 'ssl';
//$username = 'kgku-kgko-web@mail.ru';
//$password = 'keBt1821kdK_';

$mail = new PHPMailer(true);
try
{
	$mail->SMTPDebug = 0;                                 // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = $host;  																// Specify main and backup SMTP servers
	//$mail->SMTPAuth = true;                               // Enable SMTP authentication
	//$mail->Username = $username;                 					// SMTP username
	//$mail->Password = $password;                      		// SMTP password
	//$mail->SMTPSecure = $protocol;                        // Enable TLS encryption, `ssl` also accepted
	$mail->Port = $port;                                  // TCP port to connect to

	//Recipients
	$mail->setFrom($from, 'Сайт КГБУ КГКО');
	$mail->addAddress($recipient, 'КГБУ КГКО, Приемная');   // Add a recipient

	//Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $subject;
	$mail->Body    = $html;
	$mail->AltBody = $body;
	$mail->CharSet = 'UTF-8';

	$mail->send();	

	$answer = array(
		'status' => 'OK',
		'message' => 'Ваше сообщение отправлено! Спасибо за обращение.'
	);	
}
catch (Exception $e) 
{
	$answer = array(
		'status' => 'FAILED',
		'message' => 'Произошла ошибка при отправке вашего сообщения (' . $result . ')! Приносим свои извинения.'
	);
}

header('Content-Type', 'application/json; charset=UTF-8');
echo json_encode( $answer );
exit;
?>
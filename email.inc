<?
function safe_email( $email )
{
	$output = '<a class="email" href="javascript:void(0)" data-href="';
	
	for ($i = 0, $first = true; $i < strlen($email); $i++, $first = false)
	{
		if ( !$first ) $output .= ',';
		$output .= ord($email[$i]); 
	}
		
	//$email = str_replace('@', '(a)', $email);
	
	$output .= '">скрыто</a>';

	echo $output;
}

function safe_email2( $email )
{
	$output = '<a class="email" href="javascript:void(location.href=\'mailto:\'+String.fromCharCode(';
	
	for ($i = 0; $i < strlen($email); $i++)
	{
		$output .= ord($email[$i]).','; 
	}
	
	$email = str_replace('@', '(a)', $email);
	
	$output .= '))">' . $email . '</a>';

	echo $output;
}
?>
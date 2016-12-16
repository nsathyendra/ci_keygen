<?php
function get_key($length=32) {
	$characters = array(
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		
		'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
		
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
		
		'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
		
		'0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
	);
	$key = '';
	for($i = 0; $i < $length; $i++) {
		$key .= $characters[rand(0, count($characters)-1)];
	}
	return $key;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Codeigniter Secret Encryption Key Generator Web App 
	Security</title>
	<meta name="Description"
	      content="Improve the security of your codeigniter and other 
	      web apps by using Random generated encryption keys for app 
	      API secret and session encryption.">
	<meta name="Keywords"
	      content="Encryption key generator, Random key generator, key 
	      generator, codeigniter encryption key generator, encryption 
	      key generator, php key generator, web security, session 
	      encryption, secret key, app secret key, secret encryption 
	      key">
	<style>
		body {
			font-family: Courier-new, monospace;
			font-size: 12px;
			color: #333;
			padding: 15px;
		}
	</style>
</head>
<body>
	<p><?php echo get_key(); ?></p>
	<form action="./"><input type="submit" value="↻" /></form>
</body>
</html>

<?php
	if (empty($_POST['name_24998_44071']) && strlen($_POST['name_24998_44071']) == 0 || empty($_POST['input_270']) && strlen($_POST['input_270']) == 0 || empty($_POST['input_331']) && strlen($_POST['input_331']) == 0 || empty($_POST['email_24998_44071']) && strlen($_POST['email_24998_44071']) == 0)
	{
		return false;
	}
	
	$name_24998_44071 = $_POST['name_24998_44071'];
	$input_270 = $_POST['input_270'];
	$input_331 = $_POST['input_331'];
	$select_1286 = $_POST['select_1286'];
	$email_24998_44071 = $_POST['email_24998_44071'];
	$optin_24998_44071 = $_POST['optin_24998_44071'];
	
	// Create Message	
	$to = 'receiver@yoursite.com';
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\nName_24998_44071: $name_24998_44071 \nInput_270: $input_270 \nInput_331: $input_331 \nSelect_1286: $select_1286 \nEmail_24998_44071: $email_24998_44071 \nOptin_24998_44071: $optin_24998_44071 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_24998_44071";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>
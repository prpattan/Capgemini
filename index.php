<?php 
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody)
	
	$text = $json->result->parameters->text;
	
	switch($text){
		case 'hi':
		speech = "Hi, nice to meet you";
		Break;
		
		case 'bye':
		speech = "Bye, Good night";
		break;
		
		case 'anything':
		speech = "Yes, You can type anything here";
		break;
		
		default:
		speech = "Sorry, i didn't get that. please";
		break;
	}
	
	$response = new \stdClass();
	$response->speech = "";
	$response->displayText = "";
	$response->source = "Webhook";
	echo json_encode($response);
}
else
{
	echo "Method not allowed";
}

	
		
	


?>
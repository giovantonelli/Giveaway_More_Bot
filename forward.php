<?php

//	ATTENZIONE! Non modificare nulla di questo file!
//	ATTENZIONE! Non modificare nulla di questo file!
//	ATTENZIONE! Non modificare nulla di questo file!

//	Creato da @xSamumine
//	Distribuito da @AVPlugin

include("config_forward.php");
$gruppi = file_get_contents("iscritti/gruppi.txt");
$msgID = $update["message"]["message_id"];
$type_chatID = $update["message"]["chat"]["type"];

if($update and $chatID < 0 and $type_chatID == "supergroup")
{
	if(preg_match("/$chatID/i", $gruppi))
	{
		
	}else{
		if(file_exists("iscritti/gruppi.txt"))
		{
			$file = "iscritti/gruppi.txt";
			$f2 = fopen($file, 'a');
			fwrite($f2, $chatID."\n");
			fclose($f2);
		}else{
			mkdir("iscritti");
			$file = "iscritti/gruppi.txt";
			$f2 = fopen($file, 'a');
			fwrite($f2, $chatID."\n");
			fclose($f2);
		}
	}
}

function forwardMessage($fromID, $toID, $msgID)
{
	global $api;
	global $update;

	$args = array(
		"chat_id" => $toID,
		"from_chat_id" => $fromID,
		"message_id" => $msgID,
	);

	$r = new HttpRequest("post", "https://api.telegram.org/$api/forwardMessage", $args);
}

if($update and $chatID == $canale)
{
	$e = explode("\n", $gruppi);
	foreach($e as $gruppo)
	{
		forwardMessage($chatID, $gruppo, $msgID);
	}
}
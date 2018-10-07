<?php

echo '<br>Plugin Live-Chat 1.0';

$admins = array(
	$adminID
);

function fm($toID, $fromID, $msgID)
{
  global $api;
  global $update;
  global $chatID;

  $fromID = $chatID;
  $msgID = $update["message"]["message_id"];

  $args = array(
    "chat_id" => "$toID",
    "from_chat_id" => "$fromID",
    "message_id" => "$msgID"
);

  $add = new HttpRequest("post", "https://api.telegram.org/$api/forwardMessage", $args);

}

if($msg == '/sponsoresci' and $u['page'] == 'chat') {
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start2"),
);
cb_reply($cbid, "", false, $cbmid, "\xE2\x9C\x85*Annullato*", $menu, 'Markdown', false, false, true);
  mysql_query("update $tabella set page = ' ' where chat_id = \"$chatID\" or username = \"".str_replace("@","",$username)."\"");
  exit;
}

if($msg == '/sponsor' and $u['page'] !== 'chat') {
$menu[] = array(
array(
"text" => "\xE2\x9D\x8CAnnulla\xE2\x9D\x8C",
"callback_data" => "/sponsoresci"),
);
cb_reply($cbid, "", false, $cbmid, "*Invia qui, ora, il messaggio di sponsor da inviare al canale!*", $menu, 'Markdown', false, false, true);
  mysql_query("update $tabella set page = 'chat' where chat_id = \"$chatID\" or username = \"".str_replace("@","",$username)."\"");
  exit;
}

if($msg == '/esci' and $u['page'] == 'chat') {
$menu[] = array(
array(
"text" => "\xF0\x9F\x94\x99Torna indietro",
"callback_data" => "/start2"),
);
cb_reply($cbid, "", false, $cbmid, "*Chat Chiusa*", $menu, 'Markdown', false, false, true);
  mysql_query("update $tabella set page = ' ' where chat_id = \"$chatID\" or username = \"".str_replace("@","",$username)."\"");
  exit;
}


if($msg == '/chat' and $u['page'] !== 'chat') {
$menu[] = array(
array(
"text" => "Esci",
"callback_data" => "/esci"),
);
cb_reply($cbid, "", false, $cbmid, "*Sei stato messo in contatto con un operatore!*", $menu, 'Markdown', false, false, true);
  mysql_query("update $tabella set page = 'chat' where chat_id = \"$chatID\" or username = \"".str_replace("@","",$username)."\"");
  exit;
}

if($u['page'] == 'chat' and $update) {
  foreach($admins as $ad) {
    fm($ad, $fromID, $msgID);
  }
  exit;
}

if(in_array($userID, $admins) and $update['message']['reply_to_message']['forward_from']['id'] and $msg) {
  sm($update['message']['reply_to_message']['forward_from']['id'], 'Risposta dagli Admins:' . "\n" . $msg);
  sm($chatID, 'Inviato.');
}

 ?>

<?php
require_once __DIR__ . '/lineBot.php';
$message = $_REQUEST['msg'];

$bot = new Linebot();
//$text = $bot->getMessageText();
echo $message;
$bot->reply($message);

?>




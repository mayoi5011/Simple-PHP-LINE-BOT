<?php
require_once __DIR__ . '/lineBot.php';
$message = $_REQUEST['msg'];

$bot = new Linebot();
//$text = $bot->getMessageText();
$bot->reply($message);

?>




<?php
require_once __DIR__ . '/lineBot.php';
$message = $_GET['msg'];

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($message);

?>




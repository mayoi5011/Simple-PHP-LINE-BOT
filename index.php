<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($text);

$url = "https://apecpv.cmru.ac.th/projecterdi/adduser.php?id=".$id;
$json = file_get_contents($url);
$obj = json_decode($json);
var_dump($obj);
			foreach($obj as $key=>$value)
			{
				$resule = $value;
			}
		    
			$arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
			$arrayPostData['messages'][0]['type'] = "text";
			$arrayPostData['messages'][0]['text'] = $resule;
			/*if($resule == "no"){
				$arrayPostData['messages'][0]['text'] = "ฉันจำได้ว่าคุณสมัครสมาชิกไปแล้วนะ";
			}else if($resule == "ok"){
				$arrayPostData['messages'][0]['text'] = "สมัครสมาชิกแล้วจร้าาาาาา";
			}else if($resule == "error"){
				$arrayPostData['messages'][0]['text'] = "มีบางอย่างผิดพลาด";
			}*/
		    
?>




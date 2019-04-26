<?php
 	$case = $_GET['case'];
	
	$user_id = "Ub5bd2d0b18e3e8f76cd94e897f05c654";

	if($case == "1"){
		$last_orp = $_GET['orp'];
		$last_temp = $_GET['temp'];
		$last_ph = $_GET['ph'];
		$time = $_GET['time'];
		$message = "ข้อมูลการพยากรณ์\nORP: ".$last_orp."\nTemp.: ".$last_temp."\nPH: ".$last_ph."\nข้อมูล ณ เวลา ".$time;
	} else if($case=="2"){
		$norp = $_GET['norp'];
		$lorp = $_GET['lorp'];
		$ntemp = $_GET['ntemp'];
		$ltemp = $_GET['ltemp'];
		$nph = $_GET['nph'];
		$lph = $_GET['lph'];
		$time = $_GET['time'];
		$message = "ข้อมูลมีความผิดปกติ\nข้อมูลก่อนหน้า=>\nORP: ".$lorp."\nTemp: ".$ltemp."\nPH: ".$lph."\nข้อมูลปัจจุบัน=>\nORP: ".$norp."\nTemp: ".$ntemp."\nPH: ".$nph."\nกรุณาตรวจสอบความผิดพลาด\nข้อมูล ณ เวลา ".$time;
	}
	sendx($user_id, $message);

function sendx($x, $msg){
		$strAccessToken = "oKfXSEXkmDRNdxcUrkAJrvoJ49gdmeCM+MoMbpLXOKXicGis8P7YsIWT0f5BBYP9h3xjTVxRkUdyQGKr3rg6X5nRmSnIMEe7w9+oZ4fKO8d6rEZeiGruIfNwV5eFmsMoPHbb9fdbw92/nWN/jsPpPgdB04t89/1O/w1cDnyilFU=";

		$strUrl = "https://api.line.me/v2/bot/message/push";
		$arrHeader = array();
		$arrHeader[] = "Content-Type: application/json";
		$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

		$arrPostData = array();
		//$arrPostData['to'] = "U46a1d85c0bc2680759da5e45b8342bbd";
		$arrPostData['to'] = $x;
		$arrPostData['messages'][0]['type'] = "text";
		$arrPostData['messages'][0]['text'] = $msg;
		
	    $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$strUrl);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close ($ch);
}

 
?>

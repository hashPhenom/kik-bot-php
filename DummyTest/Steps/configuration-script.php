<?php

const USERNAME = "";
const API_KEY  = "";

$headers = [
	'Content-Type: application/json', 
	'Authorization: Basic ' . base64_encode(USERNAME.':'.API_KEY)
];

class ConfigData {
	public $webhook;
	public $features;
}

class FeaturesData {
	public $manuallySendReadReceipts = true;
	public $receiveReadReceipts = true;
	public $receiveDeliveryReceipts = true;
	public $receiveIsTyping = true;
}

$e = new ConfigData();
$e->webhook = "http://anylinkexceptlocalhostfortesting.com/receive";

$f = new FeaturesData();

$e->features = $f;




$curl = curl_init('https://api.kik.com/v1/config');
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($e));
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
var_dump( curl_exec($curl));

?>

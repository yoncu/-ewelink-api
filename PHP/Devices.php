<?php
$Curl = curl_init('https://www.yoncu.com/API/eWeLink/Devices');
curl_setopt_array($Curl,[
	CURLOPT_RETURNTRANSFER	=> true,
	CURLOPT_HEADER		=> false,
	CURLOPT_HTTPHEADER	=> [
		'Accept: application/json',
		'Authorization: Basic Base64Encode(##APIID##:##APIKEY##)',
		'Referer: https://www.yoncu.com',
		'User-Agent: '.$_SERVER['REQUEST_URI'],
	],
	CURLOPT_CUSTOMREQUEST	=> 'POST',
	CURLOPT_POST		=> true,
	CURLOPT_POSTFIELDS	=> '{"email":"","password":"","region":"as"}',
]);
$Response	= curl_exec($Curl);
$HttpCode	= curl_getinfo($Curl,CURLINFO_HTTP_CODE);
curl_close($Curl);
if($Json=json_decode($Response,true)){
	list($Durum,$Bilgi)	= $Json;
	if($Durum){
		echo 'İşlem Başarılı';
	}else{
		echo 'Hata: '.$Bilgi;
	}
	echo 'Debug: '.var_Export($Json,true);
}else{
	echo 'Veri Çekilemedi';
}
?>

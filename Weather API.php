<?php


$url = 'http://api.openweathermap.org/data/2.5/weather' ;
$options = array(
    'id' => 703448,
    'APPID' =>'fe63758d7053918063a6867dd1393913' ,
    'units' =>'metric',
    'lang' =>'en',
);

$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1) ;
curl_setopt($ch,CURLOPT_URL,$url.'?'.http_build_query($options)) ;

$response = curl_exec($ch) ;
$data = json_decode($response, true) ;

curl_close($ch);
echo '<pre>';
print_r($data);

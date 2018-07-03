<?php
$access_token = 'DUSA3DrMNntLjkCR2FK4nr2Bcjz2Bk7KyZLeJ+dZkl2vIIvs/2lSXp625uEmy6WT6qhFYjMQuVhswpXqKNHe9QRag++4YXDY8i58fWBYClH4KEF2GUJfx64/zALZ3qO2BUCE0rGUeWCwwS4vz0FecAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

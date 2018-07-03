<?php



require "vendor/autoload.php";

$access_token = 'DUSA3DrMNntLjkCR2FK4nr2Bcjz2Bk7KyZLeJ+dZkl2vIIvs/2lSXp625uEmy6WT6qhFYjMQuVhswpXqKNHe9QRag++4YXDY8i58fWBYClH4KEF2GUJfx64/zALZ3qO2BUCE0rGUeWCwwS4vz0FecAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fd84ae0159d2c0c776d0519ee1c3636a';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








<?php



require "vendor/autoload.php";

$access_token = 'jt4M3WuHBs1EngLr+R8T1gr9PwxjnBdyT1XZP41xU4zTxxpWNaWU0sBSF01O/S186qhFYjMQuVhswpXqKNHe9QRag++4YXDY8i58fWBYClFv0rmIthZtcjRryJThhJynTn+gmRntLkNDln6oCm40NQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fd84ae0159d2c0c776d0519ee1c3636a';

$pushID = 'Ue8b4d0638b780f9dde18f5806ea391a8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();








<?php
require "vendor/autoload.php";
$access_token = 'FKoAKVKjCin5Fi0L0/MfjG61C6CyZMUtaV1qtqQBZpSFat1a2YJR6aRdKzFSnHWek9ZSJtoPI8YHYEKePisYwNnzWgHYpU9JNWQ7Fobp/dLykecDXExsjUAqfz5RfgE+2hyI97rpugb+MPBybw/prgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '61b9f4cb437a2c27cd4e48316eb89fc9';
$idPush = 'U52c8feff9cd1d91617da649df0e3ce43';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('MSOM-MSC3');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>

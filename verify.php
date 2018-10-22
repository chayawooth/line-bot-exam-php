<?php
$access_token = 'FKoAKVKjCin5Fi0L0/MfjG61C6CyZMUtaV1qtqQBZpSFat1a2YJR6aRdKzFSnHWek9ZSJtoPI8YHYEKePisYwNnzWgHYpU9JNWQ7Fobp/dLykecDXExsjUAqfz5RfgE+2hyI97rpugb+MPBybw/prgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
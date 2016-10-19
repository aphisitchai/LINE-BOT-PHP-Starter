<?php
$access_token = 'Bzz3mqHJyZ8/bJtTd7jimgNz2D0qk92CanauSsEzb9Mb+Ej5H1GEbUcHIeanTL3FGSOD5i86j2kr35t0DCNbQdSM8uoq/A58YU6MddwByEKmL6K6kIBHp13Y+e4NmMlfuEVxmE6v3JrDyuo4nASqnwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

<?php
$access_token = 'lWF7amB1WGocJ3CzMsQ78Rjed/9T61jB0s893PVhyTrbF/CuCVN4ZgMWjpUz05HlSiSM/kEpT6N0YQ6nTOhRCKcUmfCAM/WV33qiArst0AlnPaA+DZGyf1oLvQwFKkkMryKbv3/F4yc7cQT6P+RnRAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

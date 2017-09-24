<?php
$access_token = 'BVfLp1yOUeUZpcqoRbdApEW6hqHvCCNLSAWPdRkYW1otsToobQ2qTvcyte5t0G8wXTtUJuZF71f0orZZuZe+halI1AXHiwZaxZbTCDR5xSCMPVvlRwSIOsuesPAwEjWAlREQ7aR9XPEiFV1/tNgdBAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

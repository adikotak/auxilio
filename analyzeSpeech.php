<?php
//$cmd = 'curl -u 5fca9714-65c7-4789-9c1c-fc4345ec9b66:0vX8TffEgqTV -X POST --limit-rate 40000 --header "Content-Type: audio/flac" --header "Transfer-Encoding: chunked" --data-binary @0001.flac "https://stream.watsonplatform.net/speech-to-text/api/v1/recognize?continuous=true"';

$username = '5fca9714-65c7-4789-9c1c-fc4345ec9b66';
$password = '0vX8TffEgqTV';
$url = 'https://stream.watsonplatform.net/speech-to-text/api/v1/recognize';
$file = fopen('tmp/0001.flac', 'r');
$size = filesize('tmp/0001.flac');
$filldata = fread($file,$size);
$headers = array("Content-Type: audio/flac", "Transfer-Encoding: chunked");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $filldata);
curl_setopt($ch, CURLOPT_INFILE, $file);
curl_setopt($ch, CURLOPT_INFILESIZE, $size);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$run = curl_exec($ch);
curl_close($ch);
print_r ($run);

?>

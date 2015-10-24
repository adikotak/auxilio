<?php
// $username='5fca9714-65c7-4789-9c1c-fc4345ec9b66';
// $password='0vX8TffEgqTV';
// $URL='https://stream.watsonplatform.net/speech-to-text/api/v1/recognize?continuous=true';
//
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL,$URL);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
// curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: audio/flac']);
// curl_setopt($ch, CURLOPT_HTTPHEADER, ['Transfer-Encoding: chunked']);
// curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
// $post = array("@0001.flac");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
// $result= curl_exec ($ch);
// echo ($result);
// curl_close ($ch);
$cmd = 'curl -u 5fca9714-65c7-4789-9c1c-fc4345ec9b66:0vX8TffEgqTV -X POST --limit-rate 40000 --header "Content-Type: audio/flac" --header "Transfer-Encoding: chunked" --data-binary @0001.flac "https://stream.watsonplatform.net/speech-to-text/api/v1/recognize?continuous=true"';
// exec($cmd);
$obj = json_decode(exec($cmd));
echo($obj[0]->text);
?>

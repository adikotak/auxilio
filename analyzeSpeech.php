<?php
$cmd = '/usr/bin/curl -u 5fca9714-65c7-4789-9c1c-fc4345ec9b66:0vX8TffEgqTV -X POST
--limit-rate 40000 --header "Content-Type: audio/flac" --header "Transfer-Encoding: chunked"
--data-binary @0001.flac "https://stream.watsonplatform.net/speech-to-text/api/v1/recognize?continuous=true"';
exec($cmd, $result);

?>

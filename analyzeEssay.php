<!DOCTYPE html>
<html lang="en">
<?php
include ('nav.php');
$essay = trim($_POST['essayEntry']);
// Get cURL resource
$ch = curl_init();
// Set some options - we are passing in a useragent too here
$request = array('key' => 'abcdef', 'data' => $essay);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
//curl_setopt($ch, CURLOPT_URL, 'http://service.afterthedeadline.com/checkDocument?key='.$request['key'].'&data="'.$essay.'"');
$url = 'http://service.afterthedeadline.com/checkDocument?key='.$request['key'].'&data="'.rawurlencode($essay).'"';

curl_setopt($ch, CURLOPT_URL, $url);
// print_r($url);
// Send the request & save response to $resp
$resp = curl_exec($ch);
$results = new SimpleXMLElement($resp);
// echo $results->error[0]->string;
$words = preg_split('/\s+/',$essay);
// unset($results[$error->string]);
//   print_r($results);
$wordErrors = array_fill(0 , count($words) , 0);
$descriptions = array_fill(0 , count($words) , null);
foreach ($words as $word)
{
  foreach ($results as $error)
  {
    if (strstr($error->string,$word))
    {
      $id = array_search($word, $words);
      $wordErrors[$id] = true;
      $descriptions[$id] = $error->description;
      break;
    }
  }
}
curl_close($ch);
?>

<body>

  <div class ="container">
    <div class="panel panel-default">
      <div class="panel-body">

        <?php

        for ($i =0;$i < count($words);$i++)
        {
          if($wordErrors[$i]==1)
          {
              ?> <a data-toggle="tooltip" title="<?echo($descriptions[$i]);?>" style="color:red "><?echo $words[$i];?></a><?
              echo " ";
          }
          else{
            echo $words[$i]." ";
          }

        }

        ?>
      
    </div>

  </div>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
	<script>
		$('a').tooltip();
	</script>
</body>
</html>

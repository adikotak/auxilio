<!DOCTYPE html>
<html lang="en">
<div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>
  <?php
  include ('nav.php');
  $essay = trim($_GET['essayEntry']);
  // Get cURL resource
  $ch = curl_init();
  // Set some options - we are passing in a useragent too here
  $request = array('key' => 'abcdef', 'data' => $essay);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  //curl_setopt($ch, CURLOPT_URL, 'http://service.afterthedeadline.com/checkDocument?key='.$request['key'].'&data="'.$essay.'"');
  $url = 'http://service.afterthedeadline.com/checkDocument?key='.$request['key'].'&data="'.rawurlencode($essay).'"';

  curl_setopt($ch, CURLOPT_URL, $url);
  //print_r($url);
  // Send the request & save response to $resp
  $resp = curl_exec($ch);
  $results = new SimpleXMLElement($resp);
  // echo $results->error[0]->string;
  $words = preg_split('/\s+/',$essay);
  // unset($results[$error->string]);
  //  print_r($words);
  $wordErrors = array_fill(0 , count($words) , 0);
  $descriptions = array_fill(0 , count($words) , null);
  $suggestions = array_fill(0 , count($words) , null);

  foreach ($words as $word)
  {
    $word = trim($word);
    foreach ($results as $error)
    {
      $errors = preg_split('/\s+/',$error->string);
      if(count($errors)>1)
      {
        if($word!=$words[count($words)])
        {
          $id = array_search($word,$words);
          // echo " error ".trim($error->string);
          // echo " words ".$word." ".$words[$id+1];
          if (trim($error->string)==$word." ".$words[$id+1])
          {
            $wordErrors[$id] = true;
            $descriptions[$id] = $error->description;
            $suggestions[$id] = $error->suggestions;
            $wordErrors[$id+1] = true;
            $descriptions[$id+1] = $error->description;
            break;
          }
        }
      }
      elseif (trim($errors[0])==$word)
      {
        $id = array_search($word, $words);
        $wordErrors[$id] = true;
        $descriptions[$id] = $error->description;
        $suggestions[$id] = $error->suggestions->option;
        break;
      }
    }
  }
  curl_close($ch);
  ?>

  <body>

    <div class ="container">
      <center>
        <h4 style= "font-family:'Open Sans'; color:#EDEDED; width:100vh; font-weight:100; line-height:50x; font-size:30px; margin-top:40px">Your Essay's Results.</h4>
      </center>
      <div class ="row">
        <div class = "col-md-12">
          <div class="panel panel-default" style = "margin-top:20px;">

            <?php if (count($descriptions)<3)?>
            <!-- <div class="panel-heading"><h4 style="color:green"> Great Job! You had no writing errors.</h4></div> -->

            <div class="panel-body">

              <?php

              for ($i =0;$i < count($words);$i++)
              {
                if($wordErrors[$i]==1)
                {
                  ?> <a data-toggle="tooltip" title="<?php echo($descriptions[$i]);?>" style="color:red "><?php echo $words[$i];?></a><?php
                  echo " ";
                }
                else{
                  echo $words[$i]." ";
                }
              }
              ?>
            </div>

          </div>
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

 <!DOCTYPE html>
 <html lang="en">
 <script>
   <body>
    <?php include('nav.php')?>
    <div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>

      <div class = "container">
        <div class="row">
          <div class = "col-md-8">
            <div class = "form-group">
              <form method ="GET" action ="analyzeEssay.php">
                <textarea id = "textarea" class = "form-control text" name = "essayEntry" onkeyup="process()">
                </textarea>
                <script>
                  function process(){
                    var key = window.event.keyCode;
                    if (key==190)
                    {
                       alert(key);
                     $essay = trim(document.getElementById("textarea").value);
                     $ch = curl_init();
                     $request = {'key':'abcdef', 'data':$essay};
                     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                      curl_setopt($ch, CURLOPT_HEADER, 0);
                      var url = 'http://service.afterthedeadline.com/checkDocument?key='+$request['key']+'&data="'+rawurlencode($essay)+'"';
                      curl_setopt($ch, CURLOPT_URL, $url);
                     $resp = curl_exec($ch);
                      $results = new SimpleXMLElement($resp);
                     $words = split('\ ',$essay);
                     $wordErrors = $wordErrors.fill(0 , count($words) , 0);
                     $descriptions = $descriptions.fill(0 , count($words) , null);

                     for each ($words in $word)
                      {
                      $word = trim($word);
                       for each ($results in $error)
                       {
                        $errors = preg_split('/\s+/',$error->string);
                         if(count($errors)>1)
                         {
                           if($word!=$words[count($words)])
                          {
                            $id = array_search($word,$words);
                            if (trim($error->string)==$word." ".$words[$id+1])
                            {
                              $wordErrors[$id] = true;
                              $descriptions[$id] = $error->description;
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
                          break;
                        }
                      }
                    }
                  //   curl_close($ch);
                  //   var list = document.createElement('ul');
                  // for each ($description in $descriptions)
                  // {
                  //   var item = document.createElement('li');
                  //   item.appendChild(document.createTextNode(array[i]));
                  //   list.appendChild(item);
                  // }
                  // return list;
                  // }


              }
              </script>
              <input type="submit" class="btn btn-default submit-button">
            </form>
          </div>
        </div>
        <div class = "col-md-4">
          <div class="panel panel-default suggestions">
            <div class="panel-heading">
              <h3 class="panel-title">Suggestions</h3>
            </div>
            <div class="panel-body">
              <ul>
                <li></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  </html>

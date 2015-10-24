<!DOCTYPE html>
<html lang="en">
  <?php include ('nav.php'); ?>
  <body>
    <div class ="container">

<?php
  $originalEntry = $_POST['emailEntry'];
  $originalEntry = trim($originalEntry);

  echo ("Original Message:" . "<br>");
  echo ($originalEntry . "<br>");
  echo ("<br>");

  $splitRegex = "/[\s]/";
  $words = preg_split($splitRegex, $originalEntry);

  $numWords = count($words);

  $greetingNotPresent = true;

  if ($words[0]=="Hello" || $words[0]=="Dear" || $words[0]=="Hi")
  {
    $greetingNotPresent = false;
  }

  if ($greetingNotPresent)
  {
    echo ("<p style='color:red'> You should probably add a greeting </p>");
  }

  $meetingPresent = false;
  $timeNotPresent = true;
  $locationNotPresent = true;

  for ($i=0; $i<$numWords; $i++)
  {
    if ($words[$i]== "meeting" || $words[$i]== "Meeting")
    {
      $meetingPresent = true;
    }
    if ($words[i]== "at" || $words[i]=="tomorrow" || $words[i]=="tonight" || $words[i]=="today")
    {
      $timeNotPresent = false;
    }
    if ($words[i]=="in")
    {
      $locationNotPresent = false;
    }
  }

  if ($meetingPresent && $timeNotPresent)
  {
    echo ("<p style='color:red'> Need Location Time </p>");
  }
  if ($meetingPresent && $locationNotPresent)
  {
    echo ("<p style='color:red'> Need Meeting Location </p>");
  }

  $db = "ad_cda192a887ff69f";
  $host = "us-cdbr-iron-east-03.cleardb.net";
  $username = "be69c4201781ac";
  $password = "abaf0684";

  $con = new mysqli($host, $username, $password, $db);

  $table = "slangwords";

  $query = "SELECT * FROM $table";

  for ($i=0; $i<$numWords; $i++)
  {
    $result = $con->query($query);
    if ($result->num_rows>0)
    {
      while ($row = $result->fetch_assoc())
      {
          $word = $row['words'];
          if ($words[$i] == $word)
          {
            echo("Word ". ($i + 1) . ", " . $words[$i] . " is a slang word." . "<br>");
          }
		  }
		}
  }
  mysqli_close($con);

?>
</div>
</body>
</html>

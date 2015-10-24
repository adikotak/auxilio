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

  $splitRegex = "/[\s]/";
  $words = preg_split($splitRegex, $originalEntry);

  $numWords = count($words);

  $meetingPresent = false;
  $timePresent = false;

  for ($i=0; $i<$numWords; $i++)
  {
    if ($words[$i]== "meeting" || $words[$i]== "Meeting")
    {
      $meetingPresent = true;
    }
    if ($words[i]== "at")
    {
      $timePresent = true;
    }
  }

  if ($meetingPresent && !$timePresent)
  {
    echo ("Need TIME");
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

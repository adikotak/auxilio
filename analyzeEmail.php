<!DOCTYPE html>
<html lang="en">
  <?php include ('nav.php'); ?>
  <body>
    <div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>
    <div class ="container">

<?php
  $originalEntry = $_POST['emailEntry'];
  $originalEntry = trim($originalEntry);
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
  $db = "ad_85361005547dc1d";
  $host = "us-cdbr-iron-east-03.cleardb.net";
  $username = "bc27100502fac4";
  $password = "40b5465f";
  $con = new mysqli($host, $username, $password, $db);
  $table = "slangwords";
  $query = "SELECT * FROM $table";
  for ($i=0; $i<$numWords; $i++)
  {
    $assigned = false;
    $result = $con->query($query);
    if ($result->num_rows>0)
    {
      while ($row = $result->fetch_assoc())
      {
          $word = $row['word'];
          if ($words[$i] == $word)
          {
            echo ("<a data-toggle-'tooltip' title='Slang' style='color:red'>" . $words[$i] . "</a>");
            echo (" ");
            $assigned = true;
          }
		  }
		}
    if (!$assigned)
    {
      echo ($words[$i]);
      echo (" ");
    }
  }
  mysqli_close($con);
?>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<script>
  $('a').tooltip();
</script>
</body>
</html>

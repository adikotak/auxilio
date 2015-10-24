<!DOCTYPE html>
<html lang="en">
  <?php include ('nav.php'); ?>
  <body>
    <div class ="container">

<?php
  $originalEntry = $_POST['emailEntry'];
  $splitRegex = "/[\s]/";
  $words = preg_split($splitRegex, $originalEntry);

  $numWords = count($words);

  $db = "ad_cda192a887ff69f";
  $con = new mysqli("us-cdbr-iron-east-03.cleardb.net", "be69c4201781ac", "abaf0684", $db);
  $table = "slangwords";

  for ($i=0; $i<$numWords; $i++)
  {

    $query = "SELECT * FROM $table";
    $result = $con->query($query);
    if ($result->num_rows>0)
    {
      while ($row = $result->fetch_assoc())
      {
          $word = $row['words'];
          if ($words[$i] == $word)
          {
            echo($words[$i]);
          }
		  }
		}

  }
  mysqli_close($con);

?>
</div>
</body>
</html>

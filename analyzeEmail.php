<?php           session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <?php include ('nav.php'); ?>
  <body>
     <div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>
    <div class ="container">
      <center>

        <form style="margin-top:20px" action="sendEmail.php" method="post">
          <input type="text" name="fromEmail" placeholder="From">
          <input type="text" name="toEmail" placeholder="To">
          <input type="text" name="emailSubject" placeholder="Subject">
          <button name = "submit" > Send Email </button>
        </form>

    <h4 style= "font-family:'Open Sans'; color:#EDEDED; width:100vh; font-weight:100; line-height:50x; font-size:30px; margin-top:40px">Your Email's Results.</h4>
    </center>

      <div class="panel panel-default" style = "margin-top: 60px">
        <div class="panel-body" >
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

            if (in_array("meeting", $words) || in_array("Meeting", $words))
            {
              $meetingPresent = true;
            }
            if (in_array("at", $words) || in_array("tomorrow", $words) || in_array("tonight", $words) || in_array("today", $words))
            {
              $timeNotPresent = false;
            }
            if (in_array("in", $words))
            {
              $locationNotPresent = false;
            }

            if ($meetingPresent && $timeNotPresent)
            {
              echo ("<p style='color:red; font-size:15px'> You mentioned a meeting, but no meeting time. </p>");
            }
            if ($meetingPresent && $locationNotPresent)
            {
              echo ("<p style='color:red; font-size:15px'> You mentioned a meeting and meeting time, but no location </p>");
            }

            $sendText = "";
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
              if (!$result) {
    die('Invalid query: ' . mysql_error());
}
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
              $sendText = $sendText . " " . $words[$i];
            }


            $_SESSION["message"] = $sendText;
            mysqli_close($con);


      ?>
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

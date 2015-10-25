<!DOCTYPE html>
<html lang="en">
  <?php include ('nav.php'); ?>
  <body>
    <div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>
    <div class = "container" style = "background-color: #59ABE3">
      <center>
      <h4 style= "font-family:'Open Sans'; color:#EDEDED; width:100vh; font-weight:100; line-height:50x; font-size:30px; margin-top:20px">Enter Your Email.</h4>
    </center>
      <div class = "form-group">
    <form method ="post" action ="analyzeEmail.php">
        <textarea class = "form-control text" name = "emailEntry" style = "margin-top:20px;" >
        </textarea>
        <input type="submit" class="btn btn-default submit-button">
    </form>
  </div>
  </div>
  </body>
  </html>

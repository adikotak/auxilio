<?php include('nav.php'); ?>
 <html>
 <body>
<div class="container">
     <div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>
  <h2 style="margin-left:20px"> Speech to Text Analysis </h2>
  <h3 style="margin-left:20px; margin-top:10px"> Please enter a .FLAC file that you would like to analyze </h3>
 <form style="margin-left:20px" action="chooseFile.php" method="post" enctype="multipart/form-data">
  <input type="file" name="myFile">
  <br>
  <input type="submit" value="Upload">
 </form>
 </div>
 </body>
</html>

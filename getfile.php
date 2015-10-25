<?php include('nav.php'); ?>
 <html>
 <body>
   <div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>
<div class="container">
  <center>
  <h4 style= "font-family:'Open Sans'; color:#EDEDED; width:100vh; font-weight:100; line-height:50x; font-size:40px; margin-top:40px">Speech to Text Analysis.</h4>
  <h4 style= "font-family:'Open Sans'; color:#EDEDED; width:100vh; font-weight:100; line-height:50x; font-size:20px">Please enter a .FLAC file that you would like to analyze</h4>
  <h3 style="margin-left:20px; margin-top:10px">  </h3>
 <form style="margin-left:20px" action="chooseFile.php" method="post" enctype="multipart/form-data">
  <input type="file" name="myFile" style = "position: absolute; top: 30%; left: 44%;">
  <br>
  <input type="submit" value="Upload" style = "position: absolute; top: 35%; left: 48%;">
</center>

 </form>
 </div>
 </body>
</html>

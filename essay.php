<!DOCTYPE html>
<html lang="en">

  <body>
   <?php include('nav.php')?>
   <div class = "color" style = "background-color: #59ABE3; height: 100vh;"  </div>

     <div class = "container">
     <center>
     <h4 style= "font-family:'Open Sans'; color:#EDEDED; width:100vh; font-weight:100; line-height:50x; font-size:30px; margin-top:10px">Enter Your Essay.</h4>
   </center>
       <div class="row">
         <div class = "col-md-12">
           <div class = "form-group">
             <form method ="GET" action ="analyzeEssay.php">
               <textarea id = "textarea" class = "form-control text" name = "essayEntry" onkeyup="process()">
               </textarea>



             </script>
             <input type="submit" class="btn btn-default submit-button">
           </form>
         </div>
       </div>

     </div>
   </div>

 </body>
 </html>

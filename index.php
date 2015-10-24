
<!DOCTYPE html>

<html>
<?php include ('nav.php'); ?>
	<body style="min-width:1200px; margin: 0 auto; font-family:Helvetica";>
		<section id="home"></a>
		<div class = "home" style="height:100vh; background-color: #59ABE3; background-size: 100% 100%;">
			<container style = "position:absolute; top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)">
					<center>
					<span style= "font-family:'Open Sans'; font-weight:300; color:#EDEDED; margin-top:80px; font-size:150px; vertical-align: middle;">Auxilio</span>
					<h4 style= "font-family:'Open Sans'; color:#EDEDED; width:420px; font-weight:100; line-height:50x; ">Your context based writing assistant.</h4>
					<a href = "essay.php"> <button class= "btn btn-default btn-lg">
						Essay
          </button> </a>
          <a href = "email.php"> <button class= "btn btn-default btn-lg">
            Email
          </button> </a>
					</center>
				</container>
			</div>
			<section id ="featureEssay"></a>
		<div class= "featureEssay" style="height: 94vh; background-color:#3498DB; margin-top:0px">
			<div class="text" style="padding-top:50px; margin-left:350px; width:800px">
			<p class="header">Writing. Better.</p>
			<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">Get contextual feedback from Auxilio's assistive writing feature to never have another typo.</p>
		</div>
	</div>
	<section id ="featureEmail"></a>
		<div class="featureEmail" style="height:93vh; background-color: #446CB3; margin-top:0px">
			<div class="text2" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:24px;">Writing. Reimagined.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">Learn to improve writing through Auxilio's smart suggestive features.</p>
			</div>
		</div>
		<section id="team"></a>
		<div class="team" style="height:93vh; background-color:#8E44AD; margin-top:0px">
			<div class="teamText" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:24px;">Team.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">We are a team of high school students who created Auxilio at Hacking EDU.</p>
			</div>
		</div>
		<section id ="contactAbout"></a>
		<div class="contactAbout" style="height:93vh; background-color:#9b59b6; margin-top:0px">
			<div class="contactAbout" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:24px;">Contact Us.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">If you're interested in Auxilio feel free to email any of us..</p>
			</div>
		</div>
	</body>
	<script src='jquery.js'></script>
	<script src="jquery.modal.min.js"></script>
	<script src="jquery.easing.1.3.js"></script>
	<script>
      $(function() {
        //catch all clicks
        $("a").click(function() {
          //check for a hash
          if(this.hash){
            //get rid of the # sign
            var hash = this.hash.substr(1);

            //get the position of the <a name>
            var $toElement = $("a[name="+hash+"]");
            var toPosition = $toElement.position().top;

            //scroll/animate to that element
            $("body,html").animate({
              scrollTop : toPosition
            },1500,"easeOutExpo");

            //don't do the jump
            return false;
          }
        });
      });

      function buttonone() {
    		$("#ex1").modal();
		}
	  function buttontwo() {
    		$("#ex2").modal();
		}

    </script>
</html>

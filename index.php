
<!DOCTYPE html>

<html>
<?php include ('nav.php'); ?>
	<body style="max-width:1500vh; margin: 0 auto; font-family:Helvetica";>
		<section id="home"></a>
		<div class = "home" style="height:100vh; background-color: #59ABE3; background-size: 100% 100%;">
			<container style = "position:absolute; top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)">
					<center>
					<span style= "font-family:'Open Sans'; font-weight:300; color:#EDEDED; margin-top:80px; font-size:150px; vertical-align: middle;">Auxilio</span>
					<h4 style= "font-family:'Open Sans'; color:#EDEDED; width:100vh; font-weight:100; line-height:50x; font-size:40px">Your context aware writing assistant.</h4>
          <a href="essay.php" class= "btn btn-default btn-lg" style= "font-family:'Open Sans'; font-size:30px; vertical-align: middle; margin-top: 5vh; margin-right: 5vh";>Essay</a>
          <a href="email.php" class= "btn btn-default btn-lg" style="font-family:'Open Sans'; font-size:30px; vertical-align: middle; margin-top: 5vh; margin-left 5vh";>Email</a>
          </button>
					</center>
				</container>
			</div>
			<section id ="featureEssay"></a>
		<div class= "featureEssay" style="height: 95vh; background-color:#3498DB; margin-top:0px">
			<div class="text" style="padding-top:50px; margin-left:350px; width:800px">
			<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:35px;">Writing. Better.</p>
			<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:22px;">Get contextual feedback from Auxilio's assistive writing feature to never have another typo. Using the Atomattic grammar API, grammar mistakes and spelling errors are a thing of the past thanks to Auxilio.</p>
		</div>
	</div>
	<section id ="featureEmail"></a>
		<div class="featureEmail" style="height:95vh; background-color: #446CB3; margin-top:0px">
			<div class="text2" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:35px;">Writing. Reimagined.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:22px;">Learn to improve writing through Auxilio's smart suggestive features. Auxilio's smart engine automatically makes suggestions for your emails to make them more formal and precise. Auxilio will offer suggestions from adding details for meetings to making changes from colloquial terms.</p>
			</div>
		</div>
		<section id="team"></a>
		<div class="team" style="height:95vh; background-color:#16A085; margin-top:0px">
			<div class="teamText" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:35px;">Team.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:22px;">We are a team of high school students who created Auxilio at Hacking EDU.</p>
			</div>
		</div>
		<section id ="contactAbout"></a>
		<div class="contactAbout" style="height:95vh; background-color:#66CC99; margin-top:0px">
			<div class="contactAbout" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:35px;">Contact Us.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:22px;">If you're interested in Auxilio feel free to email any of us.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:22px;"></p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:10px; text-align:left; margin-left:120px; font-size:22px;">Srinjoy Majumdar: srinjoy.majumdar@gmail.com.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:10px; text-align:left; margin-left:120px; font-size:22px;">Rahul Iyer: rahul.iyer2@gmail.com.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:10px; text-align:left; margin-left:120px; font-size:22px;">Aditya Kotak: adikotak@gmail.com.</p>
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

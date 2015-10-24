
<!DOCTYPE html>

<html>

	<head>
		<meta name="description" content="Auxilio helps you write the world and back.">
		<title>
      	Auxilio
  		</title>
  		<link rel='stylesheet' href='styles.css'/>
  		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  		<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
  		<link rel="stylesheet" href="jquery.modal.css" type="text/css" media="screen">

	</head>
	<body style="min-width:1200px; margin: 0 auto; font-family:Helvetica";>
		<div id="vidback" style="height:550px; background-color: #59ABE3; background-size: 100% 100%;">
					<center>
					<span style="font-family:'Open Sans'; font-weight:300; color:#2c3e50; margin-top:80px; font-size:50px;">Auxilio.</span>
					<h4 style= "font-family:'Open Sans'; color:#EDEDED; width:420px; font-weight:100; font-family:'Noto Sans'; line-height:30px">Write the world, and back.</h4>
					<button class="essayButton" style="padding-top:21px; margin-top:45px; padding-right:25px; margin-right:20px;">
            Essay
          </button>
          <button class="emailButton" style="padding-top:21px; margin-top:45px; padding-right:50px; margin-right:20px;">
            Email
          </button>
					</center>
			</div>
		<div class="about" style="height:550px; background-color:#3498DB; margin-top:0px">
			<div class="text" style="padding-top:50px; margin-left:350px; width:800px">
			<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:24px;">Write. Better.</p>
			<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">Get contextual feedback from Auxilio's assistive writing feature to never have another typo.</p>
		</div>
	</div>
		<div class="features2" style="height:550px; background-color: #446CB3; margin-top:0px">
			<div class="text2" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:24px;">Writing. Reimagined.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">Learn to improve writing through Auxilio's smart suggestive features.</p>
			</div>
		</div>
		<div class="team" style="height:550px; background-color:#8E44AD; margin-top:0px">
			<div class="teamText" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:24px;">Team.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">We are a team of high school students who created Auxilio at Hacking EDU.</p>
			</div>
		</div>
		<div class="contactAbout" style="height:550px; background-color:#9b59b6; margin-top:0px">
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

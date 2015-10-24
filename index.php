
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
		<div id="vidback" style="height:550px; background-color:#3498db; background-size: 100% 100%;">
					<center>
					<span style="font-family:'Open Sans'; font-weight:300; color:#2c3e50; margin-top:80px; font-size:50px;">Auxilio.</span>
					</center>
					<h4 style= "font-family:'Open Sans'; color:#EDEDED; width:420px; font-weight:100; font-family:'Noto Sans'; line-height:30px">Write the world, and back.</h4>
					<button class="essayButton" style="padding-top:21px; margin-top:45px; padding-right:25px; margin-right:20px;">
            Essay
          </button>
          <button class="emailButton" style="padding-top:21px; margin-top:45px; padding-right:50px; margin-right:20px;">
            Email
          </button>
			</div>
		</div>
		<center>
		<div class="about" style="height:70px; background-color:#F0F0F0;">
		</div>
		</center>
		<a name="technology"></a>
		<div class="technology" style="margin-top:40px; width:1100px; margin:0 auto;">
			</br>
			</br>
			</br>
			</br>
			</br>

			</br>
			</br>
			<div class="three" style="margin-top:20px; margin-left:-20px">
			</div>
			</br>
			</br>
			</br>
			<div id="ex2" style="display:none; width:800px; text-align:left; position:relative;">
        </div>
        <a name="features"></a>
		<div class="features" style="height:700px; background-color:#525252; margin-top:130px">
			<br>
			<br>
			<div style="width:800px; margin:0 auto">
				<center>
					<span style="font-family:'Open Sans'; font-weight:400; color:#fff;font-size:30px;">Write. Better.</span>
				<span style="line-height:30px; color:#fff; font-family:'Open Sans' font-weight:400;">Get contextual feedback from Auxilio's assistive writing feature to never have another typo.</span>
				</center>
			</div>
		</div>
		<div class="features2" style="height:464px; background-color:#5E9DC4; margin-top:0px">
			<div class="text2" style="padding-top:50px; margin-left:350px; width:800px">
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; margin-top:60px; margin-left:120px; font-size:24px;">Writing. Reimagined.</p>
				<p style="font-family:'Open Sans'; font-weight:300; color:#fff; padding-top:30px; text-align:left; margin-left:120px; font-size:16px;">Learn to improve writing through Auxilio's smart suggestive features.</p>
			</div>
		</div>
		<a name="team"></a>
		<div class="team" style="height:500px; margin-top:30px; font-family:'Open Sans'; font-weight:400;">
			<div style="margin-top:0px; height:500px; width:800px; margin:0 auto;">
		      <span style="font-size:29px;">Team</span>
		      	<div class="teamimages" style="text-align:left;">
			        <div style="margin-left:80px"><img style="float:left; margin-right:50px; width:100px; height:90px" src="me.jpg"/><h2>Tanay Tandon, Founder and CEO</h2></h4>Tanay founded Clipped in the summer of 2012 as a high school sophomore. He developed the Natural Language technology, and researched the grammatical analysis patterns for information retrieval. As a debater, Tanay found the process of reading evidence files unnecessarily long. Thus, he began work on a data-mining project to extract the most relevant information. He works day-to-day on the algorithm and further improvements on the technology.</h4>
			        </div>
			        <div style="margin-left:80px"><img style="float:left; margin-right:50px; width:100px; height:90px" src="sudhir.jpg"/><h2>Sudhir Setia, Advisor</h2></h4>Sudhir is a management consultant at Google and has an MBA from London Business School.</h4>
			        </div>
				</div>
	    	</div>
		</div>
		<a name="contact"></a>
		<div class="contact" style="font-family:'Open Sans'; font-weight:400; color:#5C5C5C">
			<div class="" style="margin-top:0px; height:190px; width:800px; margin:0 auto;">
		      <p style="font-size:60px; font-size:24px;">Contact Us.</p>
		      <span style="width:620px; font-size:16px;">
		        If you would like to get in touch with us regarding jobs, our technology, or perhaps just to learn more about Clipped drop us a mail!</br></br><a href="mailto:tanay@clipped.me">&#9993; tanay@clipped.me</a></br><a>&#9743; 408-603-1954</a></span>
		    </div>
		</div>
		<a name="press"></a>
		<div class="press" style="font-family:'Open Sans'; font-weight:400; color:#5C5C5C">
			<div class="" style="margin-top:0px; height:500px; width:800px; margin:0 auto;">
		      <p style="font-size:60px; font-size:24px;">Press.</p>
		      <span style="width:620px; font-size:16px;">
		        If you're interested in covering Clipped please don't hesitate to drop a line or call. We've also put together some promo assets for your convenience below.</br></br><a href="mailto:tanay@clipped.me">&#9993; tanay@clipped.me</a></br><a>&#9743; 408-603-1954</a></span>
		    </br>
		        <button class="button-primary" onclick="location.href='https://www.dropbox.com/sh/tit2u4jes0izz01/AACME8tv8G6kbfxQ43ILQHLqa'" style="margin-top:25px; padding-right:12px; margin-right:20px;">Press Assets</button>
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

<!DOCTYPE html>
<html>
	<head>
	<title>KONVOLVE'14</title>
	<link rel="Stylesheet" type="text/css" href="../style/projects.css"></link>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/hexagonal9.js"></script>
	<!--<?php //include ("../include/header.inc");
	 ?>-->
	 
	<link rel="stylesheet" type="text/css" href="../css/landing.css">
	<!-- Clock -->
	<link rel="stylesheet" href="../css/jbclock.css" type="text/css" media="all">
        <script type="text/javascript" src="../js/jquery-1.8.0.min(1).js"></script>
        <script type="text/javascript" src="../js/jbclock.js"></script>
                <script type="text/javascript">
            $(document).ready(function(){
                JBCountDown({
                    secondsColor : "#FFF",
                    secondsGlow  : "none",
                    
                    minutesColor : "#FFF",
                    minutesGlow  : "none",
                    
                    hoursColor   : "#FFF",
                    hoursGlow    : "none",
                    
                    daysColor    : "#FFF",
                    daysGlow     : "none",
                    
                    startDate   : "1388534400",
                    endDate     : "1400846400",
                    now         : "1398196651"
                });
            });
        </script>
	<!-- clock js end-->
	<style>
	*{
		margin:0px;
		padding:0px;
	}	
	.cover
	{
		z-index:100;
		position:absolute;
		height:60%;
		margin:0px auto;		
		width:100%;
		color:#333;
		padding-top:20%;
		
	}
	#rules{
	z-index:100;
	background:#ccc;
	position:absolute;
	height:60%;
	margin: 0 auto;
	width:100%;
	color:#333;
	padding-top:20%;
	}
	#clock_counter
	{
		position:absolute;
		margin-left:150px;
	}
	
	#box1
	{
		margin-left:1400px;
		margin-top:100px;
		
		text:bold;
		background:#000;
	}
	
	#box2
	{
		margin-left:510px;
		margin-top:-1000px;
		
	}
	#box3
	{
	    margin-left:420px;
		*margin-top:-54px;
	}
	#box4
	{
		margin-left:-620px;
		margin-top:100px;
	}
	#box5
	{
		margin-left:1460px;
		margin-top:200px;
	}
	#box6
	{
		margin-left:-570px;
		margin-top:200px;
	}
	#box7
	{
		margin-left:405px;
		*margin-top:-54px;
	}
	.hexagon 
	{
		width: 100px;
		height: 55px;
		position: absolute;
		-webkit-transition:All 0.3s ease-in;-webkit-transform:skew(0deg) rotate(0deg);
		}
			
.hexagon, .hexagon:before, .hexagon:after {
    background: #ccc;
    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.8);   
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.8);   
    box-shadow: 0 0 10px rgba(0,0,0,0.8);   
}
.hexagon:hover{
	cursor:pointer;background:#ccc;
	-webkit-transform: rotate(0deg) scale(1.2);
	}
.hexagon:before, .hexagon:after {
    content: "";
    position: absolute;
    left: 22px;
    width: 57px;
    height: 57px;
    -moz-transform: rotate(145deg) skew(22.5deg);
    -webkit-transform: rotate(145deg) skew(22.5deg);
    transform: rotate(145deg) skew(22.5deg);
}
.hexagon:before {
    top: -29px;
}
.hexagon:after {
    top: 27px;
}
.hexagon span {
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 55px;
    background:#ccc;
    z-index: 1;
}
.upper{width:190px;padding:9px;background:rgba(0,0,0,0.7);color:#ccc;box-shadow:0 0 7px 2px #ccc;font:10px;
}
a .upper{color:#ccc;}
.upper:hover{opacity: 0.8;}
	#reg{margin-left:120%;position:absolute;margin-top:10%;border-radius:10px 50px 0px 10px}	
	#sub{margin-left:-108%;position:absolute;margin-top:10%;border-radius:50px 10px 10px 0px}
	body{background-image:url('../images/bk11.jpg');background-size:100% 100%;background-attachment:fixed;*overflow:hidden}
	#comb{background:rgba(0,0,0,0.6);min-height:800px;margin:0px auto;width:1200px;}
	#wrapper{height:300px;width:1200px;}
	#header{width:1200px;}
	#clock{position:relative;margin-left:-50px;}
	
	</style>
	</head>
	<body>
	
	

	<div id="comb">
	<?php include("../include/header.inc"); ?>
	<div id="web-logo"></div>
	<div id="wrapper">	
		<a href="../php/login.php" style="color:#ccc;"><div id="sub" class="upper">Login</div></a>
		<a href="../php/register.php" style="color:#ccc;"><div id="reg" class="upper" >REGISTER</div></a>

			<div class="hexagon" id="box1" ><a href="../php/two.php"><div id="about_us" class="cover" >About US</div><span><img src="../images/about.png" height="100%" width="100%"></span></a></div>
			<div class="hexagon" id="box2" ><a href="../php/three.php"><div id="rules" class="cover">Rules</div><span><img src="../images/rules.png" height="100%" width="100%"></a></span></a></div>
			<!--<div class="hexagon" id="box3"><span><img src="./images/gallery.png" height="100%" width="100%"></span></div> -->
			<div class="hexagon" id="box4" ><a href="../php/four.php"><div id="sponsors" class='cover'>Sponsors</div><span><img src="../images/sponsors.png" height="100%" width="100%"></a></span></div>
			<div class="hexagon" id="box5" ><a href="../php/contact.php"><div id="contact_us" class='cover'>Contact Us</div><span><img src="../images/contact.png" height="100%" width="100%"></a></div>
			<div class="hexagon" id="box6" ><a href="../php/themes.php"><div id="gallery" class='cover'>Themes</div><span><img src="../images/gallery.png" height=100% width=100%></span></a></div>
			<!--<div class="hexagon" id="box7"><span></span></div>-->
		</div>
		<!--clock coding -->
		<div id="clock">
		<div class="wrapper1">
		<div class="clock">
                <!-- Days -->
                <div class="clock_days">
                    <div class="bgLayer">
                        <canvas id="canvas_days" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                        <p class="val">8</p>
                        <p class="type_days">Days</p>
                    </div>
                </div>
                <!-- Days -->
                <!-- Hours -->
                <div class="clock_hours">
                    <div class="bgLayer">
                        <canvas id="canvas_hours" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>

                        <p class="val">4</p>
                        <p class="type_hours">Hours</p>
                    </div>
                </div>
                <!-- Hours -->
                <!-- Minutes -->
                <div class="clock_minutes">
                    <div class="bgLayer">
                        <canvas id="canvas_minutes" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                        <div class="text">
                            <p class="val">0</p>
                            <p class="type_minutes">Minutes</p>
                        </div>
                    </div>
                </div>
                <!-- Minutes -->
                <!-- Seconds -->
                <div class="clock_seconds">
                    <div class="bgLayer">
                        <canvas id="canvas_seconds" width="122" height="122">
                            Your browser does not support the HTML5 canvas tag.
                        </canvas>
                        <p class="val">58</p>
                        <p class="type_seconds">Seconds</p>
                    </div>
                </div>
                <!-- Seconds -->
            </div>
			</div>
		<!--clock coding -->
		</div>
		</div>
		
	
	</body>
	<script>
		$(document).ready(function(){
		$('.cover').hide();
		
		});
		setInterval(function(){
		$('#about_us').css("background","#ccc");
		$('#about_us').slideToggle("slow");
		$('#gallery').delay(300).css("background","#ccc");
		$('#gallery').delay(300).toggle("slow");
		$('#sponsors').delay(600).css("background","#ccc");
		$('#sponsors').delay(600).fadeToggle("slow");
		$('#contact_us').delay(900).css("background","#ccc");
		$('#contact_us').delay(900).show("slow");
		$('#contact_us').delay(1100).hide("slow");
		$('#rules').delay(1200).css("background","#ccc");
		$('#rules').delay(1400).fadeIn("slow");
		$('#rules').delay(1500).fadeOut("slow");
		},2000)
		// function onhover()
		// {
			// $('.hexagon').css("background","#ccc");
			// $('.hexagon').slideDown("slow");
		// }
		// function outhover(id2)
		// {
			// $(id2).fadeOut('slow');
		// }
		// $(document).ready(function(){
		// $('#about_us').hide();
		// $('#box1').mouseenter(function()
		// {
		// $('#about_us').css("background","#ccc");
		// $('#about_us').slideDown("fast");
		// });
		// $('#box1').mouseleave(function()
		// {
		// $('#about_us').fadeOut("slow");
		// });
		// // });
		// // $(document).ready(function(){
		// $('#rules').hide();
		// $('#rules').mouseenter(function(){
		// $('#rules').css("background","#ccc");
		// $('#rules').slideDown("slow");
		// });
		// $('#box2').mouseleave(function(){
		// $('#rules').fadeOut("slow");
		// });
		// });
		
	</script>
</html>
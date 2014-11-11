
<html>
	<head>
		<title>Konvolve'14 | Regstration</title>
		<script type="text/javascript" src="./js/jquery.js"></script>
		<style>
			.tip
			{
				display:none;
			}
			.Team_name:focus{box-shadow: 0px 0px 2px #000 inset; border:1px solid #000; padding-left: 5px; display:table}
		</style>
	</head>
	<body>
		<div id='wrapper'>
		<!-- including header and navigation-->
			<?php include('./include/header.inc'); ?>
			<?php include('./include/nav_bar.inc');?>
			<div id="container">
				<div >
				<form name="Register_form">
					<table class="Table_form" border=0 align="center">
						<tr>
							<td><input type="text" class="Team_name" name="Team_Register" placeholder="Enter your Team Name" maxlength=20></input></td>
							<td><span class="tip">This name would not be change throughout this academic</span></td>
						</tr>
					<table>
					
				</form>
				</div >
				
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(".Team_name").focus(function(){
			$(this).parent().siblings().children().fadeIn(500);
			
		});
		$(".Team_name").blur(function(){
			$(this).parent().siblings().children().fadeIn(500);
		});
	</script>
</html>
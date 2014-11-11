<html>
<head>
	<title>KONVOLVE'14 Abstract Submission</title>

	<!-- styling files -->
	<link rel="Stylesheet" type="text/css" href="../css/login.css">
	<link rel="Stylesheet" type="text/css" href="../css/landing.css"></link>
	<link rel="Stylesheet" type="css/text" href="../css/link.css"></link>
	<!--  -->

	<!-- js files  -->
	<script type="text/javascript" src="../js/login.js"></script>
	<!--  -->
</head>
<body>
	<div id='wrapper'>
		<?php include("../include/header.inc");?>
		<?php include("../include/nav_bar.inc"); ?>
		
		<div id="web-logo"></div>
		
		<div id='container' class='contains'>
			<div id='login_container'>
				<div id="login_form_holder">
					<form action="./lgin_verify.php" name="login_form" method='post'>
						<span style="font-size:25px;color:#333;margin-left:30px;">Login</span>
						<table border=0>
							<tr>
								<td>
									<input type='text' class="login_inputs" name='usr_name' placeholder="Enter User Id" maxlength=6>
								</td>
							</tr>
							<tr>
								<td>
									<input type='password' class='login_inputs' name="star007" placeholder="Enter Password" maxlenght=15>									
								</td>
							</tr>
						</table>
						<div id='login_submit_wrapper' class='btn_wrapper'>
							<input type='submit' name="login_submit" class='btn' value="LOGIN">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include("../include/footer.inc");?>

	</div>
</body>
</html>
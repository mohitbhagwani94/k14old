<html>
<head>
	<title>KONVOLVE'14-Admin Login</title>

	<!-- js files to be include -->
	<script type="text/javascript" src="../js/size.js"></script>
	<script type="text/javascript" src="../js/login.js"></script>
	<!--  -->

	<!-- css files to be include -->
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<!--  -->
</head>
<body>
	<div id='wrapper'>
		<?php include("../include/header.inc"); ?> 
		<div id='container' class='contains'>
			<div id='login_container'>
				<div id="login_form_holder">
					<form action="./lgin_verify.php" name="admin_login_form" method='post'>
						<table border=0>
							<tr>
								<td>
									<input type='text' class="admin_login_inputs" name='usr_name' placeholder="Enter User Id" maxlength=6>
								</td>
							</tr>
							<tr>
								<td>
									<input type='password' class='admin_login_inputs' name="star007" placeholder="Enter Password" maxlenght=15>									
								</td>
							</tr>
						</table>
						<div id='admin_login_submit_wrapper' class='btn_wrapper'>
							<input type='submit' name="admin_login_submit" class='btn' value="LOGIN">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include("../include/footer.inc"); ?>
	</div>
</body>
</html>
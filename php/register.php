<html>
	<head>
		<title>Konvolve'14 | Registration</title>
		<link rel="shortcut icon" href="../imgs/favicon.png"></link>
		<link rel="Stylesheet" type="css/text" href="../css/link.css"></link>
		<link rel="Stylesheet" type="text/css" href="../css/landing.css"></link>
		<!-- styling files -->
		<link rel="stylesheet" type="text/css" href="../css/register.css">
		<!--  -->

		<!-- javascript files to be include -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/register.js"></script>
		<!--  -->
		<!-- inline js code -->
		<script type="text/javascript">
		$(document).ready(function(){
			loadCategories();
		});
		function valid()
		{
			var c=0;
			if(document.getElementById('f1').value=="")
			{
				alert("Enter your first name");
				c=1;
				return false;
			}
			if(document.getElementById('f2').value=="")
			{
				alert("Enter Number Team Members");
				c=1;
				return false;
			}
			if(document.getElementById('f2').value > 10)
			{
				alert("Enter Number Team Members exceeds \"10\"");
				c=1;
				return false;
			}
			if(document.getElementById('f4').value=="")
			{
				alert("Enter Problem Statement");
				c=1;
				return false;
			}
			if(document.getElementById('f5').value=="")
			{
				alert("Enter Project Outcome");
				c=1;
				return false;
			}
			if(document.getElementById('f6').value=="")
			{
				alert("Enter your Name");
				c=1;
				return false;
			}
			if(document.getElementById('f7').value=="")
			{
				alert("Enter your Contact Number");
				c=1;
				return false;
			}
			if(document.getElementById('f8').value=="")
			{
				alert("Enter your Email Address");
				c=1;
				return false;
			}
			if(document.getElementById('f9').value=="")
			{
				alert("Enter Password");
				c=1;
				return false;
			}
			if(document.getElementById('f9').value!=document.getElementById('f10').value)
			{
				alert("Password Didnot Match");
				c=1;
				return false;
			}
				
			if(c==1)
			{
				return false;
			}
			else
			{
				return true;
			}
			
		}
		</script>
	
	</head>
	<body>
		<div id='wrapper'>
			<!-- top files to be included -->
			<?php include("../include/header.inc"); ?>
			<?php include("../include/nav_bar.inc"); ?>
			<!--  -->
			<div id="web-logo"></div>			
			<div id='container' class='contains'>
				<div id='form_container' class='contains'>
					<div class='form_holder'>
						<form action="register_students.php" method='post' name='register_form' onsubmit="return valid();">
							<span style="font-size:25px;color:#333;">Register your team</span>
							<table class='form_table' border=0 align="center">
								<tr>
									<td><input name='team_name' class='register_input' maxlength=20 placeholder="Name of Team" id="f1"></td>
									<td><span class='tip'>Name once chosen can't be changed. You will be referred to by this name throughout the event</span></td>
								</tr>
								<tr>
									<td><input type="number" name="member_no" class='register_input' maxlength=2 placeholder="Number of members" id="f2"></td>
									<td><span class='tip'>Maximum:10</span></td>
								</tr>
								<tr>
									<td>
										<select id='category_drop'name='category' class='register_input drop_down' onChange="loadSubCategory()">

										</select>
									</td>
								</tr>
								<tr>
									<td>
										<select id='subcategory_drop' name='sub_category' class='register_input drop_down'>
											<option value=''>Select Sub Category...</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<span class='msg'>Problem Statement</span><br>		
										<textarea name="problem_statement" class='register_input large_input'  id="f4"></textarea>
									</td>
									<td><span class='tip'>Write the problem statement you are going to work on</span></td>
								</tr>
								<tr>									
									<td>
										<span class='msg'>Project Outcome</span><br>
										<textarea name="outcome" class='register_input large_input' maxlenght=255  id="f5"></textarea>
									</td>
									<td><span class='tip'>Write the result of your project and also what will you achieve through this project</span></td>
								</tr>
								<tr>
									<td><span class='message'>Contact Details:</span><td>
								</tr>
								<tr>
									<td><input type='text' name='contact_name' class='register_input' maxlength=40 placeholder="Contact Name" id="f6"></td>
									<td><span class='tip'>This person will be the point of communication</span></td>
								</tr>
								<tr>
									<td><input type='text' name='contact_number' class='register_input' maxlength=10 placeholder="Contact Number" id="f7"></td>
								</tr>
								<tr>
									<td><input type='email' name='contact_email' class='register_input' maxlength=50 placeholder="Contact E-Mail Address" id="f8"></td>
									<td><span class='tip'>This will be the official email of the team</span></td>
								</tr>
								<tr>
									<td><input type='password' name='star007' class='register_input star' maxlength=15 placeholder='Password' id="f9"></td>
									<td>
										<span class='tip'>This will be used for uploading the required files and getting other updates</span><br>
										<span class='tip'>Password should be of minumum 8 characters and maximum of 15 characters</span>
									</td>
								</tr>
								<tr>
									<td><input type='password' name='star007' class='register_input star' maxlength=15 placeholder='Confirm Password' id="f10"></td>
									<td>
										<span class='tip'> The Password should match with above Written Password</span><br>
									</td>
								</tr>
							</table>
							<div id='register_submit_wrapper' class='btn_wrapper'><input name='register_submit' class='btn' type='submit'  value='REGISTER'></div>
						</form>
					</div>
				</div>
			</div>
			<!-- footer -->
			<?php include ("../include/footer.inc"); ?>
			<!--  -->
		</div>
	</body>
	<script type="text/javascript">
		$(".register_input").focus(function(){
			$(this).parent().siblings().children().fadeIn(500);
		});
		$(".register_input").blur(function(){
			$(this).parent().siblings().children().fadeOut(500);
		});
	</script>
</html>
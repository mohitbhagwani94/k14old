<?php
	require("../include/misc.php");
?>

<?php
	
	if(isset($_POST['register_submit']))
	{
		$team_name=$_POST['team_name'];
		$member_no=$_POST['member_no'];
		$problem_statement=$_POST['problem_statement'];
		$outcome=$_POST['outcome'];
		$contact_name=$_POST['contact_name'];
		$contact_number=$_POST['contact_number'];
		$contact_email=$_POST['contact_email'];
		$star007=$_POST['star007'];
		$category=numbertoCategory(intval($_POST['category']));
		$sub_cat=$_POST['sub_category'];
		

		//validating the data 
		if(strlen($team_name)<=20 && ($member_no>=1 || $member_no<=20) && strlen($problem_statement)<=255 && strlen($outcome)<=255 && strlen($contact_name)<=40 && strlen($contact_number)<=10 && strlen($contact_email)<=50 && $category!="" && $sub_cat!="")
			{
				if(strlen($star007)>=8 && strlen($star007)<=15 && (filter_var($contact_email,FILTER_VALIDATE_EMAIL) ==TRUE ))
				{
					$star007=md5($star007);
					database::connect();
					$id=random::generate6digit("teams","id");
					mysql_query("insert into teams values('',$id,'$team_name',$member_no,'$problem_statement','$outcome','$contact_name','$contact_number','$contact_email','$star007','$category','$sub_cat')") or die(mysql_error());
					database::disconnect();
				}
			}
	}
	else
		die("Invalid Data Sent or Illegal Entry into Script"); //if data sent is invalid page is made to die
?>


<?php
	function numbertoCategory($index)
	{
		$xml=simplexml_load_file("../xml/themes.xml");
		$theme=$xml->category[$index]->name;
		return $theme;
	}

?>

<html>
<head>
	<title>KONVOLVE'14 Registration</title>
	<link rel="Stylesheet" type="text/css" href="../css/link.css"></link>
	<link rel="Stylesheet" type="text/css" href="../css/landing.css"></link>
	<style type="text/css">
		*{padding: 0px; margin:0px;}body{margin: 0px;}
#wrapper{ width:1200px;margin:0px auto;center;background:rgba(0,0,0,0.2);color:#fff;min-height: 700px;overflow:hidden}

		#container{*position: absolute; margin:0px auto;  top:125px; overflow-y:auto; }

		/*styling for the message given on the page*/
		#msg{position: relative; margin:0px auto; top:25px; text-align: center; font-size: 20px; color:#fff; overflow:hidden }
		.id{font-weight: 900;}
	</style>

	<script type="text/javascript">
		window.onload=function(){
				// document.getElementById("container").style.height=window.innerHeight-(100+20+70);
			}
	</script>
</head>
<body>
	<div id='wrapper'>
		<?php include("../include/header.inc"); ?>
		<?php include("../include/nav_bar.inc"); ?>
		<div id="web-logo"></div>
		<div id='container' class='contains'>
			<?php 
			if(isset($id)){
			?>
			<div id='msg'>
				Your Unique Id for login is <span class='id'><?php echo $id; ?></span><br>
				Use this unique id to login to get updates and upload the abstract
			</div>
			<?php }
			else
			{
			?>
			<div id='msg'>
				There was some error with your submission of the form. <br>Please click on the below link to register
				again.
				<br><br><a href="register.php">Click here to register again</a>
			</div>
			<?php }
			
			 ?>
		</div>
		<?php include("../include/footer.inc"); ?>
	</div>
</body>
</html>
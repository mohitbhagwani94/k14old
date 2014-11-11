
<?php
	require("../include/misc.php");
?>
<?php
	if(isset($_POST['usr_name']) && isset($_POST['star007']))
	{
		$usr_name=htmlentities($_POST['usr_name']);
		$star007=htmlentities(md5($_POST['star007']));
		database::connect();
		$team_login_result=mysql_query("select * from teams where id=$usr_name and p_w_d='$star007'")or die(mysql_error());
		database::disconnect();
		if(mysql_num_rows($team_login_result)>0)
		{
			$team_login_result=mysql_fetch_assoc($team_login_result);

			session_start();
			database::connect();
			$_SESSION['session_id']=random::generate6digit("sessions","session_id");
			$_SESSION['usr_name']=$team_login_result['id'];
+			$_SESSION['category']=$team_login_result['category'];
			$_SESSION['sub_cat']=$team_login_result['sub_category'];
			$date_start=date("Y/m/d");
			$session_id=$_SESSION['session_id'];
			$time_start=date("h:i:s");

			mysql_query("insert into sessions values($session_id,$usr_name,'$date_start','$time_start')") or die(mysql_error());
			database::disconnect();
			header("Location: ./file_upload.php");
		}
		else
		{
			header("Location: ./login.php?msg=invalid_login");
		}
	}
	



?>
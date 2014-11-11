<?php
	require("../include/misc.php");
?>

<?php	
	if(isset($_POST['admin_login_submit']))
	{
		$usr=htmlentities($_POST['usr_name']);
		$pwd=md5(htmlentities($_POST['star007']));

		database::connect();
		$login_result=mysql_query("select * from login where usr='$usr' and pwd='$pwd'");
		database::disconnect();
		if(mysql_num_rows($login_result)>0)
		{
			session_start();
			$_SESSION['user']=$_POST['usr_name'];
			header("Location: ./config.php");
		}
		else
			header("Location: ./login.php");			
	}
?>

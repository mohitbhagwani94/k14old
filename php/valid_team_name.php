<?php	
	if(isset($_GET['val']))
	{
		include("../include/misc.php");
		database::connect();
		$val=trim($_GET['val']," ");
		$team_result=mysql_query("select name from team");
		database::disconnect();

		while($row=mysql_fetch_assoc($team_result))
		{
			$val1=trim($row['name']," ");
			if(strcasecmp($val, $val1))
				echo "false";
			else
				echo "true";
		}
	}
?>
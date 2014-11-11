<?php
$con=mysqli_connect("localhost","root","","konvolve14");
if(mysqli_connect_errno())
	{
		echo"fail to connect tomysql" . mysqli_connect_error();
	}

$result=mysqli_query($con,"SELECT * FROM teams");
echo "<table border='1'>
<tr>
<th>ID</th>
<th>TEAM NAMES</th>
<th>TEAM NUMBER</th>
<th>PROBLEM</th>
<th>OUTCOME</th>
<th>CONTACT NAME</th>
<th>CONTACT NUMBER</th>
<th>CONCTACT EMAIL</th>
<th>p_s_d</th>
<th>CATEGORY</th>
<th>SUB CATEGORY</th>
</tr>";
while($rows=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $rows['id'] . "</td>";
	echo "<td>" . $rows['name'] . "</td>";
	echo "<td>" .$rows['member'] . "</td>";
	echo "<td>" .$rows['p_statement'] . "</td>";
	echo "<td>" .$rows['outcome'] . "</td>";
	echo "<td>" .$rows['c_name'] ."</td>";
	echo "<td>" .$rows['c_number'] ."</td>";
	echo "<td>" .$rows['c_email'] ."</td>";
	echo "<td>" .$rows['p_w_d'] ."</td>";
	echo "<td>" .$rows['category'] ."</td>";
	echo "<td>" .$rows['sub_category'] ."</td>";
	echo "</tr>";
}
mysqli_close($con);
?>
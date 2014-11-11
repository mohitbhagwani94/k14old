<?php session_start();?>
<?php
	if(isset($_FILES['abstract_file']))
	{
		$dir=$_SESSION['category'];
		$sub_dir=$_SESSION['sub_cat'];
		$name=$_SESSION['usr_name'];
		$tmp_file=$_FILES['abstract_file'];
		$loc="./back/abstract_uploads/".$dir."/".$sub_dir."/".$name;
		if($tmp_file['type']=="application/vnd.openxmlformats-officedocument.wordprocessingml.document")
			move_uploaded_file($tmp_file['tmp_name'], $loc.".docx");
		else if($tmp_file['type']=="application/msword")
			move_uploaded_file($tmp_file['tmp_name'], $loc.".doc");		
	}

?>
<?php
	if(!(isset($_SESSION['usr_name'])))
		die("Illegal Entry");
?>


<html>
<head>
	<title>Konvole'14 Abstract Upload</title>

	<!-- styling files -->
	<link rel="stylesheet" type="text/css" href="../css/file_upload.css"></link>
	<link rel="Stylesheet" type="text/css" href="../css/landing.css"></link>
	<link rel="Stylesheet" type="text/css" href="../css/link.css"></link>
	<!--  -->

	<!-- js files -->

	<!--  -->
</head>
<body>
	<div id='wrapper'>
		<?php include("../include/header.inc"); ?>
		<?php include("../include/nav_bar.inc"); ?>
		
		<div id="web-logo"></div>
		
		<div id='container' class='contains'>
			<div id='file_upload_container'>
				<div id='file_upload_holder'>
					<form name='abstract_upload' action="./file_upload.php" enctype="multipart/form-data" method='POST'>
						<span style="font-size:20px;color:#333;margin-left:80px;">Upload your Abstract</span>
						<div id='abstract_file_wrapper' class='wrapper'>
							<input type='file' name="abstract_file" class='file_upload_input' accept="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
						</div>
						<div id='submit_wrapper' class='wrapper'>
							<input type='submit' name='abstract_upload_submit' value="UPLOAD" class='btn'>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include("../include/footer.inc"); ?>

	</div>
</body>
</html>
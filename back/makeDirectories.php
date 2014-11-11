<?php
	$xml=simplexml_load_file("../xml/themes.xml");
	foreach ($xml->category as $cat) {
		mkdir("./abstract_uploads/".$cat->name);
		foreach ($cat->subcategory as $sub_cat) {
			echo "dir".$sub_cat;
			mkdir("./abstract_uploads/".$cat->name."/".$sub_cat);
		}
	}
?>
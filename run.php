<?php
     //If POST var url is not set or empty, die.
     if(!isset($_POST['url']) || $_POST['url']=="") {
		die("You did not specify any URL.</br><a href=\"index.html\">Back</a>");
     }
     $url = $_POST['url'];
     //If var url exceeds 1000 characters, die. (Prevention against max body transgressing)
     if (strlen($url) > 1000) {
		die("You've specified a host that exceeds the allowed length of 1000 characters.</br><a href=\"index.html\">Back</a>");
     }
     if (substr($url, 0, 7) === 'http://' || substr($url, 0, 8) === 'https://') {
		echo "URL: ";
		echo "<br>";
		echo $url;
		echo "<br><br>";
		$query_str = parse_url($url, PHP_URL_QUERY);
		parse_str($query_str, $query_params);
		echo "<pre>";
		print_r($query_params);
		echo "</pre>";
		echo ("<br><a href=\"index.html\">Back</a>");
	}else {
		echo "URL: ";
		echo "<br>";
		echo $url;
		echo "<br><br>";
		echo "No valid URL.";
		echo ("<br><a href=\"index.html\">Back</a>");
     }
?>

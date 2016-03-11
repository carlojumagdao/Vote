<?php
require 'function.php';
session_start();

if(fnIsLoggedIn()){
	header("location: login.php");
} else {
	require 'banner.php';
	require 'navigation.php';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vote+ Index</title>
</head>
<body>
<script src="../assets/js/materialize.min.js"></script>
</body>
</html>
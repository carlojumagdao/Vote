<?php

try {
	$conn = new PDO('mysql:host=localhost;dbname=dbVote+','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "ERROR:". $e.getMessage();
	echo "<script>alert('connection error')</script>";
}

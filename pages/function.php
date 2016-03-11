<?php
function fnIsLoggedIn(){
	return (!isset($_SESSION['fname']));
}

?>
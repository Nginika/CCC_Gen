<?php
	//unsets session variales and ends session
	session_start();
	unset($_SESSION["username"]);
	unset($_SESSION["firstname"]);
	unset($_SESSION["surname"]);
	header("Location:../index.php");
?>

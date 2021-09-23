<?php
	include "conect.php";
	session_start();
	unset ($_SESSION["a_id"]);
	unset ($_SESSION["u_id"]);
	session_destroy();
	echo "<script>window.open('index.html','_self')</script>";
?>
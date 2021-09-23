<?php
	$db=new mysqli("localhost","root","","airline");
	if(!$db)
	{
		echo"Database is  Not Connected";
	}

?>
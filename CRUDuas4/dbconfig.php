<?php

	global $con;

	$con = mysqli_connect('sql205.epizy.com','epiz_32027470','X1nZ7FqhzTw','epiz_32027470_cruduas4');

	if(!$con)
	{
		echo 'unable to connect with db';
		die();
	}
<?php

function poOpenDatabase()
{
	$hostname = "localhost";
	$username = "milesfor_salsero";
	$password = "4online";
	$poDb = mysql_connect($hostname, $username, $password);
	
	if (!$poDb)
	{
		die("Unable to connect to database.");
	}
	else
	{
		mysql_select_db("milesfor_james", $poDb);
	}
	
	return $poDb;
}

function vCloseDatabase($poDb)
{
	mysql_close($poDb);
}


?>
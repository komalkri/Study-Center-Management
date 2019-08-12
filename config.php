<?php
		$dbhost='localhost';
		$dbuser='root';
		//$dbuser='admin_0516';
		$dbpass='';
		//$dbpass='abc@123*';
		$dbname='db0516';
		$conn=mysql_connect($dbhost,$dbuser,$dbpass)or die(mysql_error());
		mysql_select_db($dbname)or die(mysql_error());
?>		
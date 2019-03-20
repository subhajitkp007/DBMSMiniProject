<?php
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="company";
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_errno())
echo "failed to connect".mysqli_connect_error();
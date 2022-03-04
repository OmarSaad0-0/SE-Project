<?php

$serverName="localhost";
$hostName="root";
$pass="";
$dbName="namera";

$conn=mysqli_connect($serverName,$hostName,$pass,$dbName);

if(!$conn)
{
echo "Connection failed";
}
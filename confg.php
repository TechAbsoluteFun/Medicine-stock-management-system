<?php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","123")
or die("cannot connected");
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("route",$conn);
*/
/**
* mysql_connect is deprecated
* using mysql_connect instead
*/
$databaseHost = 'localhost';
$databaseName = 'medicine';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
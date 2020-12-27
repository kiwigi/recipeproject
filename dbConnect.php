<?php 
$dbServerName = "https://api.cook.thotmail.ca/"; 
$dbUsername = "root";
$dbPassword = "";
$dbName = "cooking";
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
//$connectionInfo = array( "Database"=>"dbName"); 
//$conn = sqlsrv_connect( $serverName, $connectionInfo); 
//if( $conn ) { 
// echo "Connection established.<br />"; 
//}else{ 
 //echo "Connection could not be established.<br />"; 
 //die( print_r( sqlsrv_errors(), true)); 
 
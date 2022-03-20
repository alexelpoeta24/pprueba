<?php

//$conex = mysqli_connect("45.35.64.173, 1433","sa","GoldSystem69d","imaxi"); 
$serverName = "45.35.64.173, 1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"imaxi", "UID"=>"sa", "PWD"=>"GoldSystem69d");
$conex = sqlsrv_connect( $serverName, $connectionInfo);
?>
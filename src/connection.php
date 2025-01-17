<?php
    $dbHost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbName="happet";
    
    if(!$con=mysqli_connect($dbHost,$dbuser,$dbpass,$dbName)){
        die("failed to connect");
    }
?>
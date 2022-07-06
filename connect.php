<?php     
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "test";

    $con = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
    
    if(!$con) {
        die(mysqli_error($con));
    }

?>
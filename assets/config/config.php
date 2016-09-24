<?php
/**********************************************************************
 *Contains all the basic Configuration
 *dbHost = Host of your MySQL DataBase Server... Usually it is localhost
 *dbUser = Username of your DataBase
 *dbPass = Password of your DataBase
 *dbName = Name of your DataBase
 **********************************************************************/
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "a3police";
$conn = new mysqli($hostname,$username,$password,$dbname);
    if($conn->connect_error) {
        die("Connection to database has failed. Error:" . "<br>" . $conn->connect_error);
    }

<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "crudphp";


$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    // echo "connection ok";
}
else
{
    echo "connection faild".mysqli_connect_error();
}

?>
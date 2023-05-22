<?php

$host = "localhost:3306";
$uid = "root";
$pwd = "";
$dbName = "db2209e0";

//thiet lap ket noi tu ung dung PHP -> DB Server MySQL
$cn =  new mysqli($host, $uid, $pwd,$dbName);

//kiem tra
if($cn->connect_error){
    //ket noi that bai
    echo "<h3> Connect to MySQL failed ! </h3>";

    // echo "<p> Loi sai: " . mysqli_connect_error();
    // exit();
    die ("<p> Loi sai: " . $cn->connect_error);
}
else{
    echo "<h3>Connect to MySQL (OOP) succeeded !</h3>";
}


?>
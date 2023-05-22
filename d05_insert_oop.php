<?php 

//1. insert file connectDB_oop de mo ket noi den DB
include_once ("d05_connectDB_oop.php");

//2. them 1 mon hoc moi vo table tbModule: chuan bi bien bo nho
$sname = "PRO1";
$lname = "eProject Semester 1";
$hour = 20;
$fee = 150;

$sql = "INSERT INTO `tbmodules` (`id`, `sname`, `lname`, `hours`, `fee`) VALUES (NULL, '$sname', '$lname', $hour, $fee);";

//3. goi ham thi hanh lenh INSERT sql
$r = $cn->query($sql);

if($r == false){
    echo "<p> >> ERROR: cannot insert new data ! </p>";
    echo "<p> " . $cn->error . "</p>";
}
else{
    echo "<p> >> INSERT successful ! </p>";
    echo "<p> >> New Module_ID: [$cn->insert_id] </p>";
}

//4. dong ket noi
$cn->close();

?>
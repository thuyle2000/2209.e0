<?php 

//1. insert file connectDB de mo ket noi den DB
include_once ("d05_connectDB.php");

//2. them 1 mon hoc moi vo table tbModule: chuan bi bien bo nho
$sname = "AJS";
$lname = "AngularJS & Angular";
$hour = 20;
$fee = 100;

$sql = "INSERT INTO `tbmodules` (`id`, `sname`, `lname`, `hours`, `fee`) VALUES (NULL, '$sname', '$lname', $hour, $fee);";

//3. goi ham thi hanh lenh INSERT sql
$r = mysqli_query($cn, $sql);

if($r == false){
    echo "<p> >> ERROR: cannot insert new data ! </p>";
    echo "<p> " . mysqli_error($cn) . "</p>";
}
else{
    echo "<p> >> INSERT successful ! </p>";
    echo "<p> >> New Module_ID: [". mysqli_insert_id($cn). "] </p>";
}

//4. dong ket noi
mysqli_close($cn);

?>
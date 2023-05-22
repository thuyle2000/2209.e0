<?php 

//1. insert file connectDB de mo ket noi den DB
include_once ("d05_connectDB.php");

//2. thay doi gio hoc va hoc phi cua 1 mon hoc theo ma so
$sname = "AJS";
$hour = 24; //old: 20;
$fee = 150; //old: 100;

$sql = "UPDATE `tbmodules` SET `hours`='$hour',`fee`='$fee' WHERE `sname` LIKE '$sname'";

//3. goi ham thi hanh lenh UPDATE sql
$r = mysqli_query($cn, $sql);

if($r == false){
    echo "<p> >> ERROR: cannot update data ! </p>";
    echo "<p> " . mysqli_error($cn) . "</p>";
}
else{
    echo "<p> >> UPDATE successful ! </p>";
}

//4. dong ket noi
mysqli_close($cn);

?>
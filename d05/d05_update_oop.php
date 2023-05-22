<?php 

//1. insert file connectDB de mo ket noi den DB
include_once ("d05_connectDB_oop.php");

//2. thay doi gio hoc va hoc phi cua 1 mon hoc theo ma so
$sname = "abc";
$hour = 25; //old: 20;
$fee = 130; //old: 100;

$sql = "UPDATE `tbmodules` SET `hours`='$hour',`fee`='$fee' WHERE `sname` LIKE '$sname'";

//3. goi ham thi hanh lenh UPDATE sql
$r = $cn->query($sql);

if($r == false){
    echo "<p> >> ERROR: cannot update data ! </p>";
    echo "<p> " . $cn->error . "</p>";
}
else{
    echo "<p> >> UPDATE successful ! </p>";
}

//4. dong ket noi
mysqli_close($cn);

?>
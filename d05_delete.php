<?php 

//1. insert file connectDB de mo ket noi den DB
include_once ("d05_connectDB.php");

//2. xoa 1 mon hoc theo ma so
$sname = "abc";

$sql = "DELETE FROM `tbmodules` WHERE `sname` LIKE '$sname'";

//3. goi ham thi hanh lenh DELETE sql
$r = mysqli_query($cn, $sql);

if($r == false){
    echo "<p> >> ERROR: cannot delete data ! </p>";
    echo "<p> " . mysqli_error($cn) . "</p>";
}
else{
    echo "<p> >> DELETE successful ! </p>";
}

//4. dong ket noi
mysqli_close($cn);

?>
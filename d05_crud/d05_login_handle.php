<?php 
declare(strict_types=1);
if( isset( $_POST['submit']) ==false){
    header("location:d05_login.php");
    exit();
}

include_once "user.php";
//doc du lieu nhap ben trang login
$uid = $_POST["uid"];
$password = $_POST["password"];

$user = UserDAO::getByid($uid);
if($user==false){
    echo "<b>Invalid Username ! Plz, try again ! </b>";
}
else if($user->password != $password) {
    echo "<b>Invalid Password ! Plz, try again ! </b>";
}
else if($user->role==1){
    header("location:d05_modules.php");
}
else{
    header("location:../d04/d04_function_date.php");
}



?>
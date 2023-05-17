<?php 

if(isset($_POST["submit"]) == false){
    //quay ve lai trang dang ky
    header("location:d03_signup.html");
}


//lay du lieu nhap tren form sign-up 
$uid = $_POST["uid"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$gender = $_POST["gender"];

$lan = [];
if (isset($_POST["lan"])){
    $lan = $_POST["lan"];
}

$location =$_POST["location"];

echo "<h3>Your Information </h3>";
echo "username : $uid <br>";
echo "password : $pass <br>";
echo "email : $email <br>";
echo "gender : $gender <br>";
echo "location : $location <br>";
echo "languages : ";

foreach ($lan as $item) {
    echo "$item ";
}



?>
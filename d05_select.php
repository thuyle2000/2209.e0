<?php 

//1. insert file connectDB de mo ket noi den DB
include_once ("d05_connectDB.php");

//2. xem danh sach cac mon hoc

$sql = "SELECT * FROM `tbmodules`";

//3. goi ham thi hanh lenh SELECT sql
$r = mysqli_query($cn, $sql);

if($r == false){
    echo "<p> >> ERROR: cannot retrieve data ! </p>";
    echo "<p> " . mysqli_error($cn) . "</p>";
}
else{
    //doc cac dong trong ket qua tra ve
    if(mysqli_num_rows($r)==0){
        echo "<h3>No data found !</h3";
    }
    else{
        echo "<h3>List of Modules</h3><hr>";

        while($row = mysqli_fetch_array($r)){
            echo "id: ". $row['id'] . "<br>";
            echo "short name: ". $row['sname'] . "<br>";
            echo "longt name: ". $row['lname'] . "<br>";
            echo "hours: ". $row['hours'] . "<br>";
            echo "fee: ". $row['fee'] . "<br><br>";
        }
    }

}

//4. dong ket noi
mysqli_close($cn);

?>
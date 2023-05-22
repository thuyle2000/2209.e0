<?php
include_once("modules.php");

if(isset($_GET['id'])){
    // echo "DELETE  here ";

    $maMH = $_GET['id'];
    $mh = new ModuleDAO();
    $mh->delete($maMH);
    header("location:d05_modules.php");
    
}
else{
    header("location:d05_modules.php");
}
?>
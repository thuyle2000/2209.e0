<?php 
//kiem tra form login da duoc submit chua ?
if(isset($_POST["submit"])){
    //form login da duoc submit
    //lay thong tin dang nhap
    $uid= $_POST["uid"];
    $pwd= $_POST["pwd"];

    //luu thong tin dang nhap vo bien cookie
    setcookie("user",$uid);
    setcookie("password", $pwd);

    header("location:d04_function_date.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div>
            <?php 
            if(isset($_COOKIE["user"])){
                echo "<b> Welcome Mr/Ms " . $_COOKIE["user"] ."</b>";
            }
            ?>
        </div>
        <h3>login</h3>
        <form  method="post">
            <div>
                <label for="">username</label>
                <input type="text" name="uid" id="uid" required>
            </div>
            <div>
                <label for="">password</label>
                <input type="password" name="pwd" id="pwd" required>
            </div>
            <div>
                <button class="btn btn-danger" name="submit">Submit</button>
                <button type="reset" class="btn btn-info">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>
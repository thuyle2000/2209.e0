<?php
include_once("modules.php");

if (isset($_POST['submit'])) {
    //neu button [submit] cua form da duoc kich hoat:
    //lay du lieu duoc de trinh len server de xu ly (cu the la luu vo DB)

    $sname = $_POST["sname"];

    //kiem tra $sname co bi trung ko
    if(ModuleDAO::getBySName($sname)==false){
        //sname la unique
        $lname = $_POST["lname"];
        $hours = $_POST["hours"];
        $fee = $_POST["fee"];
    
        $newModule = new Module(null, $sname,$lname, $hours, $fee);
        ModuleDAO::insert($newModule);
    
        header("location:d05_modules.php");
    }
    else{
        echo "<div class='container'><p style='color:red;'>Short name must be uniqued ! Cannot insert new module !</p></div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h2>Add New Module</h2>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="">short name</label>
                        <input type="text" class="form-control" name="sname" id="sname" placeholder="enter short name" required>
                    </div>

                    <div class="form-group">
                        <label for="">long name</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="enter long name" required>
                    </div>

                    <div class="form-group">
                        <label for="">hours</label>
                        <input type="number" class="form-control" name="hours" id="hours" value="24" required>
                    </div>

                    <div class="form-group">
                        <label for="">fee</label>
                        <input type="number" class="form-control" name="fee" id="fee" value="120" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger" name="submit">Submit</button>

                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
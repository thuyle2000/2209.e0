<?php
include_once("modules.php");

if (isset($_GET['id'])) {
    //neu trang duoc mo tu duong cac link update trong trang [d05_module.php]
    //lay mon hoc co ma so id
    $mh = ModuleDAO::getByid($_GET['id']);

    if ($mh == false) {
        die("<h3>Error: Cannot get module having id = '$mh' ! <h3>");
    }
}
if (isset($_POST['submit'])) {
    //neu button [submit] cua form da duoc kich hoat:
    //lay du lieu duoc de trinh len server de xu ly (cu the la cap nhat lai trong DB)

    $id = $_POST["id"];
    $sname = $_POST["sname"];
    $lname = $_POST["lname"];
    $hours = $_POST["hours"];
    $fee = $_POST["fee"];

    $newModule = new Module($id, $sname, $lname, $hours, $fee);
    ModuleDAO::update($newModule);

    header("location:d05_modules.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h4>Change information of a Module</h4>

                <form action="" method="post">

                    <div class="form-group">
                        <label for="">id</label>
                        <input type="text" class="form-control" name="id" id="id" value="<?php echo $mh->id ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">short name</label>
                        <input type="text" class="form-control" name="sname" id="sname" value="<?php echo $mh->sname ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">long name</label>
                        <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $mh->lname ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="">hours</label>
                        <input type="number" class="form-control" name="hours" id="hours" value="<?php echo $mh->hours ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="">fee</label>
                        <input type="number" class="form-control" name="fee" id="fee" value="<?php echo $mh->fee ?>" required>
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
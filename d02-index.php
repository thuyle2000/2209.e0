<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    if ($name == '') {
        $errname = true;
    }   
    $email = $_POST['email'];
    if ($email == '') {
        $erremail = true;
    }
    $phone = $_POST['phone'];
    if ($phone == '') {
        $errphone = true;
    }
    $password = $_POST['password'];
    if ($password == '') {
        $errpassword = true;
    }
    $repeat_password = $_POST['repeat_password'];
    if ($repeat_password == '') {
        $errrepeat_password = true;
    }
    if ($password != $repeat_password) {
        $errpassword = true;
        $errrepeat_password = true;
    }
    if($name != '' && $email != '' && $phone != '' && $password != '' && $repeat_password != '' && $password == $repeat_password){
        $message = "Welcome $name, your password is $password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hello newbie :))))))))))))))))))</title>
</head>

<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Hello World</h1>
                <?php
                if (isset($message)) {
                    echo "<p class='text-success'>$message</p>";
                }
                ?>
            </div>
            <form action="d02-index.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" autocomplete="new-password">
                <?php
                if (isset($errname)) {
                    echo "<p class='text-danger'>Please enter name</p>";
                }
                ?>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" autocomplete="new-password">
                <?php
                if (isset($erremail)) {
                    echo "<p class='text-danger'>Please enter email</p>";
                }
                ?>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="new-password">
                <?php
                if (isset($errpassword)) {
                    echo "<p class='text-danger'>Please enter password</p>";
                }
                ?>
                <label for="repeat_password">Config Password</label>
                <input type="password" name="repeat_password" id="repeat_password" class="form-control" autocomplete="new-password">
                <?php
                if (isset($errrepeat_password)) {
                    echo "<p class='text-danger'>Please enter repeat password</p>";
                }
                if (isset($errpassword) && isset($errrepeat_password)) {
                    echo "<p class='text-danger'>Password and repeat password must be the same</p>";
                }
                ?>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" autocomplete="new-password">
                <?php
                if (isset($errphone)) {
                    echo "<p class='text-danger'>Please enter phone</p>";
                }
                ?>

                <p class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </p>

                <!-- <p class="text-center"><?php echo $_GET['name'] ?></p> -->
            </form>


        </div>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
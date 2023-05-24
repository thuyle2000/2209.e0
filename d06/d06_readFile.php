<?php 
$content = "nothing ...";
if(isset($_POST["submit"])){
    $fname = "F:/".$_POST["fname"];
    // $fname =  "F:/testPHP.txt";

    $handle = fopen("$fname","r");
    $content = fread($handle, filesize($fname));

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read-file</title>
    
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>PHP READ FILE</h3>
        <hr>
        <form action="" method="post">
            <div>
                <label for="">File name</label>
                <input type="file" name="fname" id="fname" required>
            </div>
            <div>
                <button type="submit" name="submit" class="btn btn-danger">Load file</button>
            </div>

            <div>
                <label for="">content</label> <br>
                <textarea name="content" id="content" cols="30" rows="10" ><?php echo $content ?></textarea>
            </div>


        </form>
    </div>
</body>
</html>
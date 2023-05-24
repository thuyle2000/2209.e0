<?php 
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $content = $_POST["content"];

    //open file de save noi dung content
    $handle = fopen($fname,"w");
    fwrite($handle, $content);
    fclose($handle);
    echo "<h3>Save File Succeeded !</h3><hr>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>

    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
    <h2>PHP WRITE FILE DEMO</h2>
    <hr>
    <form action="" method="post">
        <div>
            <label for="">Filename</label>
            <input type="text" name="fname" id="fname" value="F:/testPHP.txt" required>
        </div>
        <div>
            <label for="">content</label> <br>
            <textarea name="content" id="content" cols="30" rows="10" required>nothing...</textarea>
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-danger">Save</button>
        </div>
    </form>
    </div>

</body>

</html>
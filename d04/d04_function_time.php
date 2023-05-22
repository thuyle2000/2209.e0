<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>time()</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>PHP time() function Demo</h2>
        <hr>
        <?php
        $time = time();
        echo "Current timestamp is " . $time . "<br> <hr>";
        echo "Current time is " . date("h:i:s a") . "<br>";
        echo "Current time is " . date("H:i:s A") . "<br><br>";
        date_default_timezone_set("Asia/Saigon");
        echo "After set timezone (date_default_timezone_set('Asia/Saigon'))<br>";
        echo "Current time is " . date("h:i:s a") . "<br>";
        echo "Current time is " . date("H:i:s A") . "<br>";
        
       
        ?>
    </div>
</body>

</html>
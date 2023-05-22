<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <h2>Array PHP Demo</h2>
    <hr>
    <?php

    echo "<pre>";

    $a = [2, 3, 5, 7, 11, 13];
    $b = ["Toan", "Thien", "Minh", "Tuan", "Quan", "Dan", "Thao", "Binh", "Chuong", "Anh", "Huy", "Phu"];

    // echo $a; : loi !!!
    print_r($a);
    echo "<br>";
    print_r($b);
    echo "</pre>";

    foreach ($b as $key => $value) {
       echo "$value,  ";
    }
    ?>
</body>

</html>
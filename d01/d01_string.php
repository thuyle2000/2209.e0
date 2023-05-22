<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <h2>String function PHP</h2>
    <hr>
    <?php 
    $name = "tran gia toan";
    echo "ho ten :  $name <br>";
    echo "strlen() =  " . strlen($name) . "<br>";
    echo "str_word_count() = " . str_word_count($name) ."<br>";
    echo "strrev() = ". strrev($name) ."<br>";
    echo "ucwords() = " . ucwords($name) . "<br>";
    echo "strpos() = " . strpos($name, "ia") . "<br>";
    echo "str_replace() = ". str_replace("a", "e", $name) ."<br>"; 

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math</title>
</head>

<body>
    <h2>PHP Math functions </h2>
    <hr>
    <?php
    $n1 = 225;
    $n2 = -58.866;
    $n3 = 346;

    echo "n1 = $n1 <br>";
    echo "n2 = $n2 <br>";
    echo "n3 = $n3 <br> <hr>";


    echo "min(n1, n2, n3) = " . min($n1, $n2, $n3) . "<br>";
    echo "max(n1, n2, n3) = " . max($n1, $n2, $n3) . "<br> <br>";

    echo "round(n2) = " . round($n2) . "<br>";
    echo "floor(n2) = " . floor($n2) . "<br>";
    echo "ceil(n2) = " . ceil($n2) . "<br>";
    echo "abs(n2) = " . abs($n2) . "<br><br>";

    echo "sqrt(n1) = " . sqrt($n1) . "<br><br>";

    echo "rand() = " . rand() . "<br>";
    
    ?>
</body>

</html>
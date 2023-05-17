<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h2>Function PHP demo</h2>
    <hr>

    <?php 
        //ham ko tham so
        function fn_1(){
            echo "<p> * Function without parameter </p>";
        }

        //ham co tham so
        function fn_2($n1, $n2){
            echo "<p> * Function with 2 parameters : n1=$n1, n2=$n2 </p>";

            echo "$n1 + $n2 = " . ($n1 + $n2) . "<br>";
            echo "$n1 - $n2 = " . ($n1 - $n2) . "<br>";
            echo "$n1 * $n2 = " . ($n1 * $n2) . "<br>";
            echo "$n1 / $n2 = " . ($n1 / $n2) . "<br><br>";
        }

        //ham co tham so default
        function fn_3($n1=100, $n2=30){
            echo "<p> * Function with default parameters : n1=$n1, n2=$n2 </p>";

            echo "$n1 + $n2 = " . ($n1 + $n2) . "<br>";
            echo "$n1 - $n2 = " . ($n1 - $n2) . "<br>";
            echo "$n1 * $n2 = " . ($n1 * $n2) . "<br>";
            echo "$n1 / $n2 = " . ($n1 / $n2) . "<br><br>";
        }


        //goi ham 
        fn_1();
        fn_2(12, 5);
        
        fn_3(24, 5);
        fn_3();

    ?>
</div>
</body>

</html>
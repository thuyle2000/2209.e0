<?php
declare(strict_types=1);
?>
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
        <h2>PHP Function Demo (pass arguments by references)</h2>
        <hr>
        <?php

        //ham co tham so hinh thuc la dia chi tham chieu cua tham so thuc te
        function gptb2(int $a, int $b, int $c, float &$x1, float &$x2): int
        {
            $delta = $b * $b - 4 * $a * $c;
            if ($delta < 0) {
                return -1; //pt vo nghiem
            } else if ($delta == 0) {
                //pt co nghiem kep
                $x1 = $x2 = -$b / (2 * $a);
                return 0;
            } else {
                //pt co 2 nghiem phan biet
                $x1 = (-$b - sqrt($delta)) / (2 * $a);
                $x2 = (-$b + sqrt($delta)) / (2 * $a);
                return 1;
            }
        }


        function test($a, $b, $c)
        {
            $x1 = $x2 = 0;
            $kq = gptb2($a, $b, $c, $x1, $x2);

            echo "<p> * Giai PTB2: ax2 + bx + c = 0 . ";
            echo " Voi a = $a, b=$b, c=$c <br>";
            switch ($kq) {
                case -1:
                    echo " => PT  vo nghiem ! <br>";
                    break;
                case 0:
                    echo " => PT  co nghiem kep : x1=x2= $x1 <br>";
                    break;
                case 1:
                    echo " => PT  co 2 nghiem : x1= $x1, x2= $x2 <br>";
                    break;
            }
        }


        //test case
        //1. Goi ham GPTB2 voi cac he so a=1, b=2, c=5 => PT vo nghiem
        test(1, 2, 5);

        //2.1 Goi ham GPTB2 voi cac he so a=1, b=2, c=1 => PT co nghiem kep
        test(1, 2, 1);

        //2.2 Goi ham GPTB2 voi cac he so a=1, b=4, c=4 => PT co nghiem kep
        test(1, 4, 4);

        //2.3 Goi ham GPTB2 voi cac he so a=4, b=4, c=1 => PT co nghiem kep
        test(4, 4, 1);


        //2.3 Goi ham GPTB2 voi cac he so a=1, b=4, c=-3 => PT co nghiem phan biet
        test(1, 2, -3);

        ?>
    </div>
</body>

</html>
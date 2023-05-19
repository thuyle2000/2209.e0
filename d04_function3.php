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
        <h2>PHP Function Demo (named arguments)</h2>
        <?php 
        function display (string $name, int $yob, bool $gender):void{
            $currentYear = date('Y'); 
            echo "<h4>Profile</h4>";
            echo "<p>";
            echo "name: $name <br>";
            echo "year of birth: $yob => age = ".($currentYear-$yob) ." <br>";
            echo "gender: ".  ($gender?"male":"female"). "<br>" ;
            echo "</p>";
        }

        //test case
        display("Bao Thanh Thien", 2002, true);
        display(gender:false, yob:2005, name:"dustin hoang");
        
        ?>
    </div>

    
</body>
</html>
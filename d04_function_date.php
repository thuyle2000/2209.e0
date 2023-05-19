<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date()</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <h2>PHP date() function Demo</h2>
    <hr>
    <?php 
       
        echo "<p>Today is ". date("d/M/Y"). " ,  [date('d/M/Y')] </p>";
        echo "<p>Today is ". date("d/m/Y"). " ,  [date('d/m/Y')] </p>";
        echo "<p>Today is ". date("l d/m/Y"). " ,  [date('l d/m/Y')] </p>";
        echo "<hr>";
        echo "<p>Current year is ". date("Y"). " ,  [date('Y')] </p>";
        echo "<p>Current year is ". date("y"). " ,  [date('y')] </p>";

        echo "<hr>";
        $dob = date_create("14-12-2000");
        echo "<p> Chuong's birthday : ". date_format($dob,"d-M-Y"). "</p>";

    ?>
</div>
</body>

</html>
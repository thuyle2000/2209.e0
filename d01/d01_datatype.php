<?php 
echo "<h2> Data type PHP 8.x </h2>";
echo "<hr>";

$n1 = 1000;     //bien n1, kieu integer
$n2 = 123.3456; //bien n2, kieu float
$s = "Hello.";  //bien s, kieu string
$b = true;      //bien b, kieu boolean

echo " $s <br>";
echo " $n1 + $n2 = " . ($n1+$n2) . "<br>";

if($b){
    echo "Today is Friday <br>";
}
else{
    echo "Today is weekend ! <br>";
}
?>
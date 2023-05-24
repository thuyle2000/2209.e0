<?php
$dbhost = "localhost";
$username = "root";
$password = "";

$db = "db2209e0";
$conn = mysqli_connect($dbhost, $username, $password, $db);
if (!$conn) {
    die("Could not connect: " . mysqli_connect_error());
}

$table_name = "tbModuleBK";
$backup_file = "F:/databk/modules.sql";
$sql = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";

$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die("Encountered an error, Could not load data: " . mysqli_error($conn));
}
echo "<h3>Loaded data successfully</h3>";
mysqli_close($conn);

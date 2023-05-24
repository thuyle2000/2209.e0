<?php
$dbhost = "localhost:3306";
$username = "root"; $password = ""; $db = "db2209e0";

$conn = mysqli_connect($dbhost, $username, $password, $db);

if (!$conn) {
    die("Error while connecting" . mysqli_connect_error());
}

$table_name = "tbModules";
$backup_file  = "F:/databk/modules.sql";
$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";

$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die("Error while attempting data backup: Sorry this operation is not successful " . mysqli_error($conn));
}

echo "<h3>Backed up data successfully </h3>";
mysqli_close($conn);

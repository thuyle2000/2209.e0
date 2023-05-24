<?php
$dbhost = "localhost:3036";
$username = "root";
$password = "";
$dbname = "db2209e0";
$backup_file = "F:/databk/". $dbname. date("Y-m-d-H-i-s") . '.gz';

$command = "mysqldump --opt -h $dbhost -u $username -p $password lct2DB | gzip > $backup_file --databases $dbname";  


$cmd = "mysqldump --user=root --password=  --result-file=F:/databk/bk.sql --databases db2209e0";
system($cmd);

// system($command);
echo "<h3>Binary Data backed up successfully !</h3>";

<?php
include_once("modules.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modules</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>List of Modules</h2>
        <hr>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>short name</th>
                    <th>long name</th>
                    <th>hours</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $modules = new ModuleDAO();
                $ds = $modules->get();
                // var_dump($ds);
                foreach ($ds as $row) {
                    echo "<tr>";
                    echo "<td> $row->id </td>";
                    echo "<td> $row->sname </td>";
                    echo "<td> $row->lname </td>";
                    echo "<td> $row->hours </td>";
                    echo "<td>
                        <a href='d05_modules_update.php?id=$row->id'>Update</a> 
                        | 
                        <a href='d05_modules_delete.php?id=$row->id'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>
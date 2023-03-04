<?php
require 'function.php';
 $query = mysqli_query($conn, "SELECT * FROM projectname");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project App</title>
</head>
<body>
    <h1>Home</h1>
    <a href="add_project.php">Tambah Project</a>
    <table cellpadding="10" cellspacing="0" border="1">
        <tr>
            <th>No</th>
            <th>Project Name</th>
            <th>Project Size</th>
            <th>Project image</th>
            <th>Project amount</th>
            <th>Project expense</th>
            <th>Project Location</th>
            <th>aksi</th>
        </tr>
        <?php foreach ($query as $row):?>
             <tr>
             <td>1mnmg</td>
             <td><?= $row["project_name"];?></td>
             <td><?= $row["project_size"];?></td>
             <td><?= $row["project_img"];?></td>
             <td><?= $row["project_amount"];?></td>
             <td><?= $row["project_expense"];?></td>
             <td><?= $row["project_location"];?></td>
             <td><button>show</button></td>
             </tr>
             
       <?php endforeach; ?>
        

    </table>
</body>
</html>
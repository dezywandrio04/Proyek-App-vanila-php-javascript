<?php
require "function.php";

if (isset($_POST["simpan"])) {
   if (simpan($_POST) > 0) {
        echo "<script>
            alert('data berhasil disimpan');
            window.location.href='index.php';
        </script>";
   }else{
    echo "<script>
            alert('data gagal disimpan');
        </script>";
        
   }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project</title>
</head>
<body>
    <h1>Tambah Project Baru</h1>
    <form action="" method="post">
        <li>
            <label for="project_name">Project Name</label>
            <input type="text" name="project_name" id="project_name">
        </li>
        <li>
            <label for="project_size">Project Size</label>
            <input type="text" name="project_size" id="project_size">
        </li>
        <li>
            <label for="project_img">Project Image</label>
            <input type="text" name="project_img" id="project_img">
        </li>
        <li>
            <label for="project_amount">Project Amount</label>
            <input type="text" name="project_amount" id="project_amount">
        </li>
        <li>
            <label for="project_expense">Project expense</label>
            <input type="text" name="project_expense" id="project_expense">
        </li>
        <li>
            <label for="project_location">Project Location</label>
            <textarea name="project_location" id="" cols="30" rows="10"></textarea>
        </li>
        <li>
            <button type="submit" name="simpan">simpan</button>
        </li>
    </form>



</body>
</html>
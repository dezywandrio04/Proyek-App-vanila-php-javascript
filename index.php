<?php
    require 'function.php';
    $query = ambilData("SELECT * FROM projectname ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Project App</title>
</head>
<body>
    <main>
        <section class="block-image-home">
            <img src="vendor/home.jpg" width="600" alt="">
        </section>

        <section class="block-list-project">
            <div class="button_add">
                <a href="add_project.php" >Tambah Project</a>
            </div>
                <div class="list-project">
                        <?php foreach($query as $row): ?>
                            <a href="detail_project.php?id=<?= $row['id_project'];?>" class="a">
                            <div class="item-list-project">
                                <div>
                                    <img src="vendor/home.jpg" width="50" alt="" srcset="">
                                </div>
                                <div class="">
                                    <h6><?= $row['project_name'];?></h6>
                                </div>
                            </div>
                            </a>
                        <?php endforeach ; ?>
                </div>
        </section>
    </main> 
</body>
</html>
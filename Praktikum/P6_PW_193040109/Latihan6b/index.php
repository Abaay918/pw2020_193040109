<?php
    require 'php/functions.php';

    $alatmusik = query("SELECT * FROM tubes_193040109")

?>

<html>
    <head>
       

        <title>19304109</title>
        <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
       

    </head>
    
    <div class="container">
        <?php foreach ($alatmusik as $row) :?>
            <p class="tipe">
                 <a href="php/detail.php?id=<?= $row['id'] ?>">
                    <?= $row["nama"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
    </div>
</html>
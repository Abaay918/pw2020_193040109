<?php
    require 'php/functions.php';

    $alatmusik = query("SELECT * FROM elektronik")

?>

<html>
    <head>
       

        <title>document</title>
       

    </head>
    
<body>
    <div class="container">
        <?php foreach ($alatmusik as $alat) :?>
            <p class="tipe">
                 <a href="php/detail.php?id=<?= $alat['id'] ?>">
                    <?= $alat["harga"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>
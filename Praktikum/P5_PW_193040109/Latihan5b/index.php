<?php

    require 'php/functions.php';


    $laptop = query("SELECT * FROM elektronik")

?>

<html>
    <head>
    
        <title>document</title>

        <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
<body>
<div class="container">
    <table border="1" cellpadding="3" cellspacing="2">
        <tr>
             <th>Photo</th>
            <th>Alat Musik</th>
            <th>Apparel</th>
            <th>Alamat</th>
            <th>Harga</th>
        </tr>

        <?php foreach ($alatmusik as $alat) :?>
        <tr>
        <td><?=$lap["id"];?></td>
        <td><img src="assets/img/<?=$lap ["gambar"]?>" ></td>
        <td><?=$alat["photo"];?></td>
        <td><?=$alat["alat musik"];?></td>
        <td><?=$alat["apparel"];?></td>
        <td><?=$alat["alamat"];?></td>
        <td><?=$alat["harga"];?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    
</body>
</html>
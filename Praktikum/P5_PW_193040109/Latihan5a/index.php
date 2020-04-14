<?php

    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");


    mysqli_select_db($conn, "tubes_193040109") or die ("Database salah!");


    $laptop = mysqli_query($conn, "SELECT * FROM elektronik");
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

        <?php while($alat = mysqli_fetch_assoc($alatmusik)) :?>
        <tr>
        <td><?=$lap["id"];?></td>
        <td><img src="assets/img/<?=$lap ["gambar"]?>" ></td>
        <td><?=$alat["Photo"];?></td>
        <td><?=$alat["Alat Musik"];?></td>
        <td><?=$alat["Apparel"];?></td>
        <td><?=$alat["Alamat"];?></td>
        <td><?=$alat["harga"];?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    </div>
    
</body>
</html>
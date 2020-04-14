<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $alat = query("SELECT * FROM Alat Musik WHERE id = $id")[0];
?>

<html>
    <head>
    
        <title>document</title>



        <link rel="stylesheet" href="style.css">

    </head>

<body>
<div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $lap["gambar"]; ?>" alt="">
         </div>
            <div class="keterangan">
                <p><?= $alat["photo"]; ?></p>
                <p><?= $alat["apparel"]; ?></p>
                <p><?= $alat["alamat"]; ?></p>
                <p><?= $alt["harga"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">kembali</a> </button>
    </div>
</body>
</html>

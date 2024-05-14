<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Form Pendaftaran</title>
    </head>
    <body>
        Selamat Datang, <?php echo $_POST["nama"]; ?>!<br>
        Nim : <?php echo $_POST["nim"];?><br>
        Email : <?php echo $_POST["email"];?><br>
        Tempat, tanggal lahir : <?php echo $_POST["tempat_lahir"];?> ,<?php echo $_POST["tanggal"]; ?><br>
        Alamat : <?php echo $_POST["alamatrumah"]; ?> <br>
        Jenis Kelamin : <?php echo $_POST["jenis_kelamin"]; ?><br>
    </body>
</html>
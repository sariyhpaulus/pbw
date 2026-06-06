<!DOCTYPE html>
<html>
<head>
    <title>Proses POST</title>
</head>
<body>
    <h2>Data yang Dikirim</h2>

    <?php
    echo "Nama: " . $_POST['nama'] . "<br>";
    echo "Email: " . $_POST['email'];
    ?>
</body>
</html>
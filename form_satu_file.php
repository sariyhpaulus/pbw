<!DOCTYPE html>
<html>
<head>
    <title>Form Satu File</title>
</head>
<body>
    <h2>Form Data Mahasiswa</h2>

    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>

        <button type="submit" name="kirim">Kirim</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jurusan = $_POST['jurusan'];

        echo "<h3>Hasil Input</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "NIM: " . $nim . "<br>";
        echo "Jurusan: " . $jurusan . "<br>";
    }
    ?>
</body>
</html>
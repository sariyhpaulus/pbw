<!DOCTYPE html>
<html>
<head>
    <title>Validasi Form</title>
</head>
<body>
    <h2>Form Pendaftaran</h2>

    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur"><br><br>

        <button type="submit" name="daftar">Daftar</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $umur = $_POST['umur'];

        if (empty($nama) || empty($email) || empty($umur)) {
            echo "Semua field wajib diisi.";
        } elseif ($umur < 17) {
            echo "Umur minimal 17 tahun.";
        } else {
            echo "Pendaftaran berhasil.<br>";
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Umur: " . $umur;
        }
    }
    ?>
</body>
</html>
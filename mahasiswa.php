<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Form Data Mahasiswa</h2>

    <form method="post" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas"><br><br>

        <label>Nilai:</label><br>
        <input type="number" name="nilai"><br><br>

        <button type="submit" name="kirim">Kirim</button>
    </form>

    <hr>

    <?php
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['kirim'])) {
        $nama = bersihkan_input($_POST['nama']);
        $nim = bersihkan_input($_POST['nim']);
        $kelas = bersihkan_input($_POST['kelas']);
        $nilai = $_POST['nilai'];

        if (empty($nama) || empty($nim) || empty($kelas) || $nilai === "") {
            echo "Semua data wajib diisi.";
        } else {
            if ($nilai >= 75) {
                $status = "Lulus";
            } else {
                $status = "Tidak Lulus";
            }

            echo "<h3>Hasil Input</h3>";
            echo "Nama: " . $nama . "<br>";
            echo "NIM: " . $nim . "<br>";
            echo "Kelas: " . $kelas . "<br>";
            echo "Nilai: " . $nilai . "<br>";
            echo "Status: " . $status;
        }
    }
    ?>
</body>
</html>
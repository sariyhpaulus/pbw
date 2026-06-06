<?php
    // dbconn.php
    $host = "localhost";
    $dbname = "db_publikasi"; // Sesuaikan dengan nama database di PHPMyAdmin kamu
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Mengatur mode error ke exception untuk mempermudah debugging
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Koneksi ke database gagal: " . $e->getMessage());
    }
?>
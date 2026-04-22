<?php
// ============================================================
// koneksi.php - File koneksi ke database MySQL
// Konfigurasi default Laragon
// ============================================================

$host     = "localhost";
$user     = "root";
$password = "qwerty123";           // Default Laragon: password kosong
$database = "himpunan_db";

// Membuat koneksi ke MySQL menggunakan MySQLi
$koneksi = new mysqli($host, $user, $password, $database);

// Cek apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Set charset UTF-8 agar karakter Indonesia tampil dengan benar
$koneksi->set_charset("utf8mb4");

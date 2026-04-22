<?php
// ============================================================
// simpan_pendaftaran.php - Menerima & menyimpan data pendaftaran event
// Menggunakan Prepared Statement untuk keamanan (anti SQL Injection)
// ============================================================

require_once 'koneksi.php';

// Hanya proses jika request dari method POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // ---- Ambil & sanitasi data dari form ----
    $nama_lengkap  = trim($_POST['nama_lengkap']  ?? '');
    $nim           = trim($_POST['nim']            ?? '');
    $prodi         = trim($_POST['prodi']          ?? '');
    $email         = trim($_POST['email']          ?? '');
    $no_hp         = trim($_POST['no_hp']          ?? '');
    $event_dipilih = trim($_POST['event_dipilih']  ?? '');

    // ---- Validasi: pastikan semua field terisi ----
    if (empty($nama_lengkap) || empty($nim) || empty($prodi) ||
        empty($email) || empty($no_hp) || empty($event_dipilih)) {

        // Redirect ke halaman utama dengan pesan error
        header("Location: index.php?status=error&pesan=" . urlencode("Semua field wajib diisi!"));
        exit;
    }

    // ---- Validasi format email ----
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?status=error&pesan=" . urlencode("Format email tidak valid!"));
        exit;
    }

    // ---- Simpan ke database menggunakan Prepared Statement ----
    $sql = "INSERT INTO pendaftaran_event 
                (nama_lengkap, nim, prodi, email, no_hp, event_dipilih, tanggal_daftar)
            VALUES 
                (?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $koneksi->prepare($sql);

    if ($stmt) {
        // Bind parameter: s = string
        $stmt->bind_param("ssssss", $nama_lengkap, $nim, $prodi, $email, $no_hp, $event_dipilih);

        if ($stmt->execute()) {
            // Berhasil disimpan
            $stmt->close();
            header("Location: index.php?status=sukses&pesan=" . urlencode("Pendaftaran berhasil! Kami akan menghubungi Anda segera."));
        } else {
            // Gagal simpan
            $stmt->close();
            header("Location: index.php?status=error&pesan=" . urlencode("Gagal menyimpan data. Silakan coba lagi."));
        }
    } else {
        header("Location: index.php?status=error&pesan=" . urlencode("Terjadi kesalahan pada database."));
    }

    $koneksi->close();
    exit;

} else {
    // Jika diakses langsung (bukan dari form), redirect ke halaman utama
    header("Location: index.php");
    exit;
}

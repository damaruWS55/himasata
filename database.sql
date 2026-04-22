-- ============================================================
-- database.sql - Struktur & data awal database
-- Import file ini melalui phpMyAdmin atau HeidiSQL
-- ============================================================

-- Buat database jika belum ada
CREATE DATABASE IF NOT EXISTS himpunan_db
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- Gunakan database
USE himpunan_db;

-- ============================================================
-- Tabel: pendaftaran_event
-- Menyimpan data peserta yang mendaftar event
-- ============================================================
CREATE TABLE IF NOT EXISTS pendaftaran_event (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap    VARCHAR(150)    NOT NULL,
    nim             VARCHAR(20)     NOT NULL,
    prodi           VARCHAR(100)    NOT NULL,
    email           VARCHAR(150)    NOT NULL,
    no_hp           VARCHAR(20)     NOT NULL,
    event_dipilih   VARCHAR(200)    NOT NULL,
    tanggal_daftar  DATETIME        NOT NULL DEFAULT CURRENT_TIMESTAMP,
    created_at      TIMESTAMP       DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ============================================================
-- Contoh data pendaftaran (opsional, boleh dihapus)
-- ============================================================
INSERT INTO pendaftaran_event (nama_lengkap, nim, prodi, email, no_hp, event_dipilih, tanggal_daftar) VALUES
('Budi Santoso',      '2021001',  'Sains Data',        'budi@example.com',   '081234567890', 'Workshop Machine Learning Dasar',      NOW()),
('Ahmad Fauzi',       '2022003',  'Teknik Informatika', 'ahmad@example.com', '081234567892', 'Bootcamp Python for Data Analysis',    NOW());
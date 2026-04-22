<?php
// ============================================================
// index.php - Halaman Utama Website HMSD
// Himpunan Mahasiswa Sains Data
// ============================================================

// ---- DATA STATIS ORGANISASI ----
// Data ini bisa dipindahkan ke database di tahap pengembangan berikutnya

// Pengurus / Struktural
$pengurus = [
    [
        'nama'    => 'Rizky Firmansyah',
        'jabatan' => 'Ketua Umum',
        'foto'    => 'https://ui-avatars.com/api/?name=Rizky+Firmansyah&background=1a56db&color=fff&size=150',
    ],
    [
        'nama'    => 'Aulia Putri Sari',
        'jabatan' => 'Wakil Ketua',
        'foto'    => 'https://ui-avatars.com/api/?name=Aulia+Putri&background=1a56db&color=fff&size=150',
    ],
    [
        'nama'    => 'Dimas Eka Putra',
        'jabatan' => 'Sekretaris Umum',
        'foto'    => 'https://ui-avatars.com/api/?name=Dimas+Eka&background=1a56db&color=fff&size=150',
    ],
    [
        'nama'    => 'Nadia Kusuma Dewi',
        'jabatan' => 'Bendahara Umum',
        'foto'    => 'https://ui-avatars.com/api/?name=Nadia+Kusuma&background=1a56db&color=fff&size=150',
    ],
    [
        'nama'    => 'Fajar Nugroho',
        'jabatan' => 'Kadiv Penelitian & Pengembangan',
        'foto'    => 'https://ui-avatars.com/api/?name=Fajar+Nugroho&background=1a56db&color=fff&size=150',
    ],
    [
        'nama'    => 'Mira Anggraini',
        'jabatan' => 'Kadiv Humas & Komunikasi',
        'foto'    => 'https://ui-avatars.com/api/?name=Mira+Anggraini&background=1a56db&color=fff&size=150',
    ],
];

// Daftar Event / Workshop
$events = [
    [
        'nama'    => 'Workshop Machine Learning Dasar',
        'tanggal' => '5 Mei 2025',
        'tempat'  => 'Lab Komputer A, Gedung MIPA',
        'badge'   => 'Gratis',
        'warna'   => 'success',
    ],
    [
        'nama'    => 'Seminar Data Science Career Path',
        'tanggal' => '17 Mei 2025',
        'tempat'  => 'Aula Utama Universitas',
        'badge'   => 'Berbayar',
        'warna'   => 'warning',
    ],
    [
        'nama'    => 'Bootcamp Python for Data Analysis',
        'tanggal' => '1–3 Juni 2025',
        'tempat'  => 'Gedung Rektorat Lt. 2',
        'badge'   => 'Gratis',
        'warna'   => 'success',
    ],
    [
        'nama'    => 'Kompetisi Data Challenge 2025',
        'tanggal' => '20 Juni 2025',
        'tempat'  => 'Online (Zoom)',
        'badge'   => 'Kompetisi',
        'warna'   => 'primary',
    ],
];

// Data Alumni
$alumni = [
    [
        'nama'       => 'Hendri Saputra',
        'angkatan'   => 'Angkatan 2018',
        'pekerjaan'  => 'Data Scientist – Gojek',
        'foto'       => 'https://ui-avatars.com/api/?name=Hendri+Saputra&background=e8f0fe&color=1a56db&size=80',
    ],
    [
        'nama'       => 'Lestari Wulandari',
        'angkatan'   => 'Angkatan 2018',
        'pekerjaan'  => 'Machine Learning Engineer – Tokopedia',
        'foto'       => 'https://ui-avatars.com/api/?name=Lestari+Wulandari&background=e8f0fe&color=1a56db&size=80',
    ],
    [
        'nama'       => 'Gunawan Prasetyo',
        'angkatan'   => 'Angkatan 2019',
        'pekerjaan'  => 'Business Intelligence Analyst – BRI',
        'foto'       => 'https://ui-avatars.com/api/?name=Gunawan+Prasetyo&background=e8f0fe&color=1a56db&size=80',
    ],
    [
        'nama'       => 'Sari Pertiwi',
        'angkatan'   => 'Angkatan 2019',
        'pekerjaan'  => 'AI Research Intern – Brin',
        'foto'       => 'https://ui-avatars.com/api/?name=Sari+Pertiwi&background=e8f0fe&color=1a56db&size=80',
    ],
    [
        'nama'       => 'Bagas Wirawan',
        'angkatan'   => 'Angkatan 2020',
        'pekerjaan'  => 'Data Analyst – Shopee Indonesia',
        'foto'       => 'https://ui-avatars.com/api/?name=Bagas+Wirawan&background=e8f0fe&color=1a56db&size=80',
    ],
    [
        'nama'       => 'Annisa Ramadhani',
        'angkatan'   => 'Angkatan 2020',
        'pekerjaan'  => 'Statistician – BPS Pusat',
        'foto'       => 'https://ui-avatars.com/api/?name=Annisa+Ramadhani&background=e8f0fe&color=1a56db&size=80',
    ],
];

// Kegiatan yang Sedang Berlangsung
$kegiatan = [
    [
        'judul'   => 'Riset Kolaboratif: Analisis Sentimen Media Sosial',
        'divisi'  => 'Divisi Penelitian',
        'progres' => 60,
    ],
    [
        'judul'   => 'Pelatihan Data Visualization dengan Tableau',
        'divisi'  => 'Divisi Pengembangan SDM',
        'progres' => 40,
    ],
    [
        'judul'   => 'Persiapan Kompetisi Data Challenge Nasional 2025',
        'divisi'  => 'Divisi Prestasi',
        'progres' => 75,
    ],
    [
        'judul'   => 'Pembuatan Modul Belajar Python untuk Pemula',
        'divisi'  => 'Divisi Pendidikan',
        'progres' => 30,
    ],
];

// Berita Singkat
$berita = [
    [
        'judul'   => 'HIMASATA Raih Juara 2 Kompetisi Data Nasional 2024',
        'tanggal' => '12 April 2025',
        'isi'     => 'Tim HMSD berhasil meraih posisi Runner-Up dalam ajang Data Challenge tingkat nasional yang diikuti oleh lebih dari 50 universitas se-Indonesia.',
        'badge'   => 'Prestasi',
        'warna'   => 'success',
    ],
    [
        'judul'   => 'Pelantikan Pengurus HMSD Periode 2024/2025',
        'tanggal' => '3 April 2025',
        'isi'     => 'Pelantikan resmi pengurus baru HMSD periode 2024/2025 diselenggarakan di Aula Universitas, dihadiri oleh Dekan Fakultas dan seluruh civitas akademika.',
        'badge'   => 'Organisasi',
        'warna'   => 'primary',
    ],
    [
        'judul'   => 'MoU HMSD dengan Komunitas Data Indonesia',
        'tanggal' => '28 Maret 2025',
        'isi'     => 'HMSD resmi menandatangani nota kesepahaman dengan Komunitas Data Indonesia untuk kolaborasi pelatihan, penelitian, dan peluang magang bagi anggota.',
        'badge'   => 'Kerjasama',
        'warna'   => 'info',
    ],
    [
        'judul'   => 'Workshop AI Generatif Dihadiri 200 Peserta',
        'tanggal' => '10 Maret 2025',
        'isi'     => 'Workshop bertema "AI Generatif dalam Dunia Kerja" sukses diselenggarakan dan dihadiri lebih dari 200 peserta dari berbagai program studi.',
        'badge'   => 'Kegiatan',
        'warna'   => 'warning',
    ],
];

// Kontak Humas
$humas = [
    [
        'nama'  => 'Mira Anggraini',
        'peran' => 'Koordinator Humas',
        'wa'    => '6281234567800',
        'foto'  => 'https://ui-avatars.com/api/?name=Mira+Anggraini&background=1a56db&color=fff&size=80',
    ],
    [
        'nama'  => 'Rendi Kurniawan',
        'peran' => 'Sekretaris Humas',
        'wa'    => '6281234567801',
        'foto'  => 'https://ui-avatars.com/api/?name=Rendi+Kurniawan&background=1a56db&color=fff&size=80',
    ],
];

// Sosial Media
$sosmed = [
    [
        'platform' => 'Instagram',
        'akun'     => '@hmsd.official',
        'link'     => 'https://instagram.com/hmsd.official',
        'ikon'     => 'bi bi-instagram',
        'warna'    => '#E1306C',
        'bg'       => '#fce4ec',
    ],
    [
        'platform' => 'TikTok',
        'akun'     => '@hmsd.official',
        'link'     => 'https://tiktok.com/@hmsd.official',
        'ikon'     => 'bi bi-tiktok',
        'warna'    => '#010101',
        'bg'       => '#f0f0f0',
    ],
    [
        'platform' => 'YouTube',
        'akun'     => 'HMSD Official',
        'link'     => 'https://youtube.com/@hmsdofficial',
        'ikon'     => 'bi bi-youtube',
        'warna'    => '#FF0000',
        'bg'       => '#ffebee',
    ],
    [
        'platform' => 'Email',
        'akun'     => 'hmsd@university.ac.id',
        'link'     => 'mailto:hmsd@university.ac.id',
        'ikon'     => 'bi bi-envelope-fill',
        'warna'    => '#1a56db',
        'bg'       => '#e8f0fe',
    ],
];

// ---- Ambil pesan notifikasi dari URL (setelah submit form) ----
$status = htmlspecialchars($_GET['status'] ?? '');
$pesan  = htmlspecialchars($_GET['pesan']  ?? '');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMSD – Himpunan Mahasiswa Sains Data</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ============================================================
           VARIABEL & RESET GLOBAL
        ============================================================ */
        :root {
            --biru-utama   : #1a56db;
            --biru-gelap   : #1242a8;
            --biru-muda    : #e8f0fe;
            --biru-sedang  : #d1e0fd;
            --teks-gelap   : #111827;
            --teks-abu     : #6b7280;
            --bg-abu       : #f8fafc;
            --putih        : #ffffff;
            --radius-card  : 14px;
            --shadow-card  : 0 2px 16px rgba(26,86,219,0.09);
            --shadow-hover : 0 8px 32px rgba(26,86,219,0.18);
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--teks-gelap);
            background: var(--putih);
        }

        /* Smooth scroll untuk anchor link */
        html { scroll-behavior: smooth; }

        /* ============================================================
           NAVBAR
        ============================================================ */
        .navbar {
            background: rgba(255, 255, 255, 0.97) !important;
            backdrop-filter: blur(12px);
            border-bottom: 1.5px solid var(--biru-sedang);
            padding: 12px 0;
            position: sticky;
            top: 0;
            z-index: 1050;
            box-shadow: 0 1px 10px rgba(26,86,219,0.07);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.15rem;
            color: var(--biru-utama) !important;
            letter-spacing: -0.3px;
        }

        .navbar-brand .brand-dot {
            color: var(--teks-gelap);
        }

        .nav-link {
            font-weight: 600;
            font-size: 0.88rem;
            color: var(--teks-abu) !important;
            padding: 6px 12px !important;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .nav-link:hover {
            color: var(--biru-utama) !important;
            background: var(--biru-muda);
        }

        .btn-daftar-nav {
            background: var(--biru-utama);
            color: var(--putih) !important;
            padding: 7px 18px !important;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 700;
            transition: background 0.2s;
        }

        .btn-daftar-nav:hover {
            background: var(--biru-gelap) !important;
            color: var(--putih) !important;
        }

        /* ============================================================
           HERO SECTION
        ============================================================ */
        .hero-section {
            background: linear-gradient(135deg, #0d3585 0%, #1a56db 45%, #3b82f6 100%);
            color: var(--putih);
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
        }

        /* Dekorasi lingkaran background */
        .hero-section::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
            top: -120px; right: -100px;
            pointer-events: none;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            width: 300px; height: 300px;
            border-radius: 50%;
            background: rgba(255,255,255,0.04);
            bottom: -80px; left: -60px;
            pointer-events: none;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.3);
            color: #fff;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 5px 16px;
            border-radius: 30px;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .hero-section h1 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .hero-section p {
            font-size: 1.05rem;
            opacity: 0.88;
            max-width: 580px;
            line-height: 1.7;
            margin-bottom: 32px;
        }

        .hero-stat {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 12px;
            padding: 14px 22px;
            text-align: center;
        }

        .hero-stat .angka {
            font-size: 1.7rem;
            font-weight: 800;
            line-height: 1;
        }

        .hero-stat .label {
            font-size: 0.78rem;
            opacity: 0.8;
            margin-top: 3px;
        }

        /* ============================================================
           TOMBOL UMUM
        ============================================================ */
        .btn-biru {
            background: var(--biru-utama);
            color: var(--putih);
            border: none;
            border-radius: 30px;
            padding: 11px 28px;
            font-weight: 700;
            font-size: 0.9rem;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-biru:hover {
            background: var(--biru-gelap);
            color: var(--putih);
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(26,86,219,0.3);
        }

        .btn-outline-biru {
            border: 2px solid var(--biru-utama);
            color: var(--biru-utama);
            background: transparent;
            border-radius: 30px;
            padding: 9px 26px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.2s;
        }

        .btn-outline-biru:hover {
            background: var(--biru-utama);
            color: var(--putih);
        }

        .btn-hero-outline {
            border: 2px solid rgba(255,255,255,0.7);
            color: rgba(255,255,255,0.9);
            border-radius: 30px;
            padding: 11px 28px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            display: inline-block;
            transition: all 0.2s;
        }

        .btn-hero-outline:hover {
            background: rgba(255,255,255,0.15);
            color: #fff;
        }

        /* ============================================================
           JUDUL SECTION
        ============================================================ */
        .section-header { margin-bottom: 48px; }

        .section-label {
            font-size: 0.78rem;
            font-weight: 700;
            color: var(--biru-utama);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 800;
            color: var(--teks-gelap);
            margin-bottom: 12px;
        }

        .section-title span { color: var(--biru-utama); }

        .section-desc {
            color: var(--teks-abu);
            font-size: 0.95rem;
            max-width: 560px;
        }

        .section-divider {
            width: 48px; height: 4px;
            background: var(--biru-utama);
            border-radius: 4px;
            margin: 12px 0;
        }

        /* ============================================================
           CARD UMUM
        ============================================================ */
        .card-hmsd {
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            box-shadow: var(--shadow-card);
            transition: all 0.25s ease;
            background: var(--putih);
        }

        .card-hmsd:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-4px);
            border-color: var(--biru-utama);
        }

        /* ============================================================
           SECTION: STRUKTURAL
        ============================================================ */
        #struktural { padding: 80px 0; background: var(--bg-abu); }

        .card-pengurus {
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            padding: 28px 20px;
            text-align: center;
            background: var(--putih);
            box-shadow: var(--shadow-card);
            transition: all 0.25s;
        }

        .card-pengurus:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            border-color: var(--biru-utama);
        }

        .card-pengurus img {
            width: 80px; height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--biru-muda);
            margin-bottom: 14px;
        }

        .card-pengurus .nama {
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 4px;
        }

        .card-pengurus .jabatan {
            font-size: 0.8rem;
            color: var(--teks-abu);
            background: var(--biru-muda);
            display: inline-block;
            padding: 3px 12px;
            border-radius: 20px;
            color: var(--biru-utama);
            font-weight: 600;
        }

        /* ============================================================
           SECTION: EVENT
        ============================================================ */
        #event { padding: 80px 0; background: var(--putih); }

        .card-event {
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            overflow: hidden;
            background: var(--putih);
            box-shadow: var(--shadow-card);
            transition: all 0.25s;
            height: 100%;
        }

        .card-event:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .card-event .event-header {
            background: linear-gradient(135deg, var(--biru-utama), #3b82f6);
            padding: 22px 22px 16px;
            color: var(--putih);
        }

        .card-event .event-header h5 {
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .card-event .event-body { padding: 18px 22px 22px; }

        .event-info {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--teks-abu);
            font-size: 0.85rem;
            margin-bottom: 6px;
        }

        .event-info i { color: var(--biru-utama); font-size: 1rem; }

        /* ============================================================
           SECTION: FORM PENDAFTARAN
        ============================================================ */
        #pendaftaran { padding: 80px 0; background: linear-gradient(135deg, #f0f5ff 0%, #e8f0fe 100%); }

        .form-card {
            background: var(--putih);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 4px 40px rgba(26,86,219,0.12);
            border: 1.5px solid var(--biru-sedang);
        }

        .form-label {
            font-weight: 600;
            font-size: 0.875rem;
            color: var(--teks-gelap);
            margin-bottom: 6px;
        }

        .form-control, .form-select {
            border: 1.5px solid #d1e0fd;
            border-radius: 10px;
            padding: 10px 14px;
            font-size: 0.9rem;
            color: var(--teks-gelap);
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--biru-utama);
            box-shadow: 0 0 0 3px rgba(26,86,219,0.12);
        }

        .btn-submit {
            background: var(--biru-utama);
            color: var(--putih);
            border: none;
            border-radius: 30px;
            padding: 13px 40px;
            font-weight: 700;
            font-size: 0.95rem;
            width: 100%;
            transition: all 0.2s;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: var(--biru-gelap);
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(26,86,219,0.3);
        }

        /* ============================================================
           SECTION: ALUMNI
        ============================================================ */
        #alumni { padding: 80px 0; background: var(--putih); }

        .card-alumni {
            display: flex;
            align-items: center;
            gap: 14px;
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            padding: 16px 20px;
            background: var(--putih);
            box-shadow: var(--shadow-card);
            transition: all 0.25s;
        }

        .card-alumni:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
            border-color: var(--biru-utama);
        }

        .card-alumni img {
            width: 54px; height: 54px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--biru-muda);
            flex-shrink: 0;
        }

        .card-alumni .nama { font-weight: 700; font-size: 0.9rem; margin-bottom: 2px; }
        .card-alumni .angkatan { font-size: 0.75rem; color: var(--biru-utama); font-weight: 600; margin-bottom: 2px; }
        .card-alumni .pekerjaan { font-size: 0.8rem; color: var(--teks-abu); }

        /* ============================================================
           SECTION: KEGIATAN
        ============================================================ */
        #kegiatan { padding: 80px 0; background: var(--bg-abu); }

        .card-kegiatan {
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            padding: 22px 24px;
            background: var(--putih);
            box-shadow: var(--shadow-card);
            transition: all 0.25s;
        }

        .card-kegiatan:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .badge-berlangsung {
            background: #d1fae5;
            color: #065f46;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .badge-berlangsung::before {
            content: '';
            width: 7px; height: 7px;
            background: #10b981;
            border-radius: 50%;
            animation: blink 1.2s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.3; }
        }

        .progress { height: 6px; border-radius: 10px; background: var(--biru-muda); }
        .progress-bar { background: var(--biru-utama); border-radius: 10px; }

        /* ============================================================
           SECTION: BERITA
        ============================================================ */
        #berita { padding: 80px 0; background: var(--putih); }

        .card-berita {
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            overflow: hidden;
            background: var(--putih);
            box-shadow: var(--shadow-card);
            transition: all 0.25s;
            height: 100%;
        }

        .card-berita:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .card-berita .berita-img {
            height: 130px;
            background: linear-gradient(135deg, var(--biru-utama), #3b82f6);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.25);
            font-size: 3rem;
        }

        .card-berita .berita-body { padding: 20px; }

        .card-berita .tanggal {
            font-size: 0.78rem;
            color: var(--teks-abu);
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 8px;
        }

        .card-berita h5 {
            font-weight: 700;
            font-size: 0.95rem;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .card-berita p { font-size: 0.85rem; color: var(--teks-abu); line-height: 1.6; }

        /* ============================================================
           SECTION: KONTAK HUMAS
        ============================================================ */
        #kontak { padding: 80px 0; background: var(--bg-abu); }

        .card-humas {
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            padding: 28px;
            text-align: center;
            background: var(--putih);
            box-shadow: var(--shadow-card);
            transition: all 0.25s;
        }

        .card-humas:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
            border-color: var(--biru-utama);
        }

        .card-humas img {
            width: 72px; height: 72px;
            border-radius: 50%;
            border: 3px solid var(--biru-muda);
            margin-bottom: 14px;
        }

        .card-humas .nama { font-weight: 700; font-size: 1rem; margin-bottom: 3px; }
        .card-humas .peran { font-size: 0.82rem; color: var(--teks-abu); margin-bottom: 18px; }

        .btn-wa {
            background: #25D366;
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 9px 22px;
            font-weight: 700;
            font-size: 0.85rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            transition: all 0.2s;
        }

        .btn-wa:hover {
            background: #1ebe5d;
            color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 4px 14px rgba(37,211,102,0.3);
        }

        /* ============================================================
           SECTION: SOSIAL MEDIA
        ============================================================ */
        #sosmed { padding: 60px 0; background: var(--putih); }

        .card-sosmed {
            border: 1.5px solid #e8f0fe;
            border-radius: var(--radius-card);
            padding: 22px 24px;
            display: flex;
            align-items: center;
            gap: 16px;
            background: var(--putih);
            box-shadow: var(--shadow-card);
            text-decoration: none;
            color: var(--teks-gelap);
            transition: all 0.25s;
        }

        .card-sosmed:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
            color: var(--teks-gelap);
        }

        .sosmed-icon {
            width: 48px; height: 48px;
            border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .sosmed-platform { font-weight: 700; font-size: 0.95rem; margin-bottom: 2px; }
        .sosmed-akun { font-size: 0.82rem; color: var(--teks-abu); }

        /* ============================================================
           FOOTER
        ============================================================ */
        footer {
            background: #0a1f5c;
            color: rgba(255,255,255,0.85);
            padding: 40px 0 28px;
        }

        footer .footer-brand {
            font-weight: 800;
            font-size: 1.2rem;
            color: #fff;
            margin-bottom: 8px;
        }

        footer p { font-size: 0.85rem; color: rgba(255,255,255,0.6); }
        footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        footer a:hover { color: #fff; }
        footer .divider { border-color: rgba(255,255,255,0.1); margin: 24px 0 18px; }

        /* ============================================================
           NOTIFIKASI ALERT
        ============================================================ */
        .alert-notif {
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            border: none;
        }

        /* Responsive tweaks */
        @media (max-width: 768px) {
            .hero-section { padding: 70px 0 60px; }
            .form-card { padding: 24px 20px; }
            .hero-stat { padding: 10px 14px; }
        }
    </style>
</head>
<body>

<!-- ============================================================
     NAVBAR
============================================================ -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo / Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="#home">
            <div style="background:var(--biru-utama);color:#fff;width:34px;height:34px;border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:1rem;">
                <i class="bi bi-graph-up-arrow"></i>
            </div>
            HMSD<span class="brand-dot">.</span>
        </a>

        <!-- Tombol hamburger untuk mobile -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu navigasi -->
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#struktural">Struktural</a></li>
                <li class="nav-item"><a class="nav-link" href="#event">Event</a></li>
                <li class="nav-item"><a class="nav-link" href="#alumni">Alumni</a></li>
                <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan</a></li>
                <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                <li class="nav-item ms-lg-2">
                    <a class="nav-link btn-daftar-nav" href="#pendaftaran">
                        <i class="bi bi-pencil-square me-1"></i>Daftar Event
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- ============================================================
     HERO SECTION
============================================================ -->
<section class="hero-section" id="home">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="hero-badge"><i class="bi bi-stars me-1"></i>Organisasi Mahasiswa Aktif 2024/2025</span>

                <h1>Himpunan Mahasiswa<br><span style="color:#93c5fd;">Sains Data</span></h1>

                <p>
                    Wadah pengembangan diri, kolaborasi, dan inovasi mahasiswa Sains Data.
                    Bersama kami, tingkatkan kompetensi data, bangun jaringan, dan berkontribusi nyata.
                </p>

                <div class="d-flex flex-wrap gap-3">
                    <a href="#pendaftaran" class="btn-biru" style="background:#fff;color:var(--biru-utama);">
                        <i class="bi bi-pencil-square me-2"></i>Daftar Event Sekarang
                    </a>
                    <a href="#event" class="btn-hero-outline">
                        Lihat Event <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>

                <!-- Statistik singkat -->
                <div class="row g-3 mt-4">
                    <div class="col-auto">
                        <div class="hero-stat">
                            <div class="angka">250+</div>
                            <div class="label">Anggota Aktif</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="hero-stat">
                            <div class="angka">40+</div>
                            <div class="label">Event Per Tahun</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="hero-stat">
                            <div class="angka">120+</div>
                            <div class="label">Alumni</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-flex justify-content-center">
                <!-- Ilustrasi dekoratif -->
                <div style="width:320px;height:320px;border-radius:50%;background:rgba(255,255,255,0.1);border:2px dashed rgba(255,255,255,0.3);display:flex;align-items:center;justify-content:center;">
                    <div style="width:240px;height:240px;border-radius:50%;background:rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;font-size:6rem;color:rgba(255,255,255,0.6);">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     NOTIFIKASI (muncul jika ada redirect dari form)
============================================================ -->
<?php if (!empty($status)) : ?>
<div class="container mt-4">
    <?php if ($status === 'sukses') : ?>
        <div class="alert alert-success alert-notif alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
            <i class="bi bi-check-circle-fill fs-5"></i>
            <span><?= $pesan ?></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php elseif ($status === 'error') : ?>
        <div class="alert alert-danger alert-notif alert-dismissible fade show d-flex align-items-center gap-2" role="alert">
            <i class="bi bi-exclamation-triangle-fill fs-5"></i>
            <span><?= $pesan ?></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>


<!-- ============================================================
     SECTION: STRUKTURAL ORGANISASI
============================================================ -->
<section id="struktural">
    <div class="container">
        <!-- Judul section -->
        <div class="section-header text-center">
            <p class="section-label"><i class="bi bi-people-fill me-1"></i>Kepengurusan</p>
            <h2 class="section-title">Struktural <span>Organisasi</span></h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-desc mx-auto">Digerakkan oleh mahasiswa berdedikasi yang berkomitmen memajukan Sains Data di kampus.</p>
        </div>

        <!-- Grid kartu pengurus -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($pengurus as $p) : ?>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="card-pengurus">
                    <img src="<?= htmlspecialchars($p['foto']) ?>" alt="Foto <?= htmlspecialchars($p['nama']) ?>">
                    <div class="nama"><?= htmlspecialchars($p['nama']) ?></div>
                    <div class="jabatan"><?= htmlspecialchars($p['jabatan']) ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================================
     SECTION: EVENT / WORKSHOP
============================================================ -->
<section id="event">
    <div class="container">
        <div class="section-header">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <p class="section-label"><i class="bi bi-calendar-event me-1"></i>Agenda</p>
                    <h2 class="section-title">Event & <span>Workshop</span></h2>
                    <div class="section-divider"></div>
                    <p class="section-desc">Ikuti berbagai kegiatan bermanfaat untuk mengembangkan skill Sains Data kamu.</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="#pendaftaran" class="btn-biru">
                        <i class="bi bi-pencil-square me-1"></i>Daftar Event
                    </a>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($events as $e) : ?>
            <div class="col-md-6 col-lg-3">
                <div class="card-event">
                    <div class="event-header">
                        <!-- Badge tipe event -->
                        <span class="badge bg-<?= htmlspecialchars($e['warna']) ?> mb-2">
                            <?= htmlspecialchars($e['badge']) ?>
                        </span>
                        <h5><?= htmlspecialchars($e['nama']) ?></h5>
                    </div>
                    <div class="event-body">
                        <div class="event-info">
                            <i class="bi bi-calendar3"></i>
                            <span><?= htmlspecialchars($e['tanggal']) ?></span>
                        </div>
                        <div class="event-info mb-4">
                            <i class="bi bi-geo-alt"></i>
                            <span><?= htmlspecialchars($e['tempat']) ?></span>
                        </div>
                        <a href="#pendaftaran" class="btn-outline-biru w-100 text-center">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================================
     SECTION: FORM PENDAFTARAN EVENT
============================================================ -->
<section id="pendaftaran">
    <div class="container">
        <div class="section-header text-center">
            <p class="section-label"><i class="bi bi-pencil-square me-1"></i>Registrasi</p>
            <h2 class="section-title">Formulir <span>Pendaftaran Event</span></h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-desc mx-auto">Isi formulir di bawah ini untuk mendaftar event yang kamu minati.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="form-card">

                    <!-- Form dikirim ke simpan_pendaftaran.php menggunakan method POST -->
                    <form action="simpan_pendaftaran.php" method="POST">

                        <div class="row g-3">
                            <!-- Nama Lengkap -->
                            <div class="col-12">
                                <label class="form-label" for="nama_lengkap">
                                    <i class="bi bi-person me-1 text-primary"></i>Nama Lengkap
                                </label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                       placeholder="Masukkan nama lengkap kamu" required>
                            </div>

                            <!-- NIM & Prodi -->
                            <div class="col-md-6">
                                <label class="form-label" for="nim">
                                    <i class="bi bi-card-text me-1 text-primary"></i>NIM
                                </label>
                                <input type="text" class="form-control" id="nim" name="nim"
                                       placeholder="Contoh: 2023123456" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="prodi">
                                    <i class="bi bi-mortarboard me-1 text-primary"></i>Program Studi
                                </label>
                                <select class="form-select" id="prodi" name="prodi" required>
                                    <option value="" disabled selected>Pilih Program Studi</option>
                                    <option value="Sains Data">Sains Data</option>
                                    <option value="Statistika">Statistika</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <!-- Email & No HP -->
                            <div class="col-md-6">
                                <label class="form-label" for="email">
                                    <i class="bi bi-envelope me-1 text-primary"></i>Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="email@contoh.com" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="no_hp">
                                    <i class="bi bi-phone me-1 text-primary"></i>Nomor HP / WhatsApp
                                </label>
                                <input type="tel" class="form-control" id="no_hp" name="no_hp"
                                       placeholder="08xxxxxxxxxx" required>
                            </div>

                            <!-- Pilih Event -->
                            <div class="col-12">
                                <label class="form-label" for="event_dipilih">
                                    <i class="bi bi-calendar-check me-1 text-primary"></i>Pilih Event
                                </label>
                                <select class="form-select" id="event_dipilih" name="event_dipilih" required>
                                    <option value="" disabled selected>Pilih event yang ingin diikuti</option>
                                    <?php foreach ($events as $e) : ?>
                                        <option value="<?= htmlspecialchars($e['nama']) ?>">
                                            <?= htmlspecialchars($e['nama']) ?> — <?= htmlspecialchars($e['tanggal']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn-submit">
                                    <i class="bi bi-send-fill me-2"></i>Kirim Pendaftaran
                                </button>
                                <p class="text-center text-muted mt-3 mb-0" style="font-size:0.8rem;">
                                    <i class="bi bi-shield-check text-primary me-1"></i>
                                    Data kamu aman dan tidak akan disebarkan ke pihak ketiga.
                                </p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================================
     SECTION: ALUMNI
============================================================ -->
<section id="alumni">
    <div class="container">
        <div class="section-header">
            <p class="section-label"><i class="bi bi-award me-1"></i>Alumni</p>
            <h2 class="section-title">Mereka yang <span>Mengawali dari Sini</span></h2>
            <div class="section-divider"></div>
            <p class="section-desc">Alumni HMSD kini berkarier di berbagai perusahaan dan instansi bergengsi.</p>
        </div>

        <div class="row g-3">
            <?php foreach ($alumni as $a) : ?>
            <div class="col-md-6 col-lg-4">
                <div class="card-alumni">
                    <img src="<?= htmlspecialchars($a['foto']) ?>" alt="Foto <?= htmlspecialchars($a['nama']) ?>">
                    <div>
                        <div class="nama"><?= htmlspecialchars($a['nama']) ?></div>
                        <div class="angkatan"><?= htmlspecialchars($a['angkatan']) ?></div>
                        <div class="pekerjaan">
                            <i class="bi bi-briefcase me-1"></i><?= htmlspecialchars($a['pekerjaan']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================================
     SECTION: KEGIATAN YANG SEDANG BERLANGSUNG
============================================================ -->
<section id="kegiatan">
    <div class="container">
        <div class="section-header">
            <p class="section-label"><i class="bi bi-activity me-1"></i>Kegiatan</p>
            <h2 class="section-title">Kegiatan yang Sedang <span>Berlangsung</span></h2>
            <div class="section-divider"></div>
            <p class="section-desc">Program aktif yang sedang berjalan di HMSD saat ini.</p>
        </div>

        <div class="row g-4">
            <?php foreach ($kegiatan as $k) : ?>
            <div class="col-md-6">
                <div class="card-kegiatan">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h6 class="fw-bold mb-1"><?= htmlspecialchars($k['judul']) ?></h6>
                            <span class="text-muted" style="font-size:0.8rem;">
                                <i class="bi bi-tag me-1"></i><?= htmlspecialchars($k['divisi']) ?>
                            </span>
                        </div>
                        <span class="badge-berlangsung ms-3">Berlangsung</span>
                    </div>

                    <!-- Progress bar kemajuan kegiatan -->
                    <div class="d-flex justify-content-between mb-1" style="font-size:0.78rem;color:var(--teks-abu);">
                        <span>Progres</span>
                        <span class="fw-semibold text-primary"><?= $k['progres'] ?>%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" style="width: <?= $k['progres'] ?>%"></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================================
     SECTION: BERITA SINGKAT
============================================================ -->
<section id="berita">
    <div class="container">
        <div class="section-header">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <p class="section-label"><i class="bi bi-newspaper me-1"></i>Berita</p>
                    <h2 class="section-title">Berita & <span>Informasi Terkini</span></h2>
                    <div class="section-divider"></div>
                    <p class="section-desc">Update terbaru seputar kegiatan dan pencapaian HMSD.</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <?php foreach ($berita as $b) : ?>
            <div class="col-md-6 col-lg-3">
                <div class="card-berita">
                    <!-- Ilustrasi gambar berita (placeholder) -->
                    <div class="berita-img">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <div class="berita-body">
                        <span class="badge bg-<?= htmlspecialchars($b['warna']) ?> mb-2">
                            <?= htmlspecialchars($b['badge']) ?>
                        </span>
                        <div class="tanggal">
                            <i class="bi bi-clock"></i><?= htmlspecialchars($b['tanggal']) ?>
                        </div>
                        <h5><?= htmlspecialchars($b['judul']) ?></h5>
                        <p><?= htmlspecialchars($b['isi']) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================================
     SECTION: KONTAK HUMAS
============================================================ -->
<section id="kontak">
    <div class="container">
        <div class="section-header text-center">
            <p class="section-label"><i class="bi bi-chat-dots me-1"></i>Hubungi Kami</p>
            <h2 class="section-title">Kontak <span>Humas</span></h2>
            <div class="section-divider mx-auto"></div>
            <p class="section-desc mx-auto">Punya pertanyaan atau butuh informasi lebih lanjut? Hubungi tim humas kami.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($humas as $h) : ?>
            <div class="col-md-5 col-lg-4">
                <div class="card-humas">
                    <img src="<?= htmlspecialchars($h['foto']) ?>" alt="Foto <?= htmlspecialchars($h['nama']) ?>">
                    <div class="nama"><?= htmlspecialchars($h['nama']) ?></div>
                    <div class="peran"><?= htmlspecialchars($h['peran']) ?></div>
                    <!-- Tombol WhatsApp dengan format wa.me -->
                    <a href="https://wa.me/<?= htmlspecialchars($h['wa']) ?>?text=Halo+HMSD,+saya+ingin+bertanya..." 
                       class="btn-wa" target="_blank" rel="noopener">
                        <i class="bi bi-whatsapp"></i>Chat WhatsApp
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================================
     SECTION: SOSIAL MEDIA
============================================================ -->
<section id="sosmed">
    <div class="container">
        <div class="section-header text-center">
            <p class="section-label"><i class="bi bi-share me-1"></i>Ikuti Kami</p>
            <h2 class="section-title">Temukan Kami di <span>Sosial Media</span></h2>
            <div class="section-divider mx-auto"></div>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($sosmed as $s) : ?>
            <div class="col-md-6 col-lg-3">
                <!-- Kartu sosmed bisa diklik dan menuju ke link platform -->
                <a href="<?= htmlspecialchars($s['link']) ?>" class="card-sosmed" target="_blank" rel="noopener">
                    <div class="sosmed-icon" style="background:<?= htmlspecialchars($s['bg']) ?>; color:<?= htmlspecialchars($s['warna']) ?>">
                        <i class="<?= htmlspecialchars($s['ikon']) ?>"></i>
                    </div>
                    <div>
                        <div class="sosmed-platform"><?= htmlspecialchars($s['platform']) ?></div>
                        <div class="sosmed-akun"><?= htmlspecialchars($s['akun']) ?></div>
                    </div>
                    <i class="bi bi-arrow-up-right ms-auto text-muted"></i>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ============================================================
     FOOTER
============================================================ -->
<footer>
    <div class="container">
        <div class="row align-items-start g-4">
            <!-- Kiri: Identitas himpunan -->
            <div class="col-md-5">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <div style="background:var(--biru-utama);color:#fff;width:32px;height:32px;border-radius:8px;display:flex;align-items:center;justify-content:center;">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <div class="footer-brand">HIMASATA.UNM</div>
                </div>
                <p class="mb-0">Himpunan Mahasiswa Sains Data<br>Universitas — Aktif &amp; Berinovasi</p>
            </div>

            <!-- Tengah: Link cepat -->
            <div class="col-md-3">
                <h6 class="text-white fw-bold mb-3">Navigasi</h6>
                <ul class="list-unstyled mb-0" style="font-size:0.85rem;">
                    <li class="mb-1"><a href="#home">Home</a></li>
                    <li class="mb-1"><a href="#struktural">Struktural</a></li>
                    <li class="mb-1"><a href="#event">Event</a></li>
                    <li class="mb-1"><a href="#alumni">Alumni</a></li>
                    <li class="mb-0"><a href="#pendaftaran">Daftar Event</a></li>
                </ul>
            </div>

            <!-- Kanan: Kontak singkat -->
            <div class="col-md-4">
                <h6 class="text-white fw-bold mb-3">Kontak</h6>
                <p class="mb-1" style="font-size:0.85rem;">
                    <i class="bi bi-envelope me-2" style="color:var(--biru-utama)"></i>
                    HIMASATA.UNM
                </p>
                <p class="mb-0" style="font-size:0.85rem;">
                    <i class="bi bi-instagram me-2" style="color:#E1306C"></i>
                    @HIMASATA.UNM
                </p>
            </div>
        </div>

        <hr class="divider">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <p class="mb-0" style="font-size:0.82rem;">
                &copy; <?= date('Y') ?> Himpunan Mahasiswa Sains Data. All rights reserved.
            </p>
            <p class="mb-0" style="font-size:0.82rem;">
                Dibuat dengan <span style="color:#ef4444;">♥</span> oleh Tim HMSD
            </p>
        </div>
    </div>
</footer>


<!-- Bootstrap 5 JS Bundle (termasuk Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
// ---- Auto-scroll ke form pendaftaran jika URL mengandung #pendaftaran ----
document.addEventListener('DOMContentLoaded', function () {
    // Jika ada notifikasi (dari redirect form), scroll ke bagian atas
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('status')) {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
});

// ---- Highlight nav link sesuai section yang sedang dilihat (Intersection Observer) ----
const sections = document.querySelectorAll('section[id], .hero-section[id]');
const navLinks = document.querySelectorAll('.nav-link[href^="#"]');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            navLinks.forEach(link => {
                link.style.color = '';
                link.style.background = '';
                if (link.getAttribute('href') === '#' + entry.target.id) {
                    link.style.color = 'var(--biru-utama)';
                    link.style.background = 'var(--biru-muda)';
                }
            });
        }
    });
}, { threshold: 0.4 });

sections.forEach(s => observer.observe(s));
</script>

</body>
</html>

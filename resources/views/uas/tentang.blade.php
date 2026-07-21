@extends('layouts.uas')

@section('title', 'Tentang Aplikasi')
@section('page-title', 'Tentang Aplikasi')

@section('styles')
<style>
    .about-wrapper {
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }
    .about-card {
        background: white;
        width: 100%;
        max-width: 700px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        overflow: hidden;
        border-top: 6px solid #8e44ad;
    }
    .about-header {
        background-color: #fcfcfc;
        padding: 40px;
        text-align: center;
        border-bottom: 1px solid #eee;
    }
    .app-icon {
        font-size: 60px;
        color: #8e44ad;
        margin-bottom: 15px;
    }
    .about-header h2 {
        margin: 0;
        color: #2c3e50;
        font-size: 28px;
    }
    .about-header p {
        margin: 10px 0 0 0;
        color: #7f8c8d;
        font-size: 16px;
    }
    .about-body {
        padding: 40px;
        line-height: 1.8;
        color: #34495e;
        font-size: 16px;
    }
    .about-body h3 {
        color: #8e44ad;
        margin-top: 0;
        margin-bottom: 15px;
    }
    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .feature-list li {
        padding-left: 30px;
        position: relative;
        margin-bottom: 15px;
    }
    .feature-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: #2ecc71;
        font-weight: bold;
        font-size: 18px;
    }
    .about-footer {
        background-color: #f9f9f9;
        padding: 20px 40px;
        text-align: center;
        font-size: 14px;
        color: #95a5a6;
        border-top: 1px solid #eee;
    }
</style>
@endsection

@section('content')
<div class="about-wrapper">
    <div class="about-card">
        <div class="about-header">
            <div class="app-icon">📚</div>
            <h2>Aplikasi Koleksi Buku</h2>
            <p>Sistem Manajemen Perpustakaan Digital</p>
        </div>

        <div class="about-body">
            <h3>Tentang Aplikasi Ini</h3>
            <p>
                Aplikasi Koleksi Buku ini dirancang khusus untuk mempermudah pengelolaan data perpustakaan digital secara sistematis dan efisien.
                Dikembangkan sebagai bagian dari Project Pemrograman Web (UAS), aplikasi ini mengedepankan desain antarmuka yang bersih (<em>clean design</em>) dan pengalaman pengguna (<em>user experience</em>) yang intuitif.
            </p>

            <h3 style="margin-top: 35px;">Fitur Utama</h3>
            <ul class="feature-list">
                <li><strong>Dashboard Interaktif</strong>: Ringkasan visual yang indah untuk menyambut admin aplikasi.</li>
                <li><strong>Pendataan Buku Dinamis</strong>: Tambahkan judul, penulis, penerbit, tahun, serta kategori buku dengan form yang rapi.</li>
                <li><strong>Manajemen Data Terintegrasi (CRUD)</strong>: Memungkinkan Anda untuk membaca data langsung dari database, serta melakukan pengeditan atau penghapusan data secara <em>real-time</em>.</li>
                <li><strong>Desain Responsif &amp; Premium</strong>: Menggunakan palet warna modern yang memanjakan mata dan membuat proses administrasi tidak membosankan.</li>
            </ul>
        </div>

        <div class="about-footer">
            Dikembangkan oleh <strong>Achmad Alfin Muzakky (B 2024 - 1412240003)</strong> <br>
            &copy; 2026 Universitas PGRI Ronggolawe Tuban
        </div>
    </div>
</div>
@endsection

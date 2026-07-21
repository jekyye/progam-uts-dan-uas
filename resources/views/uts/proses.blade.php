@extends('layouts.uts')

@section('title', 'Hasil Pendaftaran')
@section('page-title', 'Hasil Pendaftaran')

@section('styles')
<style>
    .result-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    .success-banner {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        padding: 18px;
        border-radius: 12px;
        margin-bottom: 25px;
        font-weight: 600;
        text-align: center;
        font-size: 16px;
    }
    .result-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
    }
    .result-table {
        width: 100%;
        border-collapse: collapse;
    }
    .result-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #f0f0f0;
        font-size: 15px;
    }
    .result-table tr:hover {
        background: #f8f9fa;
    }
    .result-table td:first-child {
        font-weight: 600;
        color: #555;
        width: 40%;
    }
    .btn-group {
        display: flex;
        justify-content: center;
        gap: 12px;
        margin-top: 25px;
    }
    .btn {
        padding: 10px 24px;
        border-radius: 8px;
        text-decoration: none;
        color: white;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
    }
    .btn-primary { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
    .btn-success { background: linear-gradient(135deg, #22c55e, #16a34a); }
    .btn:hover { transform: translateY(-2px); }
</style>
@endsection

@section('content')
<div class="result-container">
    <div class="success-banner">✅ Data berhasil disimpan ke database!</div>
    <h2>Data Pendaftaran</h2>
    <table class="result-table">
        <tr><td>Nama</td><td>{{ $pendaftaran->nama }}</td></tr>
        <tr><td>Tempat Lahir</td><td>{{ $pendaftaran->tempat_lahir }}</td></tr>
        <tr><td>Tanggal Lahir</td><td>{{ $pendaftaran->tanggal_lahir->format('d-m-Y') }}</td></tr>
        <tr><td>Jenis Kelamin</td><td>{{ $pendaftaran->jenis_kelamin }}</td></tr>
        <tr><td>Alamat</td><td>{{ $pendaftaran->alamat }}</td></tr>
        <tr><td>Sekolah Asal</td><td>{{ $pendaftaran->sekolah_asal }}</td></tr>
        <tr><td>Nilai Matematika</td><td>{{ $pendaftaran->nilai_mtk }}</td></tr>
        <tr><td>Nilai Bahasa Inggris</td><td>{{ $pendaftaran->nilai_bing }}</td></tr>
        <tr><td>Nilai Bahasa Indonesia</td><td>{{ $pendaftaran->nilai_bindo }}</td></tr>
        <tr><td>Jurusan Pilihan 1</td><td>{{ $pendaftaran->jurusan1 }}</td></tr>
        <tr><td>Jurusan Pilihan 2</td><td>{{ $pendaftaran->jurusan2 }}</td></tr>
        <tr><td>Alasan Masuk</td><td>{{ $pendaftaran->alasan }}</td></tr>
    </table>
    <div class="btn-group">
        <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">← Kembali ke Form</a>
        <a href="{{ route('pendaftaran.index') }}" class="btn btn-success">Lihat Data Mahasiswa</a>
    </div>
</div>
@endsection

@extends('layouts.uts')

@section('title', 'Edit Data Mahasiswa')
@section('page-title', 'Edit Data')

@section('styles')
<style>
    .form-container {
        max-width: 700px;
        margin: 0 auto;
        background: white;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border-top: 4px solid #f59e0b;
    }
    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #2c3e50;
        font-size: 22px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #34495e;
        font-size: 14px;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1.5px solid #e0e0e0;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 15px;
        font-family: 'Inter', sans-serif;
        transition: border-color 0.3s;
    }
    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #f59e0b;
        box-shadow: 0 0 0 3px rgba(245,158,11,0.1);
    }
    .btn-submit {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        color: white;
        border: none;
        padding: 14px;
        width: 100%;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 10px;
    }
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(245,158,11,0.3);
    }
    .btn-back {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #666;
        text-decoration: none;
        font-size: 14px;
    }
    .btn-back:hover { color: #333; }
    .error-list { color: #e74c3c; margin-bottom: 15px; padding: 15px; background: #fef2f2; border-radius: 8px; border: 1px solid #fecaca; }
    .error-list li { margin-bottom: 5px; font-size: 14px; }
</style>
@endsection

@section('content')
<div class="form-container">
    <h2>✏️ Edit Data Mahasiswa</h2>

    @if($errors->any())
        <div class="error-list">
            <ul>
                @foreach($errors->all() as $error)
                    <li>❌ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $pendaftaran->nama) }}" required>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $pendaftaran->tempat_lahir) }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pendaftaran->tanggal_lahir ? $pendaftaran->tanggal_lahir->format('Y-m-d') : '') }}" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="Laki-laki" {{ old('jenis_kelamin', $pendaftaran->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $pendaftaran->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Sekolah Asal</label>
            <select name="sekolah_asal">
                <option value="SMA" {{ old('sekolah_asal', $pendaftaran->sekolah_asal) == 'SMA' ? 'selected' : '' }}>SMA</option>
                <option value="MA" {{ old('sekolah_asal', $pendaftaran->sekolah_asal) == 'MA' ? 'selected' : '' }}>MA</option>
                <option value="SMK" {{ old('sekolah_asal', $pendaftaran->sekolah_asal) == 'SMK' ? 'selected' : '' }}>SMK</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jurusan 1</label>
            <select name="jurusan1">
                <option value="TEKNIK INFORMATIKA" {{ old('jurusan1', $pendaftaran->jurusan1) == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                <option value="SISTEM INFORMASI" {{ old('jurusan1', $pendaftaran->jurusan1) == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jurusan 2</label>
            <select name="jurusan2">
                <option value="TEKNIK INFORMATIKA" {{ old('jurusan2', $pendaftaran->jurusan2) == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                <option value="SISTEM INFORMASI" {{ old('jurusan2', $pendaftaran->jurusan2) == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
            </select>
        </div>
        <button type="submit" class="btn-submit">💾 Update Data</button>
        <a href="{{ route('pendaftaran.index') }}" class="btn-back">← Kembali ke Data Mahasiswa</a>
    </form>
</div>
@endsection

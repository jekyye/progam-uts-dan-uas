@extends('layouts.uas')

@section('title', 'Edit Buku')
@section('page-title', 'Edit Buku')

@section('styles')
<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background: white;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-top: 5px solid #f39c12;
    }
    .form-title {
        margin: 0 0 30px 0;
        font-size: 24px;
        color: #2c3e50;
        text-align: center;
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
    .form-group select {
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
    .form-group select:focus {
        outline: none;
        border-color: #f39c12;
        box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.1);
    }
    .btn-submit {
        background: linear-gradient(135deg, #f39c12, #e67e22);
        color: white;
        border: none;
        padding: 15px;
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
        box-shadow: 0 8px 20px rgba(243,156,18,0.3);
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
    <h2 class="form-title">✏️ Edit Data Buku</h2>

    @if($errors->any())
        <div class="error-list">
            <ul>
                @foreach($errors->all() as $error)
                    <li>❌ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}" required>
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis" value="{{ old('penulis', $buku->penulis) }}" required>
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" required>
        </div>
        <div class="form-group">
            <label>Tahun Terbit</label>
            <input type="number" name="tahun" value="{{ old('tahun', $buku->tahun) }}" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori">
                <option value="Pemrograman" {{ old('kategori', $buku->kategori) == 'Pemrograman' ? 'selected' : '' }}>Pemrograman</option>
                <option value="Novel" {{ old('kategori', $buku->kategori) == 'Novel' ? 'selected' : '' }}>Novel</option>
                <option value="Sejarah" {{ old('kategori', $buku->kategori) == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
                <option value="Sains" {{ old('kategori', $buku->kategori) == 'Sains' ? 'selected' : '' }}>Sains</option>
            </select>
        </div>
        <button type="submit" class="btn-submit">💾 Update Data Buku</button>
        <a href="{{ route('buku.index') }}" class="btn-back">← Kembali ke Data Buku</a>
    </form>
</div>
@endsection

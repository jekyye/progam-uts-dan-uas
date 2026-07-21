@extends('layouts.uts')

@section('title', 'Formulir Pendaftaran UNIROW')
@section('page-title', 'Pendaftaran')

@section('styles')
<style>
    .form-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border-top: 4px solid #3b82f6;
    }
    .form-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #2c3e50;
        font-size: 22px;
    }
    .form-table { width: 100%; }
    .form-table td { padding: 10px; vertical-align: top; }
    .form-table input[type=text],
    .form-table input[type=date],
    .form-table input[type=number],
    .form-table textarea,
    .form-table select {
        width: 100%;
        padding: 10px 14px;
        border: 1.5px solid #e0e0e0;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 14px;
        font-family: 'Inter', sans-serif;
        transition: border-color 0.3s, box-shadow 0.3s;
    }
    .form-table input:focus,
    .form-table textarea:focus,
    .form-table select:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59,130,246,0.1);
    }
    .form-table textarea { resize: none; }
    .radio-label {
        display: inline-flex;
        align-items: center;
        margin-right: 15px;
        cursor: pointer;
        font-size: 14px;
    }
    .radio-label input { margin-right: 6px; }
    .section-title {
        font-weight: 700;
        color: #3b82f6;
        font-size: 15px;
        padding-top: 15px;
    }
    .btn-group {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 10px;
    }
    .btn {
        padding: 10px 24px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        color: white;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
    }
    .btn-primary { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
    .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(59,130,246,0.3); }
    .btn-danger { background: linear-gradient(135deg, #ef4444, #dc2626); }
    .btn-danger:hover { transform: translateY(-2px); }
    .btn-success { background: linear-gradient(135deg, #22c55e, #16a34a); text-decoration: none; display: inline-block; }
    .btn-success:hover { transform: translateY(-2px); }
    .error-list { color: #e74c3c; margin-bottom: 15px; padding: 15px; background: #fef2f2; border-radius: 8px; border: 1px solid #fecaca; }
    .error-list li { margin-bottom: 5px; font-size: 14px; }
</style>
@endsection

@section('content')
<div class="form-container">
    <h2>Formulir Pendaftaran UNIROW</h2>

    @if($errors->any())
        <div class="error-list">
            <ul>
                @foreach($errors->all() as $error)
                    <li>❌ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf
        <table class="form-table">
            <tr>
                <td width="35%">Nama</td>
                <td width="5%">:</td>
                <td><input type="text" name="nama" value="{{ old('nama') }}"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <label class="radio-label"><input type="radio" name="jenis_kelamin" value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}> Laki-laki</label>
                    <label class="radio-label"><input type="radio" name="jenis_kelamin" value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}> Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" rows="3">{{ old('alamat') }}</textarea></td>
            </tr>
            <tr>
                <td>Sekolah Asal</td>
                <td>:</td>
                <td>
                    <label class="radio-label"><input type="radio" name="sekolah_asal" value="SMA" {{ old('sekolah_asal') == 'SMA' ? 'checked' : '' }}> SMA</label>
                    <label class="radio-label"><input type="radio" name="sekolah_asal" value="MA" {{ old('sekolah_asal') == 'MA' ? 'checked' : '' }}> MA</label>
                    <label class="radio-label"><input type="radio" name="sekolah_asal" value="SMK" {{ old('sekolah_asal') == 'SMK' ? 'checked' : '' }}> SMK</label>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="section-title">📊 Nilai UAN</td>
            </tr>
            <tr>
                <td>Matematika</td>
                <td>:</td>
                <td><input type="number" step="0.01" name="nilai_mtk" value="{{ old('nilai_mtk') }}"></td>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td>:</td>
                <td><input type="number" step="0.01" name="nilai_bing" value="{{ old('nilai_bing') }}"></td>
            </tr>
            <tr>
                <td>Bahasa Indonesia</td>
                <td>:</td>
                <td><input type="number" step="0.01" name="nilai_bindo" value="{{ old('nilai_bindo') }}"></td>
            </tr>
            <tr>
                <td colspan="3" class="section-title">🎯 Jurusan Dipilih</td>
            </tr>
            <tr>
                <td>Pilihan 1</td>
                <td>:</td>
                <td>
                    <select name="jurusan1">
                        <option {{ old('jurusan1') == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                        <option {{ old('jurusan1') == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pilihan 2</td>
                <td>:</td>
                <td>
                    <select name="jurusan2">
                        <option {{ old('jurusan2') == 'TEKNIK INFORMATIKA' ? 'selected' : '' }}>TEKNIK INFORMATIKA</option>
                        <option {{ old('jurusan2') == 'SISTEM INFORMASI' ? 'selected' : '' }}>SISTEM INFORMASI</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alasan Masuk</td>
                <td>:</td>
                <td><textarea name="alasan" rows="5">{{ old('alasan') }}</textarea></td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">📤 Daftar</button>
                        <button type="reset" class="btn btn-danger">🔄 Reset</button>
                        <a href="{{ route('pendaftaran.index') }}" class="btn btn-success">👥 Lihat Data</a>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection

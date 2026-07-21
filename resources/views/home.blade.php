@extends('layouts.app')

@section('title', 'Project Pemrograman Web')

@section('styles')
<style>
    body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        animation: bgShift 10s ease-in-out infinite alternate;
    }
    @keyframes bgShift {
        0% { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        50% { background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%); }
        100% { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
    }
    .card {
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(10px);
        width: 520px;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        overflow: hidden;
        animation: slideUp 0.8s ease-out;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    @keyframes slideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .card-header {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
        text-align: center;
        padding: 35px 20px;
        position: relative;
        overflow: hidden;
    }
    .card-header::before {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        top: -80px;
        right: -80px;
    }
    .card-header h1 {
        font-size: 26px;
        font-weight: 800;
        letter-spacing: -0.5px;
        position: relative;
        z-index: 1;
    }
    .card-header p {
        margin: 10px 0 0 0;
        font-size: 14px;
        opacity: 0.9;
        position: relative;
        z-index: 1;
    }
    .card-body {
        padding: 35px;
    }
    .btn-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
    }
    .btn {
        padding: 14px 40px;
        border: none;
        border-radius: 12px;
        color: white;
        font-weight: 700;
        cursor: pointer;
        text-decoration: none;
        font-size: 16px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        display: inline-block;
        text-align: center;
    }
    .btn-uts {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    }
    .btn-uts:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
    }
    .btn-uas {
        background: linear-gradient(135deg, #8e44ad, #6c3483);
    }
    .btn-uas:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(142, 68, 173, 0.4);
    }
    .creator-info {
        margin-top: 25px;
        color: #333;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 12px;
    }
    .creator-info h3 {
        font-size: 15px;
        margin-bottom: 12px;
        color: #2c3e50;
    }
    .creator-info table {
        font-size: 14px;
        width: 100%;
    }
    .creator-info td {
        padding: 6px 10px 6px 0;
    }
    .footer {
        text-align: center;
        font-size: 12px;
        color: #999;
        margin-top: 25px;
    }
</style>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h1>🎓 Project Pemrograman Web</h1>
        <p>Silakan pilih project yang ingin dibuka</p>
    </div>
    <div class="card-body">
        <div class="btn-container">
            <a href="{{ route('uts.dashboard') }}" class="btn btn-uts">📋 UTS</a>
            <a href="{{ route('uas.dashboard') }}" class="btn btn-uas">📚 UAS</a>
        </div>
        
        <div class="creator-info">
            <h3>👨💻 Dibuat Oleh</h3>
            <table>
                <tr>
                    <td><strong>Nama</strong></td>
                    <td>: Achmad Alfin Muzakky</td>
                </tr>
                <tr>
                    <td><strong>Kelas</strong></td>
                    <td>: B 2024</td>
                </tr>
                <tr>
                    <td><strong>NPM</strong></td>
                    <td>: 1412240003</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            &copy; 2026 Universitas PGRI Ronggolawe Tuban
        </div>
    </div>
</div>
@endsection

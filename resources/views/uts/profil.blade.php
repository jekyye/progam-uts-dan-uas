@extends('layouts.uts')

@section('title', 'Profil Pengguna')
@section('page-title', 'Profil Pengguna')

@section('styles')
<style>
    .profile-wrapper {
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }
    .profile-card {
        background: white;
        width: 100%;
        max-width: 600px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        overflow: hidden;
    }
    .profile-header {
        background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        height: 120px;
        position: relative;
    }
    .profile-avatar {
        width: 100px;
        height: 100px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        bottom: -50px;
        left: 40px;
        border: 4px solid white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 40px;
        font-weight: bold;
        color: #11998e;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .profile-body {
        padding: 70px 40px 40px 40px;
    }
    .profile-name {
        font-size: 24px;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 5px;
    }
    .profile-role {
        color: #7f8c8d;
        font-size: 14px;
        margin-bottom: 25px;
    }
    .info-group {
        margin-bottom: 20px;
    }
    .info-label {
        font-size: 12px;
        color: #95a5a6;
        text-transform: uppercase;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .info-value {
        font-size: 16px;
        color: #34495e;
        padding-bottom: 10px;
        border-bottom: 1px solid #ecf0f1;
    }
</style>
@endsection

@section('content')
<div class="profile-wrapper">
    <div class="profile-card">
        <div class="profile-header">
            <div class="profile-avatar">AM</div>
        </div>
        <div class="profile-body">
            <div class="profile-name">Achmad Alfin Muzakky</div>
            <div class="profile-role">Mahasiswa / Administrator</div>

            <div class="info-group">
                <div class="info-label">Kelas</div>
                <div class="info-value">B 2024</div>
            </div>

            <div class="info-group">
                <div class="info-label">NPM</div>
                <div class="info-value">1412240003</div>
            </div>

            <div class="info-group">
                <div class="info-label">Universitas</div>
                <div class="info-value">Universitas PGRI Ronggolawe Tuban</div>
            </div>
        </div>
    </div>
</div>
@endsection

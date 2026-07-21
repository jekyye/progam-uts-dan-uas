@extends('layouts.uts')

@section('title', 'Dashboard UTS')
@section('page-title', 'Dashboard Utama')

@section('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        width: 100%;
        height: calc(100vh - 140px);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        position: relative;
        overflow: hidden;
    }
    .circle-1 {
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        top: -100px;
        left: -100px;
        animation: float 6s ease-in-out infinite;
    }
    .circle-2 {
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        bottom: -150px;
        right: -150px;
        animation: float 8s ease-in-out infinite reverse;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    .hero-content {
        z-index: 2;
        padding: 0 40px;
    }
    .hero-title {
        font-size: 48px;
        font-weight: 800;
        margin-bottom: 20px;
        letter-spacing: -1px;
        text-transform: uppercase;
        text-shadow: 2px 4px 10px rgba(0,0,0,0.3);
    }
    .hero-subtitle {
        font-size: 18px;
        font-weight: 300;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto 30px auto;
        line-height: 1.6;
    }
    .explore-btn {
        background-color: #f39c12;
        color: white;
        padding: 15px 40px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 10px 20px rgba(243, 156, 18, 0.4);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    .explore-btn:hover {
        background-color: #e67e22;
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(230, 126, 34, 0.5);
    }
</style>
@endsection

@section('content')
<div class="hero-section">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="hero-content">
        <h1 class="hero-title">Selamat Datang di Alfin Motor</h1>
        <p class="hero-subtitle">
            Toko sparepart motor terpercaya dengan koleksi terlengkap dan harga terbaik. Temukan segala kebutuhan kendaraan Anda dan rasakan kemudahan bertransaksi bersama kami.
        </p>
        <a href="{{ route('pendaftaran.create') }}" class="explore-btn">Mulai Pendaftaran</a>
    </div>
</div>
@endsection

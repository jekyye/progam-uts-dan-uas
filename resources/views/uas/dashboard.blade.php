@extends('layouts.uas')

@section('title', 'Aplikasi Koleksi Buku (UAS)')
@section('page-title', 'Dashboard')

@section('styles')
<style>
    .hero-section {
        background: linear-gradient(135deg, #8e44ad 0%, #3498db 100%);
        width: 100%;
        height: calc(100vh - 140px);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        position: relative;
        overflow: hidden;
    }
    .circle-1 {
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        top: -150px;
        right: -150px;
        animation: float 6s ease-in-out infinite;
    }
    .circle-2 {
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        bottom: 50px;
        left: -50px;
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
        font-size: 52px;
        font-weight: 800;
        margin-bottom: 20px;
        text-shadow: 2px 4px 10px rgba(0,0,0,0.2);
    }
    .hero-subtitle {
        font-size: 20px;
        font-weight: 300;
        opacity: 0.95;
        max-width: 650px;
        margin: 0 auto 40px auto;
        line-height: 1.6;
    }
    .explore-btn {
        background-color: #f1c40f;
        color: #2c3e50;
        padding: 15px 45px;
        font-size: 18px;
        font-weight: bold;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        box-shadow: 0 10px 20px rgba(241, 196, 15, 0.3);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }
    .explore-btn:hover {
        background-color: #f39c12;
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(243, 156, 18, 0.4);
        color: white;
    }
</style>
@endsection

@section('content')
<div class="hero-section">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="hero-content">
        <h1 class="hero-title">📚 Perpustakaan Digital</h1>
        <p class="hero-subtitle">
            Selamat datang di Aplikasi Koleksi Buku. Kelola rak buku digital Anda dengan mudah. Tambahkan buku baru, pantau koleksi, dan temukan berbagai bahan bacaan dengan cepat dan efisien.
        </p>
        <a href="{{ route('buku.index') }}" class="explore-btn">Lihat Data Buku</a>
    </div>
</div>
@endsection

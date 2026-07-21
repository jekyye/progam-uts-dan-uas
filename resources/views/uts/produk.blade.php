@extends('layouts.uts')

@section('title', 'Katalog Sparepart Motor')
@section('page-title', 'Produk')

@section('styles')
<style>
    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    .header-section h2 {
        margin: 0;
        color: #2c3e50;
        font-size: 24px;
    }
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
    }
    .product-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    .product-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid #eee;
    }
    .product-info {
        padding: 20px;
    }
    .product-code {
        font-size: 12px;
        color: #95a5a6;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .product-name {
        font-size: 18px;
        font-weight: bold;
        color: #34495e;
        margin-bottom: 15px;
    }
    .product-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .product-price {
        font-size: 18px;
        font-weight: bold;
        color: #e74c3c;
    }
    .product-stock {
        background-color: #f1f2f6;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        color: #2f3542;
        font-weight: bold;
    }
</style>
@endsection

@section('content')
<div class="header-section">
    <h2>Katalog Sparepart Motor</h2>
</div>

<div class="product-grid">
    <!-- Product 1 -->
    <div class="product-card">
        <div class="product-img" style="background: linear-gradient(135deg, #ff6b6b, #ee5a24); display:flex; justify-content:center; align-items:center; font-size:60px;">🔧</div>
        <div class="product-info">
            <div class="product-code">SP-001</div>
            <div class="product-name">Busi Motor NGK</div>
            <div class="product-meta">
                <div class="product-price">Rp 25.000</div>
                <div class="product-stock">Stok: 50</div>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="product-card">
        <div class="product-img" style="background: linear-gradient(135deg, #74b9ff, #0984e3); display:flex; justify-content:center; align-items:center; font-size:60px;">⚙️</div>
        <div class="product-info">
            <div class="product-code">SP-002</div>
            <div class="product-name">Kampas Rem Depan</div>
            <div class="product-meta">
                <div class="product-price">Rp 45.000</div>
                <div class="product-stock">Stok: 30</div>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="product-card">
        <div class="product-img" style="background: linear-gradient(135deg, #55efc4, #00b894); display:flex; justify-content:center; align-items:center; font-size:60px;">🛢️</div>
        <div class="product-info">
            <div class="product-code">SP-003</div>
            <div class="product-name">Oli Mesin MPX1</div>
            <div class="product-meta">
                <div class="product-price">Rp 55.000</div>
                <div class="product-stock">Stok: 100</div>
            </div>
        </div>
    </div>
</div>
@endsection

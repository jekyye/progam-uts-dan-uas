<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard UTS')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', Arial, sans-serif;
            display: flex;
            height: 100vh;
            overflow: hidden;
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 260px;
            background: linear-gradient(180deg, #1a252f 0%, #2c3e50 100%);
            color: white;
            display: flex;
            flex-direction: column;
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
        }
        .sidebar-header {
            padding: 25px 20px;
            text-align: center;
            background-color: rgba(0,0,0,0.2);
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 1px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .menu {
            list-style: none;
            padding: 10px 0;
        }
        .menu li {
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        .menu a {
            display: flex;
            align-items: center;
            padding: 16px 25px;
            color: #bdc3c7;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .menu a:hover, .menu a.active {
            background: rgba(255,255,255,0.1);
            color: #fff;
            padding-left: 30px;
            border-left: 3px solid #3498db;
        }
        .menu a .icon {
            margin-right: 12px;
            font-size: 18px;
        }
        .content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        .topbar {
            background-color: white;
            padding: 18px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .topbar h2 {
            font-size: 20px;
            color: #2c3e50;
            font-weight: 700;
        }
        .topbar .back-link {
            color: #e74c3c;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border: 2px solid #e74c3c;
            border-radius: 8px;
            transition: all 0.3s;
            font-size: 14px;
        }
        .topbar .back-link:hover {
            background-color: #e74c3c;
            color: white;
        }
        .main-content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 30px;
        }
        .alert {
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">📋 Dashboard UTS</div>
        <ul class="menu">
            <li><a href="{{ route('uts.dashboard') }}" class="{{ request()->routeIs('uts.dashboard') ? 'active' : '' }}"><span class="icon">🏠</span> Dashboard</a></li>
            <li><a href="{{ route('pendaftaran.create') }}" class="{{ request()->routeIs('pendaftaran.create') ? 'active' : '' }}"><span class="icon">📝</span> Pendaftaran</a></li>
            <li><a href="{{ route('pendaftaran.index') }}" class="{{ request()->routeIs('pendaftaran.index') ? 'active' : '' }}"><span class="icon">👥</span> Data Mahasiswa</a></li>
            <li><a href="{{ route('uts.produk') }}" class="{{ request()->routeIs('uts.produk') ? 'active' : '' }}"><span class="icon">🛒</span> Produk</a></li>
            <li><a href="{{ route('uts.profil') }}" class="{{ request()->routeIs('uts.profil') ? 'active' : '' }}"><span class="icon">👤</span> Profil</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="topbar">
            <h2>@yield('page-title', 'Dashboard Utama')</h2>
            <a href="{{ route('home') }}" class="back-link">← Kembali ke Home</a>
        </div>
        <div class="main-content">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </div>
</body>
</html>

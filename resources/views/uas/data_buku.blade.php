@extends('layouts.uas')

@section('title', 'Data Buku')
@section('page-title', 'Data Buku')

@section('styles')
<style>
    .data-container {
        background: white;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }
    .header-section h2 {
        color: #2c3e50;
        font-size: 22px;
    }
    .btn-add {
        background: linear-gradient(135deg, #8e44ad, #6c3483);
        color: white;
        padding: 10px 22px;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
    }
    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(142,68,173,0.3);
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ecf0f1;
    }
    th {
        background-color: #f8f9fa;
        color: #7f8c8d;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
        font-weight: 700;
    }
    tr:hover {
        background-color: #fcfcfc;
    }
    .badge {
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
        display: inline-block;
    }
    .badge-pemrograman { background-color: #e8f4f8; color: #3498db; }
    .badge-novel { background-color: #fef0f0; color: #e74c3c; }
    .badge-sejarah { background-color: #f4f6f6; color: #7f8c8d; }
    .badge-sains { background-color: #eafaf1; color: #2ecc71; }
    .action-btn {
        padding: 6px 14px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;
        color: white;
        margin-right: 5px;
        transition: all 0.3s;
        display: inline-block;
    }
    .btn-edit { background: linear-gradient(135deg, #f59e0b, #d97706); }
    .btn-delete { background: linear-gradient(135deg, #ef4444, #dc2626); }
    .action-btn:hover { transform: translateY(-2px); }
    .delete-form { display: inline; }
</style>
@endsection

@section('content')
<div class="data-container">
    <div class="header-section">
        <h2>📖 Daftar Koleksi Buku</h2>
        <a href="{{ route('buku.create') }}" class="btn-add">+ Tambah Buku</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $i => $row)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td><strong>{{ $row->judul }}</strong></td>
                <td>{{ $row->penulis }}</td>
                <td>{{ $row->penerbit }}</td>
                <td>{{ $row->tahun }}</td>
                <td>
                    @php
                        $badgeClass = 'badge-pemrograman';
                        if($row->kategori == 'Novel') $badgeClass = 'badge-novel';
                        elseif($row->kategori == 'Sejarah') $badgeClass = 'badge-sejarah';
                        elseif($row->kategori == 'Sains') $badgeClass = 'badge-sains';
                    @endphp
                    <span class="badge {{ $badgeClass }}">{{ $row->kategori }}</span>
                </td>
                <td style="white-space: nowrap;">
                    <a href="{{ route('buku.edit', $row->id) }}" class="action-btn btn-edit">✏️ Edit</a>
                    <form action="{{ route('buku.destroy', $row->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn btn-delete" style="border:none;cursor:pointer;">🗑️ Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="7" style="text-align:center;padding:30px;color:#999;">Belum ada data buku</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

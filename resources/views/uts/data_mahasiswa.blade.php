@extends('layouts.uts')

@section('title', 'Data Mahasiswa')
@section('page-title', 'Data Mahasiswa')

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
        background: linear-gradient(135deg, #22c55e, #16a34a);
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s;
    }
    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(34,197,94,0.3);
    }
    .table-wrapper {
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 900px;
    }
    th, td {
        padding: 14px 16px;
        text-align: left;
        border-bottom: 1px solid #f0f0f0;
        font-size: 14px;
    }
    th {
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 0.5px;
    }
    tr:hover {
        background-color: #f8fafc;
    }
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
        <h2>👥 Data Mahasiswa Pendaftar</h2>
        <a href="{{ route('pendaftaran.create') }}" class="btn-add">+ Tambah Pendaftaran</a>
    </div>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Sekolah</th>
                    <th>Jurusan 1</th>
                    <th>Jurusan 2</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $i => $row)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td><strong>{{ $row->nama }}</strong></td>
                    <td>{{ $row->tempat_lahir }}</td>
                    <td>{{ $row->tanggal_lahir ? $row->tanggal_lahir->format('d-m-Y') : '-' }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>{{ $row->sekolah_asal }}</td>
                    <td>{{ $row->jurusan1 }}</td>
                    <td>{{ $row->jurusan2 }}</td>
                    <td style="white-space: nowrap;">
                        <a href="{{ route('pendaftaran.edit', $row->id) }}" class="action-btn btn-edit">✏️ Edit</a>
                        <form action="{{ route('pendaftaran.destroy', $row->id) }}" method="POST" class="delete-form" onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn btn-delete" style="border:none;cursor:pointer;">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="9" style="text-align:center;padding:30px;color:#999;">Belum ada data pendaftaran</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

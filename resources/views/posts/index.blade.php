@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Data Barang</h2>
            <a href="{{ route('databarang.create') }}" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="table__container table-responsive">
            <table class="styled__table table-hover datatable" id="mauexport">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Jumlah Terjual</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Barang</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataBarang as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->jumlah_terjual }}</td>                            
                            <td>{{ \Carbon\Carbon::parse($item->tanggal_transaksi)->format('d-m-Y') }}</td>
                            <td>{{ $item->jenis_barang }}</td>                            
                            <td>
                                <a href="{{ route('databarang.edit', $item->id) }}" class="text-white btn btn-warning btn-sm"><i
                                        class="bi bi-pencil-square"></i></a>                                
                                <form action="{{ route('databarang.destroy', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="text-white btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

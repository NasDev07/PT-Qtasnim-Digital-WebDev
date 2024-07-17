@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="section-header">
            <h3>Post Data Barang</h3>
        </div>

        <div class="card" style="border: none">
            <div class="card-body shadow-lg rounded">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <form method="POST" action="{{ route('databarang.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                    id="nama_barang" name="nama_barang" required autofocus value="{{ old('nama_barang') }}">
                                @error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                    id="stok" name="stok" required value="{{ old('stok') }}">
                                @error('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_terjual" class="form-label">Jumlah Terjual</label>
                                <input type="number" class="form-control @error('jumlah_terjual') is-invalid @enderror"
                                    id="jumlah_terjual" name="jumlah_terjual" required value="{{ old('jumlah_terjual') }}">
                                @error('jumlah_terjual')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                                <input type="date" class="form-control @error('tanggal_transaksi') is-invalid @enderror"
                                    id="tanggal_transaksi" name="tanggal_transaksi" required
                                    value="{{ old('tanggal_transaksi') }}">
                                @error('tanggal_transaksi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                                <select class="form-select @error('jenis_barang') is-invalid @enderror" id="jenis_barang"
                                    name="jenis_barang" required>
                                    <option value="" disabled selected>Pilih jenis barang</option>
                                    <option value="Konsumsi" {{ old('jenis_barang') == 'Konsumsi' ? 'selected' : '' }}>
                                        Konsumsi</option>
                                    <option value="Pembersih" {{ old('jenis_barang') == 'Pembersih' ? 'selected' : '' }}>
                                        Pembersih</option>                                    
                                </select>
                                @error('jenis_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection

@extends('layouts.app')

@section('title', 'Home')

@section('content')


    <div class="table__container">
        
        <table class="tanle styled__table table-hover datatable" id="mauexport">
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
                <tr>
                    <td>1.</td>
                    <td>Kopi</td>
                    <td>100</td>
                    <td>10</td>
                    <td>1-05-2021</td>
                    <td>Konsumsi</td>
                    <td>
                        <a href="" class="text-white btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="text-white btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Teh</td>
                    <td>100</td>
                    <td>19</td>
                    <td>5-05-2021</td>
                    <td>Konsumsi</td>
                    <td>
                        <a href="" class="text-white btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="text-white btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Kopi</td>
                    <td>90</td>
                    <td>15</td>
                    <td>10-05-2021</td>
                    <td>Konsumsi</td>
                    <td>
                        <a href="" class="text-white btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="text-white btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Pasta Gigi</td>
                    <td>100</td>
                    <td>20</td>
                    <td>11-05-2021</td>
                    <td>Pembersih</td>
                    <td>
                        <a href="" class="text-white btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="text-white btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Sabun Mandi</td>
                    <td>100</td>
                    <td>30</td>
                    <td>11-05-2021</td>
                    <td>Pembersih</td>
                    <td>
                        <a href="" class="text-white btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="text-white btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Sampo</td>
                    <td>100</td>
                    <td>25</td>
                    <td>12-05-2021</td>
                    <td>Pembersih</td>
                    <td>
                        <a href="" class="text-white btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="text-white btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Teh</td>
                    <td>81</td>
                    <td>5</td>
                    <td>12-05-2021</td>
                    <td>Konsumsi</td>
                    <td>
                        <a href="" class="text-white btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="" class="text-white btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection

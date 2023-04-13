@extends('layouts.app')
@section('judul','produk')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4" >
        <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
            <a href="{{ route('createproduk') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>  Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>nama</th>
                            <th>kode</th>
                            <th>stok</th>
                            <th>harga dasar</th>
                            <th>harga jual</th>
                            <th>ket</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>nama</th>
                            <th>kode</th>
                            <th>stok</th>
                            <th>harga dasar</th>
                            <th>harga jual</th>
                            <th>ket</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($produk as $pr)
                        <tr>
                            <td>{{ $pr->product_image }}</td>
                            <td>{{ $pr->product_name }}</td>
                            <td>{{ $pr->product_code }}</td>
                            <td>{{ $pr->product_stock_amount }}</td>
                            <td>{{ $pr->product_base_price }}</td>
                            <td>{{ $pr->product_sale_price }}</td>
                            <td>{{ $pr->product_detail }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

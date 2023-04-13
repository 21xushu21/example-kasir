@extends('layouts.app')
@section('judul','Kontak')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4" >
        <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Customer</h6>
            <a href="{{ route('createcustomer') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>  Tambah Customer</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>kode</th>
                            <th>phone</th>
                            <th>e-mail</th>
                            <th>Alamat</th>
                            <th>tgl daftar</th>
                            <th class="text-center w-">aksi</th>
                            {{-- <th class="text-center">aksi</th> --}}
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>kode</th>
                            <th>phone</th>
                            <th>e-mail</th>
                            <th>Alamat</th>
                            <th>tgl daftar</th>
                            <th colspan="2">aksi</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        @foreach ($customer as $cs)
                        <tr>
                            <td>{{ $cs->nama }}</td>
                            <td>{{ $cs->kode }}</td>
                            <td>{{ $cs->phone }}</td>
                            <td>{{ $cs->email }}</td>
                            <td>{{ $cs->address }}</td>
                            <td>{{ $cs->created_at }}</td>
                            <td class="row">
                                <div class="col-lg-6">
                                    <a class="btn btn-secondary" href="/customer/{{ $cs->id }}/edit">edit</a>
                                </div>
                                <div class="col-lg-6">
                                    <form action="/customer/{{ $cs->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="Dalete">
                                    </form>
                                </div>
                            </td>
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

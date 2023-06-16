@extends('admin.layouts.master')

@section('content')

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Tendik</h3> &nbsp;
            <div class="card-tools">
                <form action="/tendik/search" class="form-inline" method="GET">
                <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Bagian</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tendik as $tendik)
                    <tr>
                        <td>{{$tendik->nama}}</td>
                        <td>{{$tendik->jenkel}}</td>
                        <td>{{$tendik->alamat}}</td>
                        <td>{{$tendik->hp}}</td>
                        <td>{{$tendik->bagian}}</td>
                        <td>{{$tendik->email}}</td>
                        <td> <a href="/tendik/{{$tendik->id}}/delete" class="btn btn-danger"
                                onclick="return confirm('Apakah Yakin Dihapus? {{$tendik->nama}} ');">Hapus</a>
                            <a href="/tendik/{{$tendik->id}}/edit" class="btn btn-warning">Edit</a>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    @endsection
</div>

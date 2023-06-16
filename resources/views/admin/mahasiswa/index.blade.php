@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title mt-1"><b>DATA MAHASISWA</b></h3>

                        {{-- Tombol tambah data --}}
                        <a href="{{ url('/mahasiswa/create') }}" class="btn btn-outline-success btn-sm float-right">Tambah Data</a>
                        {{-- ./Tombol tambah data --}}

                        <div class="card-tools">

                                {{-- Tombol Search --}}
                                <form action="/mahasiswa/search" method="GET" class="input-group input-group-sm mr-4 mt-0" style="width: 150px;">
                                    <input type="search" name="search" class="form-control float-right" placeholder="Cari Data">
                                    <div class="input-group-append float-right">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                {{-- ./Tombol Search --}}

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No. HP</th>
                                    <th>Jurusan</th>
                                    <th>Email</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $mhs)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $mhs->nama }}</td>
                                    <td>{{ $mhs->jk }}</td>
                                    <td>{{ $mhs->alamat }}</td>
                                    <td>{{ $mhs->hp }}</td>
                                    <td>{{ $mhs->jurusan }}</td>
                                    <td>{{ $mhs->email }}</td>
                                    <td>    
                                        {{-- EDIT --}}
                                        <a class="btn btn-primary text-light" href="/mahasiswa/{{ $mhs->id }}/edit">EDIT</a>
                                        {{-- HAPUS --}}
                                        <a class="btn btn-danger text-light" href="/mahasiswa/{{ $mhs->id }}/delete" onclick="return confirm('Apakah Anda Yakin ?');">DELETE</a>
                                    </td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>


    </div>
</section>
@endsection
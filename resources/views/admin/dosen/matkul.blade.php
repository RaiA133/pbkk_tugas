@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title mt-1"><b>DATA MATA KULIAH</b></h3>

                        {{-- Tombol tambah data --}}
                        {{-- <a href="{{ url('/mahasiswa/create') }}" class="btn btn-outline-success btn-sm float-right">Tambah Data</a> --}}
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
                                    <th>Nama Mahasiswa</th>
                                    <th>Mata Kuliah</th>
                                    <th>Dosen</th>
                                    <th>Semester</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $matkul)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $matkul->nama }}</td>
                                    <td>
                                        <ul type="none">
                                            @foreach ($matkul->matkul as $mk)
                                            <li>
                                                @if ($matkul->matkul)
                                                    {{ $mk->nama_matkul }}
                                                @else
                                                    -                                                    
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul type="none">
                                            @foreach ($matkul->matkul as $mk)
                                            <li>
                                                @if ($matkul->matkul)
                                                    {{ $mk->dosen }}
                                                @else
                                                    -                                                    
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>  
                                    </td>
                                    <td>
                                        <ul type="none">
                                            @foreach ($matkul->matkul as $mk)
                                            <li>
                                                @if ($matkul->matkul)
                                                    {{ $mk->semester }}
                                                @else
                                                    -                                                    
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul type="none">
                                            @foreach ($matkul->matkul as $mk)
                                            <li>
                                                @if ($matkul->matkul)
                                                    {{ $mk->pivot->nilai }}
                                                @else
                                                    -                                                    
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    {{-- <td>{{ $data->nilai }}</td> --}}
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
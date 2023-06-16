@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid pt-3">

        <div class="card card-primary">
            <div class="card-header ">
              <h3 class="card-title">EDIT DATA MAHASISWA</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form action="/mahasiswa/{{ $mahasiswa->id }}/update" method="POST">
                {{ csrf_field() }}
                <div class="card-body">

                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" autocomplete="off" value="{{ $mahasiswa->nama }}">
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="jk">
                            <option value="Belum Pilih">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki" @if ($mahasiswa->jk=='Laki-Laki') selected @endif >Laki-Laki</option>
                            <option value="Perempuan" @if ($mahasiswa->jk=='Perempuan') selected @endif >Perempuan</option>
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="+62" name="hp" value="{{ $mahasiswa->hp }}">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Masukan Email" name="email" value="{{ $mahasiswa->email }}">
                    </div>
                    
                    <div class="form-group mb-0">
                        <textarea rows="4" class="form-control" placeholder="Alamat Lengkap" name="alamat">{{ $mahasiswa->alamat }}</textarea>
                    </div>

                </div>
              <!-- /.card-body -->

                <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Cencel</a>
                    </div>
                </div>
            </form>

          </div>

    </div>
</section>
@endsection
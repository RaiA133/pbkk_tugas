@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid pt-3">

        <div class="card card-success">
            <div class="card-header ">
              <h3 class="card-title">TAMBAH DATA MAHASISWA</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form action="{{ url('/mahasiswa/store') }}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">

                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="jk">
                            <option selected="" value="Belum Pilih">Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    
                    
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="+62" name="hp">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Jurusan" name="jurusan">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Masukan Email" name="email">
                    </div>
                    
                    <div class="form-group mb-0">
                        <textarea rows="4" class="form-control" placeholder="Alamat Lengkap" name="alamat"></textarea>
                    </div>

                </div>
              <!-- /.card-body -->

                <div class="card-footer">
                    <div class="float-right">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <a href="{{ url('/mahasiswa') }}" class="btn btn-secondary">Cencel</a>
                    </div>
                </div>
            </form>

          </div>

    </div>
</section>
@endsection
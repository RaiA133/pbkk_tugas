@extends('admin.layouts.master')


@section('content')


<div class="content">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Tambah Tenaga Kependidikan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <!-- menampilkan error validasi -->
        @if(count($errors) >0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{url('/tendik/store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                        placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="jenkel">Pilih Jenis Kelamin</label>
                    <select name="jenkel" id="" class="custom-select rounded-0">
                        <option selected="">Pilih Jenis Kelamin</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
                <label for="alamat" class="form-label">Alamat</label>
                <div class="form-floating">
                    <textarea name="alamat" id="floatingTextArea" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <label for="hp">No HP</label>
                    <input type="number" name="hp" class="form-control" placeholder="+62">
                </div>


                <div class="form-group">
                    <label for="bagian">Pilih Bagian</label>
                    <select name="bagian" id="" class="custom-select rounded-0">
                        <option selected="">Pilih Bagian</option>
                        <option value="Sarana Prasarana">Sarana Prasarana</option>
                        <option value="Administrasi">Administrasi</option>
                        <option value="Pemasaran">Pemasaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        placeholder="Alamat Email">
                </div>


                <div class="card card-danger">
                    <div class="card-header">
                        <div class="card-title">Upload Dokumen</div>
                    </div>
                </div>


                <label for="foto" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <input type="file" name="foto" class="form-control" id="inputGroupFile">
                    <label for="inputGroupFile" class="input-group-text">Upload</label>
                </div>
                <label for="no_ktp" class="form-label">KTP</label>
                <div class="input-group mb-3">
                    <input type="file" name="no_ktp" class="form-control" id="inputGroupFile2">
                    <label for="inputGroupFile2" class="input-group-text">Upload</label>
                </div>
            </div>
            <!-- /.card-body -->
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
</div>


@endsection

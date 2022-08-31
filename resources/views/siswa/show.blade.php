@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lihat Data
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" name="nis" class="form-control" value=" {{$siswa->nis}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" value=" {{$siswa->nama}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" value=" {{$siswa->jenis_kelamin}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Agama</label>
                        <input type="text" name="agama" class="form-control" value=" {{$siswa->agama}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value=" {{$siswa->tgl_lahir}} " required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value=" {{$siswa->alamat}} " required>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection
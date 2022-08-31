@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <form action=" {{route('siswa.store')}} " method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">NIS</label>
                        <input type="text" name="nis" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Agama</label>
                        <input type="text" name="agama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">tanggal_lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>

@endsection
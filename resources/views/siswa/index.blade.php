@extends('admin.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>DATA SISWA</strong>
                    <a href="{{route('siswa.create')}}" class="btn btn-primary btn-small float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                            
                                @php $no =1; @endphp
                                @foreach($siswa as $data)
                            
                            <tr>
                                <td>{{$no++}}</td>
                                <td> {{$data->nis}} </td>
                                <td> {{$data->nama}} </td>
                                <td> {{$data->jenis_kelamin}} </td>
                                <td> {{$data->agama}} </td>
                                <td> {{$data->tgl_lahir}} </td>
                                <td> {{$data->alamat}} </td>
                                <td>
                                    <form action=" {{route('siswa.destroy',$data->id)}} " method="POST">
                                    @csrf @method('delete')
                                    <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-success btn-small">Edit</a>
                                    <a href="{{route('siswa.show',$data->id)}}" class="btn btn-warning btn-small">Show</a>
                                    <button type="submit" class="btn btn-danger btn-small">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

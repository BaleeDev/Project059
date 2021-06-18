@extends('Latihan/Layout/main')

@section('title','Beranda')
    
@section('isi')

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <a href="{{url('/mid/add')}}" class="btn btn-outline-success mb-2">Tambah Data</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Matakuliah</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Jumlah Soal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mid as $mid)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$mid->kolom_nim}}</td>
                <td>{{$mid->kolom_nama}}</td>
                <td>{{$mid->kolom_umur}}</td>
                <td>{{$mid->kolom_alamat}}</td>
                <td>
                    <a href="/mid/{{$mid->id_059}}/edit" class="badge badge-info">Edit</a>
                    <form action="/mid/{{$mid->id_059}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger">Hapus</button>
                      </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
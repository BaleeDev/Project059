@extends('Latihan/Layout/main')

@section('title','Beranda')
    
@section('isi')

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <a href="{{url('/ujian/add')}}" class="btn btn-outline-success mb-2">Tambah Data</a>
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
            @foreach ($ujian as $ujian)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$ujian->nama_mk}}</td>
                <td>{{$ujian->dosen}}</td>
                <td>{{$ujian->jumlah_soal}}</td>
                <td>{{$ujian->Keterangan}}</td>
                <td>
                    <a href="/ujian/{{$ujian->id}}/edit" class="badge badge-info">Edit</a>
                    <form action="/ujian/{{ $ujian->id }}" method="post" class="d-inline">
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
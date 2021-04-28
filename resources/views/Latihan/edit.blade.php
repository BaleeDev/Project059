@extends('Latihan/Layout/main')

@section('title','Tambah Data')
    
@section('isi')
<form action="/ujian/{{ $ujian->id }}" method="post">
    @method('patch')
    @csrf
    
    <h3 class="my-3">Edit Data</h3>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="nama_mk">Nama Matakuliah</label>
          <input type="text" class="form-control @error('nama_mk')
              is_invalid
          @enderror" id="nama_mk" name="nama_mk" value="{{ $ujian->nama_mk }}" placeholder="Inputkan Nama Matakuliah">
          @error('nama_mk')
              <div class="invalid-feedback" role="alert">
                 {{$message}}
               </div>
          @enderror
        </div>
        </div>
        <div class="col-6">
            <div class="form-group">
              <label for="dosen">Nama Dosen</label>
              <input type="text" class="form-control @error('dosen')
                  is-invalid
              @enderror" id="dosen" name="dosen" value="{{$ujian->dosen}}" placeholder="Inputkan Nama Dosen">
              @error('dosen')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
              <label for="jumlah_soal">Jumlah Soal</label>
              <input type="text" class="form-control @error('jumlah_soal')
                  is-invalid
              @enderror" id="jumlah_soal" name="jumlah_soal" value="{{$ujian->jumlah_soal}}" placeholder="Inputkan Jumlah Soal"> @error('jumlah_soal')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label for="Keterangan">Keterangan</label>
                <textarea class="form-control @error('Keterangan')
                    is-invalid
                @enderror" id="Keterangan" name="Keterangan" rows="3">{{$ujian->Keterangan}}</textarea>
              </div>
        </div>
        <div class="col-5 "></div>
        <div class="col-4  my-4">
            <button type="submit" class="btn btn-outline-success">Edit Data</button>
        </div>
    </div>
  </form>
@endsection
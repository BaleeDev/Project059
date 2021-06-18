@extends('Latihan/Layout/main')

@section('title','Tambah Data')
    
@section('isi')
<form action="/mid/{{ $midsemester->id_059 }}" method="post">
    @method('patch')
    @csrf
    
    <h3 class="my-3">Edit Data</h3>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="kolom_nim">Nim Mahasiswa</label>
          <input type="text" class="form-control @error('kolom_nim')
              is_invalid
          @enderror" id="kolom_nim" name="kolom_nim" value="{{ $midsemester->kolom_nim }}" placeholder="Inputkan Nim Mahasiswa">
          @error('kolom_nim')
              <div class="invalid-feedback" role="alert">
                 {{$message}}
               </div>
          @enderror
        </div>
        </div>
        <div class="col-6">
            <div class="form-group">
              <label for="kolom_nama">Nama mahasiswa</label>
              <input type="text" class="form-control @error('kolom_nama')
                  is-invalid
              @enderror" id="kolom_nama" name="kolom_nama" value="{{$midsemester->kolom_nama}}" placeholder="Inputkan Nama mahasiswa">
              @error('kolom_nama')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
              <label for="kolom_umur">umur</label>
              <input type="text" class="form-control @error('kolom_umur')
                  is-invalid
              @enderror" id="kolom_umur" name="kolom_umur" value="{{$midsemester->kolom_umur}}" placeholder="Inputkan umur"> @error('kolom_umur')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label for="kolom_alamat">Alamat</label>
                <textarea class="form-control @error('kolom_alamat')
                    is-invalid
                @enderror" id="kolom_alamat" name="kolom_alamat" rows="3">{{$midsemester->kolom_alamat}}</textarea>
              </div>
        </div>
        <div class="col-5 "></div>
        <div class="col-4  my-4">
            <button type="submit" class="btn btn-outline-success">Edit Data</button>
        </div>
    </div>
  </form>
@endsection
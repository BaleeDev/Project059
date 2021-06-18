@extends('Latihan/Layout/main')

@section('title','Tambah Data')
    
@section('isi')
<form action="/mid" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
              <label for="kolom_nim">NIM Mahasiswa</label>
              <input type="text" class="form-control @error('kolom_nim')
                  is_invalid
              @enderror" id="kolom_nim" name="kolom_nim" value="{{old('kolom_nim')}}" placeholder="Inputkan NIM Mahasiswa">
              @error('kolom_nim')
                  <div class="invalid-feedback" role="alert">
                     {{$message}}
                   </div>
              @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
              <label for="kolom_nama">Nama Mahasiswa</label>
              <input type="text" class="form-control @error('kolom_nama')
                  is-invalid
              @enderror" id="kolom_nama" name="kolom_nama" value="{{old('kolom_nama')}}" placeholder="Inputkan Nama Mahasiswa">
              @error('kolom_nama')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
              <label for="kolom_umur">Umur</label>
              <input type="text" class="form-control @error('kolom_umur')
                  is-invalid
              @enderror" id="kolom_umur" name="kolom_umur" value="{{old('kolom_umur')}}" placeholder="Inputkan Umur"> @error('kolom_umur')
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
                @enderror" id="kolom_alamat" name="kolom_alamat" rows="3">{{old('kolom_alamat')}}</textarea>
              </div>
        </div>
        <div class="col-5 "></div>
        <div class="col-4  my-4">
            <button type="submit" class="btn btn-outline-success">Tambah Data</button>
        </div>
    </div>
  </form>
@endsection
@extends('layout.main')
<<<<<<< HEAD
@section('title', 'mahasiswa')
=======
@section('title', 'Mahasiswa')
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562

@section('content')
    <div class ="row">
        <div class = "col-12">

                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
<<<<<<< HEAD
                  <div class="card-header"><div class="card-title">Tambah Prodi</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('mahasiswa.store') }}" method="POST"
                  enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama Mahasiswa</label>
                        <input type="type" class="form-control" name="Nama" value="{{ old('Nama') }}">
                        @error('Nama')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="NPM" class="form-label">NPM Mahasiswa</label>
                        <input type="type" class="form-control" name="NPM" value="{{ old('NPM') }}">
                        @error('NPM')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input type="radio"  name="jk" value="L" {{ old('jk') == 'L' ? 'checked' : '' }}> Laki-laki
                        <input type="radio"  name="jk" value="P" {{ old('jk') == 'P' ? 'checked' : '' }}> Perempuan
=======
                  <div class="card-header"><div class="card-title">Tambah Mahasiswa</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" name="npm" value="{{ old('npm') }}">
                        @error('npm')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label> <br>
                        <input type="radio" name="jk" value="L" {{ old('jk') =='L' ? 'checked' : '' }}>Laki-laki <br>
                        <input type="radio" name="jk" value="P" {{ old('jk') =='P' ? 'checked' : '' }}>Perempuan
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                        @error('jk')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
<<<<<<< HEAD
                        <label for="Tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="Tanggal_lahir" value="{{ old('Tanggal_lahir') }}">
                        @error('Tanggal_lahir')
=======
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="asal_sma" class="form-label">Asal SMA/SMK</label>
                        <input type="text" class="form-control" name="asal_sma" value="{{ old('asal_sma') }}">
                        @error('asal_sma')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="prodi_id" class="form-label">Prodi</label>
                        <select class="form-control" name="prodi_id">
                          @foreach($prodi as $item)
                          <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        @error('prodi_id')
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
<<<<<<< HEAD
                        <input type="file" class="form-control" name="foto" value="{{ old('foto') }}">
                        @error('foto')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="prodi_id" class="form-label">Prodi </label>
                        <select class = "form-control" class="form-control" name="prodi_id">
                            @foreach($prodi as $item)
                            <option value ="{{ $item->id }}"> {{ $item->nama }} </option>
                            @endforeach
                        </select>
                        @error('Sekretaris')
                          <div class="text-danger">{{ $message }}</div>
=======
                        <input type="file" class="form-control" name="foto">
                        @error('foto')
                          <div class="text-danger"> {{ $message }} </div>
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                        @enderror
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
@endsection
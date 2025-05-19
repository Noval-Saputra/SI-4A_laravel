@extends('layout.main')
@section('title', 'Mahasiswa')

@section('content')
    <div class ="row">
        <div class = "col-12">

                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
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
                        <input type="text" class="form-control" name="singkatan" value="{{ old('npm') }}">
                        @error('npm')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label> <br>
                        <input type="radio" name="jk" value="L" {{ old('jk') =='L' ? 'checked' : '' }}>Laki-laki <br>
                        <input type="radio" name="jk" value="P" {{ old('jk') =='P' ? 'checked' : '' }}>Perempuan
                        @error('jk')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="fakultas_id" class="form-label">Fakultas</label>
                        <select class="form-control" name="fakultas_id">
                          @foreach($fakultas as $item)
                          <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        @error('fakultas_id')
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
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto">
                        @error('foto')
                          <div class="text-danger"> {{ $message }} </div>
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
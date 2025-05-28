@extends('layout.main')
<<<<<<< HEAD
@section('title', 'prodi')
=======
@section('title', 'Program Studi')
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562

@section('content')
    <div class ="row">
        <div class = "col-12">

                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
<<<<<<< HEAD
                  <div class="card-header"><div class="card-title">Tambah Prodi</div></div>
=======
                  <div class="card-header"><div class="card-title">Tambah Program Studi</div></div>
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('prodi.store') }}" method="POST">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
<<<<<<< HEAD
                        <label for="nama" class="form-label">Nama prodi</label>
=======
                        <label for="nama" class="form-label">Nama Program Studi</label>
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan</label>
                        <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') }}">
                        @error('singkatan')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                        <input type="text" class="form-control" name="kaprodi" value="{{ old('kaprodi') }}">
<<<<<<< HEAD
                        @error('Kaprodi')
=======
                        @error('kaprodi')
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
<<<<<<< HEAD
                        <label for="sekretaris" class="form-label">Nama sekretaris </label>
=======
                        <label for="sekretaris" class="form-label">Nama Sekretaris</label>
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                        <input type="text" class="form-control" name="sekretaris" value="{{ old('sekretaris') }}">
                        @error('sekretaris')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
<<<<<<< HEAD
                        <label for="fakultas_id" class="form-label">fakultas </label>
                        <select clalss = "form-control" class="form-control" name="fakultas_id">
                            @foreach($fakultas as $item)
                            <option value ="{{ $item->id }}"> {{ $item->nama }} </option>
                            @endforeach
                        </select>
                        @error('Sekretaris')
=======
                        <label for="fakultas_id" class="form-label">Fakultas</label>
                        <select class="form-control" name="fakultas_id">
                          @foreach($fakultas as $item)
                          <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        @error('fakultas_id')
>>>>>>> d82666f67b4528507ba5155beefd213e841c3562
                          <div class="text-danger">{{ $message }}</div>
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
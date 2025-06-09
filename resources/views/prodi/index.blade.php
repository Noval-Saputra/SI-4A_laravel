@extends('layout.main')
@section('title', 'Program Studi')

@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">List Program Studi</h3>
            <div class="card-tools">
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-collapse"
                title="Collapse"
                >
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                </button>
                <button
                type="button"
                class="btn btn-tool"
                data-lte-toggle="card-remove"
                title="Remove"
                >
                <i class="bi bi-x-lg"></i>
                </button>
            </div>
            </div>
            <div class="card-body">
                
            


                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Singkatan</th>
                            <th>Kaprodi</th>
                            <th>Sekretaris</th>
                            <th>Fakultas</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($prodi as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->singkatan }}</td>
                            <td>{{ $item->kaprodi}}</td>
                            <td>{{ $item->sekretaris}}</td>
                            <td>{{ $item->fakultas->nama}}</td>
                            <td>
<<<<<<< HEAD
                                 <a href="{{ route('fakultas.show', $item->id) }}" class="btn btn-info" >Show</a>
                                <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('fakultas.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                            </td>
=======
                                <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-info" >Show</a>
                                <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                 <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
>>>>>>> bbd3e21c101ca777725612dd6bf6dfe08c7a5358
                        </tr>
                    @endforeach
                    </tbody>
                </table>
    
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer">Footer</div> -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        </div>
    </div>
    <!--end::Row-->
@endsection
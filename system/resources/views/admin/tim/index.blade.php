@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Data Tim</h5>
                        <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Tim</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="20%">Aksi</th>
                                        <th class="text-center">Nama </th>
                                        <th class="text-center">Nim</th>
                                        <th class="text-center">Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_tim as $tim)
                                    <tr>
                                        <td class="text-center">

                                            <div class="btn-group">

                                                <a href="{{ url("edit-tim/$tim->id") }}" class="btn btn-warning" title="Edit Data"><span class="fa fa-edit"></span></a>

                                                <a href="{{ url("delete-tim/$tim->id") }}" onclick="return confirm('Yakin Anda Menghapus Data Ini?')" class="btn btn-danger" title="Hapus Data"><span class="fa fa-trash"></span></a>
                                            </div>
                                        </td>
                                        <td>{{ $tim->nama}}</td>
                                        <td>{{ $tim->jabatan}}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$tim->foto") }}" alt="" style="object-fit: cover; position: static; width: 40%; height: 50%;">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Data Foto Slide </h5>
                        <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#modaltim"><span class="fa fa-plus"></span> Tambah Foto Slide</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="20%">Aksi</th>
                                        <th class="text-center">Nama </th>
                                        <th class="text-center">Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_foto as $foto)
                                    <tr>
                                        <td class="text-center">

                                            <div class="btn-group">

                                                <a href="{{ url("edit-foto/$foto->id") }}" class="btn btn-warning" title="Edit Data"><span class="fa fa-edit"></span></a>

                                                <a href="{{ url("delete-foto/$foto->id") }}" onclick="return confirm('Yakin Anda Menghapus Data Ini?')" class="btn btn-danger" title="Hapus Data"><span class="fa fa-trash"></span></a>
                                            </div>
                                        </td>
                                        <td>{{ $foto->nama}}</td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$foto->foto") }}" alt="" style="object-fit: cover; position: static; width: 40%; height: 50%;">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data tim</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ url('store-tim') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Nama </label>
                            <input type="text" class="form-control" name="nama" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nim</label>
                            <input type="text" class="form-control" name="jabatan" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">foto</label>
                            <input type="file" class="form-control" name="foto" required="" accept=".jpg, .png, .jpeg">
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                </div>
            </div>
            </form>
        </div>
    </div>



<div class="modal fade" id="modaltim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Foto Slide</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-foto') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Nama </label>
                        <input type="text" class="form-control" name="nama" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">foto</label>
                        <input type="file" class="form-control" name="foto" required="" accept=".jpg, .png, .jpeg">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
            </div>
        </div>
        </form>
    </div>
</div>
    @endsection
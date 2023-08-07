@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Data Prodi</a>
            <div class="card-title" style="font-size: 25px;">Data Prodi</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="20%">Aksi</th>
                            <th class="text-center">Nama Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_unit as $unit)
                        <tr>
                            <td class="text-center">

                              

                                <a href="{{ url("edit-unit/$unit->id") }}" class="btn btn-warning" title="Edit Data"><span class="fa fa-edit"></span></a>

                                <a href="{{ url("delete-unit/$unit->id") }}" onclick="return confirm('Yakin Anda Menghapus Data Ini?, Menghapus data ini dapat mempengaruhi data lainnya.')" class="btn btn-danger" title="Hapus Data"><span class="fa fa-trash"></span></a>
                            </td>

                            <td>{{ $unit->nama_unit }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Prodi</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ url('store-unit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Nama Prodi</label>
                            <input type="text" class="form-control" name="nama_unit" required="">
                        </div>


                        <div class="modal-footer">
                            <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        @endsection
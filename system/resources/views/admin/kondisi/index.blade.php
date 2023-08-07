@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="row">
            <div class="col-xl-12 col-lg-12 ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Kondisi Barang</h5>
                        <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Kondisi</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="20%">Aksi</th>
                                        <th class="text-center">Kondisi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_kondisi as $kondisi)
                                    <tr>
                                        <td class="text-center">

                                            <div class="btn-group">

                                                <a href="{{ url("delete-kondisi/$kondisi->id") }}" onclick="return confirm('Yakin Anda Menghapus Data Ini?')" class="btn btn-danger" title="Hapus Data"><span class="fa fa-trash"></span></a>
                                            </div>
                                        </td>
                                        <td>{{ $kondisi->kondisi}}</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data kondisi</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ url('store-kondisi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Kondisi </label>
                            <input type="text" class="form-control" name="kondisi" required="">
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
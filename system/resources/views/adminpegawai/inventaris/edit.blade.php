@extends('template.pegawai')
@section('content')
@include('section.pegawai')

<div class="container-fluid mt-4">
    <div class="card">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                  <h5 class="card-header">Edit Data Inventaris</h5>
            </div>
            <form action="{{ url('update-inventarispegawai', $inventaris->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Kode Barang</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="kode_barang"
                                value="{{ $inventaris->kode_barang }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Nama Barang</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="Nama_Barang"
                                value="{{ $inventaris->Nama_Barang }}">
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Prodi</label>
                            <div class="col-9 col-lg-10">
                                <select name="id_unit" id="" class="form-control">
                                    @foreach($list_unit as $unit)
                                        <option @if($unit->id == $inventaris->id_unit) selected @endif value="{{$unit->id}}">{{$unit->nama_unit}}</option>
                                    @endforeach
                                </select>
                            </div> 
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Spesifikasi</label>
                        <div class="col-9 col-lg-10">
                            <textarea class="form-control" name="Spesifikasi" required="">{{ $inventaris->Spesifikasi }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Kepemilikan</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="kepemilikan"
                                value="{{ $inventaris->kepemilikan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Tahun Pengadaan</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="number" class="form-control" name="Tahun_Pengadaan"
                                value="{{ $inventaris->Tahun_Pengadaan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Kondisi</label>
                            <div class="col-9 col-lg-10">
                                <select name="id_kondisi" id="" class="form-control">
                                    @foreach($list_kondisi as $kondisi)
                                        <option @if($kondisi->id == $inventaris->id_kondisi) selected @endif value="{{$kondisi->id}}">{{$kondisi->kondisi}}</option>
                                    @endforeach
                                </select>
                            </div> 
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Ruangan</label>
                            <div class="col-9 col-lg-10">
                                <select name="id_ruangan" id="" class="form-control">
                                    @foreach($list_ruangan as $ruangan)
                                        <option @if($ruangan->id == $inventaris->id_ruangan) selected @endif value="{{$ruangan->id}}">{{$ruangan->nama_ruangan}}</option>
                                    @endforeach
                                </select>
                            </div> 
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-md-4">
                            <img class="img-responsive" src='{{ url("public/$inventaris->Foto") }}'
                                style="object-fit: cover; position: static; width: 80%; height: 100%;">
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="inlineinput" name="Foto"
                                accept=".jpg, .png, .jpeg" value="{{ $inventaris->Foto }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                    </div>
                </form>
            
        </div>
    </div>
</div>
@endsection

@extends('template.pegawai')
@section('content')
@include('section.pegawai')

<div class="container-fluid mt-4">
    <div class="card">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <h5 class="card-header">Edit Data Ruangan</h5>
            </div>
            <div class="card-body">
                <form action="{{url('update-ruangan', $ruangan->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <input type="text" name="id_unit" value="{{$ruangan->unit->id}}" hidden>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Nama Ruangan</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Prodi</label>
                        <div class="col-9 col-lg-10">
                            <select name="id_unit" id="" class="form-control">
                                @foreach($list_unit as $unit)
                                <option @if($unit->id == $ruangan->id_unit) selected @endif value="{{$unit->id}}">{{$unit->nama_unit}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Penanggung Jawab</label>
                        <div class="col-9 col-lg-10">

                            <select name="id_pegawai" id="" class="form-control">
                                <option value="{{ $ruangan->id_pegawai}}" @if ($ruangan->id_pegawai) selected @endif>
                                    {{ $ruangan->pegawai->nama }}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-md-4">
                            <img class="img-responsive" src='{{ url("public/$ruangan->foto") }}' style="object-fit: cover; position: static; width: 50%; height: 200px;">
                        </div>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="inlineinput" name="Foto" accept=".jpg, .png, .jpeg" value="{{ $ruangan->foto }}">
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

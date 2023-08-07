@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <h5 class="card-header">Edit Data Pegawai</h5>
            </div>
            <div class="card-body">
                <form action="{{url('update-pegawai', $pegawai->id)}}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    @method("PUT")
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">NIP</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="nip" value="{{$pegawai->nip}}">
                        </div>
                    </div>
                    <div class="form-group row">
                         <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">NUP</label>
                         <div class="col-9 col-lg-10">
                             <input id="inputEmail2" type="text" class="form-control" name="nup" value="{{$pegawai->nup}}">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Nama Lengkap</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="text" class="form-control" name="nama" value="{{$pegawai->nama}}">
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="text" class="form-control" name="jenis_kelamin" value="{{$pegawai->jenis_kelamin}}">
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Username</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="text" class="form-control" name="username" value="{{$pegawai->username}}">
                            </div>
                    </div>

                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Password</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="password" class="form-control" name="confirmasi_password" value="{{$pegawai->confirmasi_password}}">
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Prodi</label>
                        <div class="col-9 col-lg-10">
                            <select name="id_unit" id="" class="form-control">
                                @foreach($list_unit as $unit)
                                <option @if($unit->id == $pegawai->id_unit) selected @endif value="{{$unit->id}}">{{$unit->nama_unit}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Gelar Depan</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="text" class="form-control" name="gelar_depan" value="{{$pegawai->gelar_depan}}">
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Gelar Belakang</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="text" class="form-control" name="gelar_belakang" value="{{$pegawai->gelar_belakang}}">
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Tempat Lahir</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="text" class="form-control" name="tempat_lahir" value="{{$pegawai->tempat_lahir}}">
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="date" class="form-control" name="tanggal_lahir" value="{{date('Y-m-d', strtotime($pegawai->tanggal_lahir))}}">
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Agama</label>
                            <div class="col-9 col-lg-10">
                                <input id="inputEmail2" type="text" class="form-control" name="agama" value="{{$pegawai->agama}}">
                            </div>
                    </div>
                    <div class="form-group row">
                             <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                             <div class="col-md-4">
                                 <img class="img-responsive" src='{{ url("public/$pegawai->foto") }}'style="object-fit: cover; position: static; width: 50%; height: 200px;">
                             </div>
                             <div class="col-md-6">
                                     <input type="file" class="form-control" id="inlineinput" name="foto" accept=".jpg, .png, .jpeg" value="{{ $pegawai->foto }}">
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
@extends('template.admin')
@section('content')
@include('section.admin')

<div class="container-fluid mt-4">
    <div class="card">
            <div class="card-header">
                <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><span
                        class="fa fa-plus" ></span> Tambah Pegawai</a>
                <div class="card-title" style="font-size: 25px;">Data Pegawai </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">NIP</th>
                                <th class="text-center">NUP</th>
                                <th class="text-center">Nama Lengkap</th>
                                <th class="text-center">Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pegawai as $pegawai)
                                <tr>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ url("show-pegawai/$pegawai->id") }}" class="btn btn-info"
                                                title="Lihat Data"><span class="fa fa-info"></span></a>

                                            <a href="{{ url("edit-pegawai/$pegawai->id") }}" class="btn btn-warning"
                                                title="Edit Data"><span class="fa fa-edit"></span></a>

                                            <a href="{{ url("delete-pegawai/$pegawai->id") }}"
                                                onclick="return confirm('Yakin Anda Menghapus Data Ini?')"
                                                class="btn btn-danger" title="Hapus Data"><span
                                                    class="fa fa-trash"></span></a>
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $pegawai->nip }}</td>
                                    <td class="text-center">{{ $pegawai->nup }}</td>
                                    <td class="text-center">{{ $pegawai->nama }}</td>
                                    <td class="text-center">{{ $pegawai->jenis_kelamin }}</td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
    


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
           <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                 </div>
                 <div class="modal-body">
                    <form action="{{ url('store-pegawai') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">NIP</label>
                            <input type="text" class="form-control" name="nip" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">NUP</label>
                            <input type="text" class="form-control" name="nup" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input type="text" class="form-control" name="username" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="password" class="form-control" name="confirmasi_password" required="">
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">Prodi</label>
                            <select name="id_unit" class="form-control">
                                <option value=""> Pilih Unit</option>
                                @foreach($list_unit as $unit)
                                    <option value="{{$unit->id}}">{{$unit->nama_unit}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Gelar Depan</label>
                            <input type="text" class="form-control" name="gelar_depan" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Gelar Belakang</label>
                            <input type="text" class="form-control" name="gelar_belakang" required="">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_Lahir">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_Lahir">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Agama</label>
                            <input type="text" class="form-control" name="agama" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Foto</label>
                            <input type="file" class="form-control" name="foto" required=""
                                accept=".jpg, .png, .jpeg">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                    </div>
                    </form>
                </div>
                
           </div>
        </div>
     </div>
</div>
@endsection

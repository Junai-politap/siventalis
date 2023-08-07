@extends('template.admin')
@section('content')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Data Profil Pimpinan</h5>
                        <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Jabatan</th>
                                        <th class="text-center">Foto</th>
                                            
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($list_homeconfig as $profil_pimpinan)
                             <tr>
                                <td class="text-center">
                                    <div class="btn-group">
                               

                                        <a href="{{url("edit-profil/$profil_pimpinan->id")}}" class="btn btn-warning" title="Edit Data"><span class="fa fa-edit"></span></a>

                                        <a href="{{url("delete-profil/$profil_pimpinan->id")}}" 
                                        onclick="return confirm('Yakin Anda Menghapus Data Ini?')" class="btn btn-danger" title="Hapus Data"><span class="fa fa-trash"></span></a>
                                    </div>
                                </td>
                                <td class="text-center">{{$profil_pimpinan->Nama}}</td>
                                <td class="text-center">{{$profil_pimpinan->Jabatan}}</td>
                                <td class="text-center">
                                    <img src="{{url("public/$profil_pimpinan->Foto")}}" alt="" style="object-fit: cover; position: static; width: 40%; height: 50%;">
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
                        <h5 class="mb-0">Data Deskripsi</h5>
                        <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal-1"><span class="fa fa-plus"></span> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Nama Label</th>
                                        <th class="text-center">Deskripsi</th>
                                            
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($list_deskripsi as $homeconfig)
                             <tr>
                                <td class="text-center">
                                    <div class="btn-group">
                                    
                                        <a href="{{url("edit-deskripsi/$homeconfig->id")}}" class="btn btn-warning" title="Edit Data"><span class="fa fa-edit"></span></a>

                                        <a href="{{url("delete-deskripsi/$homeconfig->id")}}" 
                                        onclick="return confirm('Yakin Anda Menghapus Data Ini?')" class="btn btn-danger" title="Hapus Data"><span class="fa fa-trash"></span></a>
                                    </div>
                                </td>
                                <td class="text-center">{{$homeconfig->Nama}}</td>
                                <td class="text-center">{{substr($homeconfig->Deskripsi, 0,50)}}</td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pimpinan</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-profil') }}" method="post" enctype="multipart/form-data">
                    @csrf
                
                    <div class="form-group">
                        <label class="control-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="Nama" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Jabatan</label>
                        <input type="text" class="form-control" name="Jabatan" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Foto</label>
                        <input type="file" class="form-control" name="Foto" required="" accept=".jpg, .png, .jpeg">
                    </div>
   			
                    <div class="modal-footer">
                     <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Deskripsi Politap</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-deskripsi') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Nama Label</label>
                        <input class="form-control" name="Nama" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Deskripsi</label>
                        <textarea class="form-control" name="Deskripsi" required=""></textarea>
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
@endsection
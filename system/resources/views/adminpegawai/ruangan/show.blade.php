@extends('template.pegawai')
@section('content')
@include('section.pegawai')

<div class="container-fluid mt-4">
    <div class="card">
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <div class="card-header">
                <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Data ruangan</a>
                <div class="card-title">Data ruangan </div>
            </div>
            <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            @foreach($list_ruangan as $ruangan)
                            @if($ruangan->id_unit == $unit->id)
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{url("public/$ruangan->foto")}}" class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">
                                    <h5 class="card-title">{{$ruangan->nama_ruangan}}</h5> 
                                    <h5 class="card-title">{{$ruangan->pegawai->nama}}</h5>   
                                       <div class="bnt-group">
                                       
                                       <a href="{{ url("detail-ruanganpegawai/$ruangan->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                           <a href="{{ url("edit-ruanganpegawai/$ruangan->id") }}" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                           <a href="{{ url("delete-ruanganpegawai/$ruangan->id") }}"
                                                onclick="return confirm('Yakin Anda Menghapus Data Ini?')" class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</a>
                                       </div> 
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <!-- Inner -->
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data ruangan</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-ruangan') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
        <input type="text" value="{{$unit->id}}" name="id_unit" hidden>
                    <div class="form-group">
                        <label class="control-label">Nama Ruangan</label>
                        <input type="text" class="form-control" name="nama_ruangan" required="">
                    </div>
  
                    <div class="form-group">
                            <label class="control-label">Penanggung Jawab Ruangan</label>
                            <select name="id_pegawai" class="form-control">
                                <option value=""> Pilih Penanggung Jawab</option>
                                @foreach ($list_pegawai as $pegawai)
                                @if($pegawai->id_unit == $unit->id)
                                    <option value="{{ $pegawai->id}}"> {{ $pegawai->nama }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                    <div class="form-group">
                        <label class="control-label">Foto</label>
                        <input type="file" class="form-control" name="foto" required="" accept=".jpg, .png, .jpeg">
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div 


@endsection

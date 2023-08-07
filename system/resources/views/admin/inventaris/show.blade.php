@extends('template.admin')
@section('content')
@include('section.admin')

<div class="container-fluid mt-4">
    <div class="card">
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <div class="card-header">
                <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Data Inventaris</a>
                <div class="card-title">Data Inventaris prodi</div>
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
                                        <h5 class="card-title">Penanggung Jawab: {{ $ruangan->pegawai->nama }}</h5>
                                        <div class="bnt-group">

                                            <a href="{{ url("detail/$ruangan->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
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
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data inventaris</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-inventaris') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="text" value="{{$unit->id}}" name="id_unit" hidden>
                    <div class="form-group">
                        <label class="control-label">Kode Barang</label>
                        <input type="text" class="form-control" name="kode_barang" required="">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Nama Barang</label>
                        <input type="text" class="form-control" name="Nama_Barang" required="">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Ruangan</label>
                        <select name="id_ruangan" class="form-control">
                            <option value=""> Pilih Ruangan</option>
                            @foreach ($list_ruangan as $ruangan)
                            @if($ruangan->id_unit == $unit->id)
                            <option value="{{ $ruangan->id }}"> {{ $ruangan->nama_ruangan }}
                            </option>
                            @endif
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Spesifikasi</label>
                        <textarea class="form-control" name="Spesifikasi" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Kepemilikan</label>
                        <input type="text" class="form-control" name="kepemilikan" required="">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Nomor BMN</label>
                        <input type="text" class="form-control" name="no_bmn" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Tahun Pengadaan</label>

                        <input type="text" class="form-control" name="Tahun_Pengadaan" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Kondisi</label>
                        <select name="id_kondisi" class="form-control">
                            <option value=""> Pilih Kondisi</option>
                            @foreach ($list_kondisi as $kondisi)
                            <option value="{{ $kondisi->id }}"> {{ $kondisi->kondisi }}
                            </option>
                            @endforeach
                        </select>
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
</div @endsection
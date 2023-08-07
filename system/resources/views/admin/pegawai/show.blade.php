@extends('template.admin')
@section('content')
@include('section.admin')

<section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">

                <div class="col-lg-4">
                    <div class="card mb-8">
                        <div class="card-body text-center">
                            <img src="{{ url("public/$pegawai->foto") }}" style="width: 80%; height: 100%;">

                            <p class="text-muted mb-1"></p>
                            <p class="text-muted mb-4"></p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NIP</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->nip }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">NUP</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->nup }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nama Lengkap</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->nama }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->jenis_kelamin }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gelar Depan</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->gelar_depan}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gelar Belakang</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->gelar_belakang }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Username</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->username }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tempat Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->tempat_lahir }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Tanggal Lahir</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ date('Y-m-d', strtotime($pegawai->tanggal_lahir)) }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Agama</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $pegawai->agama }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Prodi</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$pegawai->unit->nama_unit}}</p>
                                </div>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
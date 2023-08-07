@extends('template.web')
@section('content')
@include('section.menu')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@csrf
<br><br><br><br>
<main id="main">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h2>{{ $ruangan->unit->nama_unit }}</h2>
                <h2 style="color: black; text-align:center; margin-top: -2%">{{ $ruangan->nama_ruangan }}</h2>
            </div>

            <div class="row gy-4">
                @foreach ($list_inventaris as $inventaris)
                @if ($inventaris->id_ruangan == $ruangan->id)
                <div class="col-lg-3">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper">
                                <img src="{{ url("public/$inventaris->Foto") }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="portfolio-info" style="margin-top: 0%">

                        <ul>
                            <li style="margin-top: -4%"><strong>Nama Barang</strong>:
                                {{ $inventaris->Nama_Barang }}
                            </li>
                            {{-- <li><strong>Spesifikasi</strong>: {{ $inventaris->Spesifikasi }}</li> --}}
                            <li style="margin-top: 0%"><strong>Tahun Pengadaan</strong>:
                                {{ $inventaris->Tahun_Pengadaan }}
                            </li>
                            <li style="margin-top: -1%"><strong>Lokasi</strong>:
                                {{ $inventaris->ruangan->nama_ruangan }}
                            </li>
                        </ul>

                        <button class="btn btn-info" data-toggle="modal" data-target="#modal-lg{{ $inventaris->id }}">
                            <span class="fa fa-info"> Detail</span>
                        </button>
                        <div class="modal fade" id="modal-lg{{ $inventaris->id }}">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-center" style="margin-left: 35%">
                                            {{ $inventaris->Nama_Barang }}
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    @csrf
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <div class="col-sm-12">
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Nama
                                                        Barang</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->Nama_Barang }}</label>
                                                    </div>
                                                </div>
                                                <!-- <hr style="margin-top: -2%;"> -->
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Kepemilikan
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->kepemilikan }}</label>
                                                    </div>
                                                </div>
                                                <!-- <hr style="margin-top: -2%;"> -->
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Tahun
                                                        Pengadaan</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->Tahun_Pengadaan }}</label>
                                                    </div>
                                                </div>
                                                <!-- <hr style="margin-top: -2%;"> -->
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Kondisi</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->kondisi->kondisi }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Jumlah</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->jumlah }}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Nomor BMN</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->no_bmn }}</label>
                                                    </div>
                                                </div>
                                                <!-- <hr style="margin-top: -2%;"> -->
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Lokasi</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->ruangan->nama_ruangan }}</label>
                                                    </div>
                                                </div>
                                                <!-- <hr style="margin-top: -2%;"> -->
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Program Studi</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {{ $inventaris->unit->nama_unit }}</label>
                                                    </div>
                                                </div>
                                                <!-- <hr style="margin-top: -2%;"> -->
                                                <div class="form-group row" style="margin-top: -3%;">
                                                    <label for="inputEmail3" class="col-sm-3 ">Spesifikasi</label>
                                                    <div class="col-sm-9">
                                                        <label class="">
                                                            : {!! nl2br( $inventaris->Spesifikasi )!!}</label>
                                                    </div>
                                                </div>
                                                <!-- <hr style="margin-top: -2%;"> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
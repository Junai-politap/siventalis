@extends('template.pegawai')
@section('content')
@include('section.pegawai')


<div class="container-fluid mt-4">
    <div class="card">
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <div class="card-header">

                <div class="card-title">Data Inventaris prodi {{$pegawai->unit->nama_unit}}</div>
            </div>
            <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            @foreach($dt_ruangan as $ruangan)
                            @if($ruangan->id_unit == $pegawai->unit->id)
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{url("public/$ruangan->foto")}}" class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">



                                        <h5 class="card-title">{{$ruangan->nama_ruangan}}</h5>
                                        <h5 class="card-title">Penanggung Jawab: {{ $ruangan->pegawai->nama }}</h5>
                                        <div class="bnt-group">

                                            <a href="{{ url("show-inventarispegawai/$ruangan->id") }}" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
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

@endsection
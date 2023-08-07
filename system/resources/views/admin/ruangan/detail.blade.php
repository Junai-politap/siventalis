@extends('template.admin')
@section('content')
@include('section.admin')

<div class="container-fluid mt-4">
    <div class="card">
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <div class="card-header">
            <div class="card-title" style="font-size: 25px;">Data Inventaris Ruangan</div>
            </div>
            <div class="carousel-inner py-4">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            @foreach($list_inventaris as $inventaris)
                            @if($inventaris->id_ruangan == $ruangan->id)
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{url("public/$inventaris->Foto")}}" class="card-img-top" alt="Waterfall" />
                                    <div class="card-body">
                                     
                                    <h5 class="card-title">{!! DNS1D::getBarcodeSVG($inventaris->kode_barang, "C39", 1, 40, '#2A3239') !!}</h5>
                                   
                                    <h5 class="card-title">{{$inventaris->Nama_Barang}}</h5>
                                    <h5 class="card-title">Kondisi : {{$inventaris->kondisi->kondisi}}</h5>

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

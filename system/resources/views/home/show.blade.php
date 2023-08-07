@extends('template.web')
@section('content')
@include('section.menu')

@csrf
<br><br><br>
<main id="main">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="section-title">
                <h2>{{$unit->nama_unit}}</h2>
            </div>
            
            <div class="row portfolio-container">
                @foreach($list_ruangan as $ruangan)
                @if($ruangan->id_unit == $unit->id)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <a href="{{url("showinventaris/$ruangan->id")}}">
                        <div class="portfolio-wrap">
                            <img src="{{ url("public/$ruangan->foto") }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $ruangan->nama_ruangan }}</h4>
                                <p>{{ $ruangan->pegawai->nama }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ url("public/$ruangan->foto") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $ruangan->nama_ruangan }}"><i class="bx bx-check"></i></a>
                                    <a href="{{url("showinventaris/$ruangan->id")}}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
</main>


@endsection
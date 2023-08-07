@extends('template.web')
@section('content')

@include('section.menu')
<br><br>
<main id="main">
  <section id="team" class="team">
    <div class="container">
      <div class="section-title">
        <h2>Profil Pimpinan </h2>
        <h2>Masa Bakti Peridode 2019-2022</h2>
      </div>

      <div class="row">
        @foreach($list_homeconfig as $profil_pimpinan)
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="member">
            <img src="{{url("public/$profil_pimpinan->Foto")}}"class ="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>{{$profil_pimpinan->Nama}}</h4>
                <span>{{$profil_pimpinan->Jabatan}}</span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</main>
 
@endsection

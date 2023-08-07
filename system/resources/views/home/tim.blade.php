@extends('template.web')
@section('content')

@include('section.menu')
<br><br>
<main id="main">
  <section id="team" class="team">
    <div class="container">
      <div class="section-title">
        <h2>Tim Siventalis</h2>
      </div>

      <div class="row">
        @foreach($list_tim as $tim)
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="member">
            <img src="{{url("public/$tim->foto")}}" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>{{$tim->nama}}</h4>
                <span>{{$tim->jabatan}}</span>
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

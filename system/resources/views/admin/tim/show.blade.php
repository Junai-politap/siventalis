@extends('template.admin')
@section('content')
@include('section.admin')
    <div class="container-fluid dashboard-content ">


        <div class="row">
            <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header p-4">
                        <div class="text-center">
                            <h3 class="mb-0">Detail Data tim</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <img src="{{ url("public/$tim->foto") }}" alt=""
                                    style="object-fit: cover; position: static; width: 80%; height: 100%;">
                            </div>
                            <div class="col-sm-4">
                                <div>Nama</div>
                                <div>Jabatan</div>
                            </div>
                            <div class="col-sm-4">
                                <div>{{ $tim->nama }}</div>
                                <div>{{ $tim->jabatan }}</div>
                            </div>
                        </div>
                        <div class="table-responsive-sm">

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

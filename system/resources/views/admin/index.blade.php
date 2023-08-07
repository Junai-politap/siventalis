@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid dashboard-content ">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Selamat Datang di Siventalis {{$user->nama}}</h2>
            </div>
        </div>
    </div>


    <div class="ecommerce-widget">

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Inventaris Barang Milik Prodi</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">Jumlah</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span>{{$inventaris}}</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Inventaris Barang Milik Negara</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">Jumlah</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span>{{$bmn}}</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Inventaris Barang Rusak</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">Jumlah</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                            <span>{{$rusak}}</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue3"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Inventaris Barang Baik</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">Jumlah</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                            <span>{{$baik}}</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
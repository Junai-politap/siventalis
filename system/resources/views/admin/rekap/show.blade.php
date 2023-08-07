@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                    <div class="card-title" style="font-size: 25px;">Data Inventaris</div>
                    </div>
                    <div class="card-body">
                        <div class="box-header with-border">
               
                            <div class="btn-group">
                            <a href="{{ url("show-cetak/$unit->id") }}" class="btn btn-info" ><span class="fa fa-barcode"></span>Cetak Barcode</a>
                            </div>
                         
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                               
                           
                                    <th class="text-center">Barcode</th>
                                        <th class="text-center">Kode Barang</th>
                                        <th class="text-center">Nama Barang</th>
                                        <th class="text-center">Kondisi</th>
                                        <th class="text-center">Nama Ruangan</th>
                                        <th class="text-center">Prodi</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_inventaris as $inventaris)
                                    @if($inventaris->id_unit == $unit->id)
                                        <tr> 
                                        
                                            <td>{!! DNS1D::getBarcodeSVG($inventaris->kode_barang, "C39", 1, 40, '#2A3239') !!}</td>
                                            <td>{{ $inventaris->kode_barang}}</td>
                                            <td>{{ $inventaris->Nama_Barang }}</td>
                                            <td>{{ $inventaris->kondisi->kondisi }}</td>
                                            <td>{{ $inventaris->ruangan->nama_ruangan }}</td>
                                            <td>{{ $inventaris->ruangan->unit->nama_unit }}</td>
                                          
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    @endsection

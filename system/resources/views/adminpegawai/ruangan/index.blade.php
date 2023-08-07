@extends('template.pegawai')
@section('content')
@include('section.pegawai')

<div class="container-fluid mt-4">
    <div class="card">

        <div class="card-body">
            <div class="card-title" style="font-size: 25px;">Data Ruangan</div>
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="20%">Aksi</th>
                            <th class="text-center">Prodi</th>
                            <th class="text-center">Jumlah Ruangan</th>
                            <th class="text-center">Jumlah Inventaris</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_unit as $unit)
                        @if($unit->id == $pegawai->id_unit)
                        <tr>
                            <td class="text-center">

                                <a href="{{ url("show-ruanganpegawai/$unit->id") }}" class="btn btn-info" title="Lihat Data"><span class="fa fa-info"></span></a>
                            </td>

                            <td class="text-center">{{ $unit->nama_unit }}</td>
                            <td class="text-center">
                                @foreach ($list_ruangan as $ruangan)

                                {{$data_ruangan->filter(function ($q) use ($unit){
                                            return $unit->id == $q->id_unit;
                                        })->count('id_unit')}}

                                @endforeach
                            </td>

                            <td class="text-center">
                                @foreach ($list_inventaris as $inventaris)

                                {{$data_inventaris->filter(function ($q) use ($unit){
                                            return $unit->id == $q->id_unit;
                                        })->count('id_unit')}}

                                @endforeach
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
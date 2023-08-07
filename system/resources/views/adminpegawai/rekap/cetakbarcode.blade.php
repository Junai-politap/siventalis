@extends('template.pegawai')
@section('content')


<style type="text/css">
    /* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: 1cm;
        margin-left: -5%;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }

    @page {
        size: A4;
        margin: 0;
    }

    @media print {

        html,
        body {
            width: 320mm;
            height: 440mm;
        }

        .page {
            margin: 5mm;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>

<body>
    <div class="book">
        <div class="page">
            <div class="subpage">
                <div class="row">
                    @foreach ($list_inventaris as $inventaris)
                    @if($inventaris->id_unit == $pegawai->id_unit)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        {!! DNS1D::getBarcodeSVG($inventaris->kode_barang, "C39", 1, 40, '#2A3239') !!}
                                    </td>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</body>

<script type="text/javascript">window.print();</script> 
@endsection
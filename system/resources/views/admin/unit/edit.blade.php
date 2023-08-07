@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid mt-4">
    <div class="card">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <h5 class="card-header">Edit Data Prodi</h5>
            </div>
            <div class="card-body">
                <form action="{{url('update-unit', $unit->id)}}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    @method("PUT")
                    <div class="form-group row">
                         <label for="inputEmail2" class="col-3 col-lg-2 col-form-label">Nama Prodi</label>
                         <div class="col-9 col-lg-10">
                             <input id="inputEmail2" type="text" class="form-control" name="nama_unit" value="{{$unit->nama_unit}}">
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                        </div>
                </form>
          </div>
    </div>
</div>
@endsection
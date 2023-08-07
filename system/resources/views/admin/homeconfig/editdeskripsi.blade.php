@extends('template.admin')
@section('content')
@include('section.admin')
<div class="container-fluid mt-5">
    <div class="card">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
           
                <h5 class="card-header">Edit Deskripsi</h5>
            </div>
            <div class="card-body">
                <form action="{{url('update-deskripsi', $homeconfig->id)}}" method="post" enctype="multipart/form-data"> 
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label class="control-label">Nama Label</label>
                        <input class="form-control" name="Nama" value="{{$homeconfig->Nama}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Deskripsi</label>
                        <textarea class="form-control" name="Deskripsi"> {{$homeconfig->Deskripsi}}</textarea>
                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
                        </div>
                </form>
          </div>
    </div>
</div>
@endsection
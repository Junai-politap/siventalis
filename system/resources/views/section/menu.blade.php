@section('menu')
    <ul>
        @foreach ($list_unit as $unit)
        <li><a href="{{url("show/$unit->id")}}">{{$unit->nama_unit}}</a></li>
        @endforeach
    </ul>
@endsection 
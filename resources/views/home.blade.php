@extends('layouts.base')

@section('documentTitle')
    Train Time
@endsection

@section('content')
<div class="rowcontainer-fluid bg-info">
    <div class="col">
    <div class="d-flex text-light flex-wrap justify-content-center">
        @foreach ($trains as $train)
        <ul class="card w-25 bg-warning m-2 p-4 shadow-lg list-group">
            <li class="list-group-item"> {{ $train->society}} </li>
            <li class="list-group-item"> {{ $train->train_id}} </li>
            <li class="list-group-item"><strong>From: </strong>{{ $train->departure_station}}</li>
            <li class="list-group-item"><strong>To: </strong>{{ $train->arrival_station}}</li>
            <li class="list-group-item"><strong>Departure Time: </strong>{{$train->departure_date}} {{ $train->departure_time}}</li>
            <li class="list-group-item"><strong>Arrival Time: </strong>{{$train->arrival_date}} {{ $train->arrival_time}}</li>
            <li class="list-group-item">
                @if ($train->on_time == false)
                <strong>Delay</strong>
                @else
                <strong>In Time.</strong>
                @endif
            </li>
            
            @if ($train->is_cancelled == true)
            <li class="list-group-item">
                <strong>Canceled.</strong>
            </li>
            @endif
            <li class="list-group-item text-center">
                <a href="{{ route('show', $train->id) }}" class="btn btn-primary">Gotta Catch 'Em All!</a>
            </li>
        </ul>
        @endforeach
    </div>
</div>
    <div class="container-fluid bg-info row">
        <div class="col d-flex justify-content-center pt-4">
            {{$trains->links()}}
        </div>
    </div>
@endsection
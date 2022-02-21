@extends('layouts.base')

@section('documentTitle')
    Train Time
@endsection

@section('content')
    <div class="container-fluid d-flex text-light flex-wrap justify-content-center bg-info">
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

        </ul>
        @endforeach
    </div>
@endsection
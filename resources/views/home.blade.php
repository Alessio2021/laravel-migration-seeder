@extends('layouts.base')

@section('documentTitle')
    Train Time
@endsection

@section('content')
        @foreach ($trains as $train)
    <ul>
        <li> {{ $train->society}} </li>
        <li> {{ $train->train_id}} </li>
        <li>From: {{ $train->departure_station}}</li>
        <li>To: {{ $train->arrival_station}}</li>
        <li>Departure Time: {{$train->departure_date}} {{ $train->departure_time}}</li>
        <li>Arrival Time: {{ $train->arrival_time}}</li>
        <li>
            @if ($train->on_time == false)
            In Time.
            @else
            Treno in orario.
            @endif
        </li>
        
        @if ($train->is_cancelled == true)
        <li>
            Canceled.
        </li>
        @endif

    </ul>
    @endforeach
@endsection
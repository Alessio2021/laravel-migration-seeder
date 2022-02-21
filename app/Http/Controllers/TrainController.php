<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() 
    {
        $trains = Train::paginate(15);
        $data = ['trains' => $trains];
        return view('home', $data);
    }

    public function createTrain() 
    {
        // $train = new Train();
        // $train->fill([
        //     'society' => 'Ferrovie dello Stato',
        //     'departure_station' => 'Milano',
        //     'arrival_station' => 'Palermo',
        //     'departure_time' => '11:00:00',
        //     'arrival_time' => '19:00:00',
        //     'train_id' => 'FS4560',
        //     'wagons' => 7,
        //     'on_time' => 1,
        //     'canceled' => 0,
        // ]);
        // $train->save();
    }
    public function show(Train $train)
    {
        return view('show', compact('train'));
    }
}



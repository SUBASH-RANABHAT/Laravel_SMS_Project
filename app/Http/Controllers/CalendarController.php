<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CalendarController extends Controller
{

    public function __construct(Event $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        $event = array();
        $datas = Event::all();
        foreach ($datas as $data)
            $event[] = [
                'title' => $data->title,
                'start' => $data->start_date,
                'end' => $data->end_date,
            ];
        return view('Backend.Calendar.calendar', ['event' => $event]);
    }

    public function store(Request $req)
    {
        $event =  Event::create([
            'title' => $req->title,
            'start_date' => $req->start_date,
            'end_date' => $req->end_date,
        ]);
        return response()->json($event);
    }

    public function event()
    {
        return view('Backend.Calendar.addEvent');
    }

    public function event_store(Request $req)
    {
        foreach ($req->inputs as $key => $value) {
            Event::create($value);
        }

        return view('Backend.Calendar.addEvent')->with('message', "Event added Successfully");
    }
}

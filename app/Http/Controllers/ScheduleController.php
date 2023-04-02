<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorScheduleRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct(Schedule $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return view('Backend.teacher.schedule');
    }

    public function storeSchedule(StorScheduleRequest $request)
    {
        $schedule = $this->model->create([
            'teacher_id' => $request->name,
            'class_id' => $request->class,
            'subject' => $request->subject,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        return view('Backend.teacher.schedule_post')->with('schedule', $schedule);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SroreSchoolClassRequest;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(SchoolClass $model)
    {
        $this->model = $model;
    }


    public function index()
    {
        return view('Backend.teacher.class_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SroreSchoolClassRequest $request)
    {
        $classes = $this->model->create([
            'class' => $request->class,
            'section' => $request->section,
            'building_block' => $request->building_block,
        ]);
        $classes = $this->model->get();
        return view('Backend.teacher.class', compact('classes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $classes = $this->model->get();
        return view('Backend.teacher.class', compact('classes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SroreSchoolClassRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classes = $this->model->get();
        $delete = SchoolClass::find($id);
        if ((!is_null($delete))) {
            $delete->delete();
            // return view('Backend.teacher.view', compact('teacher'));
            return redirect()->back();
        }
    }
}

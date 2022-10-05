<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\City;
use App\Models\Employment;
use App\Models\Job;
use App\Models\Task;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retornar a una vista con las carreras cargadas
        return view('form', [
            'careers' => Career::all(),
            'cities' => City::all(),
            'employments' => Employment::all(),
            'tasks' => Task::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job(
            [
                "jobname" => $request->get("jobname"),
                "business" => $request->get("business"),
                "email" => $request->get("email"),
                "activities" => $request->get("activities"),
                "softskills" => $request->get("softskills"),
                "hardskills" => $request->get("hardskills"),
                "knowledge" => $request->get("knowledge"),
                "salary" => $request->get("salary"),
                "business_turn" => $request->get("business_turn"),
                "english" => $request->get("english") == "on" ? 1 : 0,
            ]
        );
        $job->save();
        return redirect()->route('empleos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('edit')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->update(
            [
                "jobname" => $request->get("jobname"),
                "business" => $request->get("business"),
                "email" => $request->get("email"),
                "activities" => $request->get("activities"),
                "softskills" => $request->get("softskills"),
                "hardskills" => $request->get("hardskills"),
                "knowledge" => $request->get("knowledge"),
                "salary" => $request->get("salary"),
                "business_turn" => $request->get("business_turn"),
                "english" => $request->get("english") == "on" ? 1 : 0,
                "approved" => $request->get("approved") == "on" ? 1 : 0,
            ]
        );
        return redirect()->route('empleos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->route('empleos');
    }
}

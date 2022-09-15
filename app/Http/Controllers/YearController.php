<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ages = Year::orderBy('id', 'desc')->get();
        return view('years.index', [
            'ages' => $ages,
            'title' => 'Años',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('years.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Year::create($request->all());
        return redirect()->route('years.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function show(Year $age)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function edit(Year $age)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Year $age)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Year::destroy($id);
        return redirect('/years');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Age;
use Illuminate\Http\Request;

class AgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ages = Age::orderBy('id', 'desc')->get();
        return view('ages.index', [
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
        return view('ages.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Age::create($request->all());
        return redirect()->route('años.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function show(Age $age)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Age  $age
     * @return \Illuminate\Http\Response
     */
    public function edit(Age $age)
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
    public function update(Request $request, Age $age)
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
        Age::destroy($id);
        return redirect()->route('años.index');
    }
}

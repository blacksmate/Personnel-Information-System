<?php

namespace App\Http\Controllers;

use App\Models\PIS;
use Illuminate\Http\Request;

class PISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  function for creating designation
    public function createdesignation()
    {
        return view('layouts.designation-management-create');

    }
    public function create()
    {
        //
        return view('layouts.designation-management-create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PIS  $pIS
     * @return \Illuminate\Http\Response
     */
    public function show(PIS $pIS)
    {
        //
        return view('layouts.pds');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PIS  $pIS
     * @return \Illuminate\Http\Response
     */
    public function edit(PIS $pIS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PIS  $pIS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PIS $pIS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PIS  $pIS
     * @return \Illuminate\Http\Response
     */
    public function destroy(PIS $pIS)
    {
        //
    }
}

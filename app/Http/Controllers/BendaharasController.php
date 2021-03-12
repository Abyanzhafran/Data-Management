<?php

namespace App\Http\Controllers;

use App\bendahara;
use Illuminate\Http\Request;

class BendaharasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bendahara.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\bendahara  $bendahara
     * @return \Illuminate\Http\Response
     */
    public function show(bendahara $bendahara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bendahara  $bendahara
     * @return \Illuminate\Http\Response
     */
    public function edit(bendahara $bendahara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bendahara  $bendahara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bendahara $bendahara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bendahara  $bendahara
     * @return \Illuminate\Http\Response
     */
    public function destroy(bendahara $bendahara)
    {
        //
    }
}

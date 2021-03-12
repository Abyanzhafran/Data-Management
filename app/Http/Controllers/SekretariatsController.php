<?php

namespace App\Http\Controllers;

use App\sekretariat;
use Illuminate\Http\Request;

class SekretariatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sekretariat.index');
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
     * @param  \App\sekretariat  $sekretariat
     * @return \Illuminate\Http\Response
     */
    public function show(sekretariat $sekretariat)
    {
        return view('sekretariat.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sekretariat  $sekretariat
     * @return \Illuminate\Http\Response
     */
    public function edit(sekretariat $sekretariat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sekretariat  $sekretariat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sekretariat $sekretariat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sekretariat  $sekretariat
     * @return \Illuminate\Http\Response
     */
    public function destroy(sekretariat $sekretariat)
    {
        //
    }
}

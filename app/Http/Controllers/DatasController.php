<?php

namespace App\Http\Controllers;

use App\data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl_user = DB::table('tbl_user')->get();
        return view('data.index', ['tbl_user' => $tbl_user]);
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
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(data $data)
    {
        $tbl_user = DB::table('tbl_user')->get();
        return view('data.edit', compact('data'));
        //return view('data.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data $data)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required'
        ]);
        
        data::where('id', $data->id)
                ->update([
                    'username' => $request->username,
                    'email' => $request->email,
                    'jabatan' => $request->jabatan,
                    'password' => $request->password
                ]);
        return redirect('/data')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(data $data)
    {
        data::destroy($data->id);
        return redirect('/data')->with('status', 'Data Berhasil Dihapus');
    }
}

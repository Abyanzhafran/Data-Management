<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl_employee = DB::table('tbl_employee')->get();
        return view('employee.index', ['tbl_employee' => $tbl_employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //employee::create([
        //    'username' => $request->username,
        //    'email' => $request->email,
        //    'jabatan' => $request->jabatan,
        //    'password' => $request->password
        //]);

        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required'
        ]);

        employee::create($request->all());
        return redirect('/employee')->with('status', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //$tbl_employee = DB::table('tbl_employee')->get();
        return view('employee.detail', compact('employee')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee) 
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required'
        ]);
        
        employee::where('id', $employee->id)
                ->update([
                    'username' => $request->username,
                    'email' => $request->email,
                    'jabatan' => $request->jabatan,
                    'password' => $request->password
                ]);
        return redirect('/employee')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        employee::destroy($employee->id);
        return redirect('/employee')->with('status', 'Data Berhasil Dihapus');
    }
}

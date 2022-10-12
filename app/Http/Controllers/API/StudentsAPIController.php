<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Students::all();
        $response = [
            'response' => 'success',
            'data' => $data
        ];
        return response()->json($response, 200);
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
        $request->validate([
            'nis' => 'required|integer|unique:students',
            'name' => 'required',
        ]);

        $students = Students::create($request->all());
        $response = [
            'response' => 'Success',
            'data' => $students
        ];
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Students::find($id);
        $response = [
            'response' => 'success',
            'data' => $data
        ];
        return response()->json($response, 200);
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
    public function update(Request $request, $id)
    {
        $students = Students::find($id);
        $request->validate([
            'name' => 'string',
        ]);
        // dd($request);
        $students->update($request->all());
        $response = [
            'response' => 'Data Updated',
            'data' => $students
        ];
        return response($response, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::findOrFail($id);
        $students->delete();
        $response = [
            'response' => 'Data berhasil di hapus',
        ];
        return response()->json($response, 200);
    }
}

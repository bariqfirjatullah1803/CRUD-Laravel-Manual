<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Students::orderByDesc('id')->paginate(10);
        // dd($data);
        return view('students-page.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Majors::all();
        return view('students-page.create', compact('data'));
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

        Students::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Product created successfully.');        // $students = $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['students'] = Students::findOrFail($id);
        $data['majors'] = Majors::all();
        return view('students-page.edit', compact('data'));
        // dd($students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|integer',
            'name' => 'required',
        ]);
        $students = Students::findOrFail($id);
        $students->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Student update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::findOrFail($id);
        $students->delete();
        return redirect()->route('students.index')
        ->with('success','Student delete successfully.');    }
}

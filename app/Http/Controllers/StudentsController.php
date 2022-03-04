<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\StudentEducation;

class StudentsController extends Controller
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
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'country'=>'required',
            'state'=>'required',
            'district'=>'required',
        ]);
        $addmore=$request->get('addmore');
        
        $student = new Student([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'address' => $request->get('address'),
            'gender' => $request->get('gender'),
            'district' => $request->get('district'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'educational_details' => json_encode($addmore)
        ]);
        $student->save();
        
        return redirect('/')->with('success', 'Student Registered Successfully!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

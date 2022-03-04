<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\DB;

class StudentMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           $students = DB::table('students')
            ->join('states', 'states.state_id', '=', 'students.state')
            ->join('districts', 'districts.city_id', '=', 'students.district')
            ->select('students.*', 'states.state_name', 'districts.city_name')
            ->latest()->paginate(5);
        return view('admin.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'name' => 'required',
            'email' => 'required',
        ]);
  
        Student::create($request->all());
   
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$student = Student::find($id);
        $students = DB::table('students')
            ->join('states', 'states.state_id', '=', 'students.state')
            ->join('districts', 'districts.city_id', '=', 'students.district')
            ->select('students.*', 'states.state_name', 'districts.city_name')
            ->where('id',$id)
            ->first();
        return view('admin.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('admin.edit',compact('students','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {//dd(request('addmore'));
        $students = Student::find($id);
        $students->firstname = request('firstname');
        $students->lastname = request('lastname');
        $students->address = request('address');
        $students->gender = request('gender');
        $students->country = request('country');
        $students->state = request('state');
        $students->district = request('district');
        $students->educational_details = json_encode(request('addmore'));
        $students->save();
                $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'address' => 'required',
                'gender' => 'required',
                'country' => 'required',
                'state' => 'required',
                'district' => 'required',
         ]);
        //$request->educational_details=json_encode($request->get('addmore'));
        $students->update($request->all());
  
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserData  $userData
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
  
        return redirect()->route('students.index')
                        ->with('success','Student deleted successfully');
    }
}

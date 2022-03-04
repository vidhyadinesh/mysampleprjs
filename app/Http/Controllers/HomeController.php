<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $students = DB::table('students')
            ->join('states', 'states.state_id', '=', 'students.state')
            ->join('districts', 'districts.city_id', '=', 'students.district')
            ->select('students.*', 'states.state_name', 'districts.city_name')
            ->latest()->paginate(5);
        return view('admin.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

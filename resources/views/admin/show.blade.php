@extends('layouts.frontend')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Student</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $students->firstname }} {{ $students->lastname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $students->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $students->address }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $students->gender }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>State:</strong>
                {{ $students->state_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>District:</strong>
                {{ $students->city_name }}
            </div>
        </div>
        <h3 class="text-center">Educational details</h3><br/>
        <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>Course</th>
                <th>College/University</th>
                <th>Year of passing</th>
                <th>Percentage or CGPA</th>
            </tr>
            @if(count(json_decode($students->educational_details))>0)
            @foreach(json_decode($students->educational_details) as $key=>$edu)
            <tr>  
                <td>{{$edu->course}}</td>  
                <td>{{$edu->college_university}}</td>  
                <td>{{$edu->year_of_passing}}</td>  
                <td>{{$edu->percentage_or_CGPA}}</td>
            </tr> 
            @endforeach
            @endif 
        </table> 
    </div>
@endsection
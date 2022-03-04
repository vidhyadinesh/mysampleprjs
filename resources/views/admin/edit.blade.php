@extends('layouts.frontend')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('students.update',$students->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First name:</strong>
                    <input type="text" name="firstname" value="{{ $students->firstname }}" class="form-control" placeholder="First name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last name:</strong>
                    <input type="text" class="form-control" name="lastname" value ="{{ $students->lastname }}" placeholder="Last name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" class="form-control" name="address" value ="{{ $students->address }}" placeholder="Address">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <select class="form-control" name="gender">
                <option value="">Select Gender</option>
                <option value="Male" @if ("Male" == old("gender", $students->gender)) selected="selected" @endif >Male</option>
                <option value="Female"  @if ("Female" == old("gender", $students->gender)) selected="selected" @endif >Female</option>
              </select>
                </div>
            </div>
            <input type="hidden" class="form-control" name="country" id="country" value ="{{ $students->country }}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>State:</strong>
                    <select class="form-control" name="state" id="state-dropdown">
                <option value="">Select State</option>
              </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>District:</strong>
                    <select class="form-control" name="district" id="district-dropdown">
                <option value="">Select District</option>
              </select>
                </div>
            </div>
            <h3 class="text-center">Educational details</h3><br/>
        <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>Course</th>
                <th>College/University</th>
                <th>Year of passing</th>
                <th>Percentage or CGPA</th>
                <th>Action</th>
            </tr>@php
    $i = 0;
@endphp
            @if(count(json_decode($students->educational_details))>0)
            @foreach(json_decode($students->educational_details) as $key=>$edu)
            
            <tr>  
                <td><input type="text" name="addmore[{{$i}}][course]" placeholder="Enter your Course" class="form-control" value="{{$edu->course}}"/></td>  
                <td><input type="text" name="addmore[{{$i}}][college_university]" placeholder="Enter your College/University" class="form-control" value="{{$edu->college_university}}"/></td>  
                <td><input type="text" name="addmore[{{$i}}][year_of_passing]" placeholder="Enter your Year of passing" class="form-control" value="{{$edu->year_of_passing}}"/></td>  
                <td><input type="text" name="addmore[{{$i}}][percentage_or_CGPA]" placeholder="Enter your Percentage or CGPA" class="form-control" value="{{$edu->percentage_or_CGPA}}"/></td> 
                <td>@if($key==0)<button type="button" name="add" id="add" class="btn btn-success">Add More</button>@else<button type="button" class="btn btn-danger remove-tr">Remove</button>@endif</td>  
            </tr> 
            @php
    $i++;
@endphp
            @endforeach
            @endif 
        </table> 
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
   @if(count(json_decode($students->educational_details))>1)
   var i = {{count(json_decode($students->educational_details))-1}};
   @else
    var i = 0;
    @endif   
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][course]" placeholder="Enter your Course" class="form-control" /></td><td><input type="text" name="addmore['+i+'][college_university]" placeholder="Enter your College/University" class="form-control" /></td><td><input type="text" name="addmore['+i+'][year_of_passing]" placeholder="Enter your Year of passing" class="form-control" /></td><td><input type="text" name="addmore['+i+'][percentage_or_CGPA]" placeholder="Enter your Percentage or CGPA" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
   <script>
    $(document).ready(function () {
    $('#form').validate({ 
        rules: {
            fname: {
                required: true
            },
            lname: {
                required: true
            },
            address: {
                required: true
            },
            gender: {
                required: true
                
            },
            state: {
                required: true
                
            },
            district: {
                required: true
                
            },
        },
          errorElement: 'span',
          errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
          }
    });

    //$('#country-dropdown').on('change', function() {
var country_id = $('#country').val();
$("#state-dropdown").html('');
$.ajax({
url:"{{url('get-states-by-country')}}",
type: "POST",
data: {
country_id: country_id,
_token: '{{csrf_token()}}' 
},
dataType : 'json',
success: function(result){
$('#state-dropdown').html('<option value="">Select State</option>'); 
$.each(result.states,function(key,value){
$("#state-dropdown").append('<option value="'+value.state_id+'" >'+value.state_name+'</option>');
});
$("#state-dropdown").val({{$students->state}});
$('#district-dropdown').html('<option value="">Select State First</option>'); 
$('#state-dropdown').trigger("change");
}
});
//});    
$('#state-dropdown').on('change', function() {
var state_id = this.value;
$("#district-dropdown").html('');
$.ajax({
url:"{{url('get-cities-by-state')}}",
type: "POST",
data: {
state_id: state_id,
_token: '{{csrf_token()}}' 
},
dataType : 'json',
success: function(result){
$('#district-dropdown').html('<option value="">Select District</option>'); 
$.each(result.cities,function(key,value){
$("#district-dropdown").append('<option value="'+value.city_id+'">'+value.city_name+'</option>');
});
$("#district-dropdown").val({{$students->district}});
}
});
});

});

</script>
@endsection 

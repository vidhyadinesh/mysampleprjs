<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>A registration portal for students for job registration.</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2 class="text-center">A registration portal for students for job registration.</h2><br/>
      <form method="post" action="{{ route('student.store') }}" id="form">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" name="firstname">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" name="lastname">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="gender">Gender:</label>
              <select class="form-control" name="gender">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <input type="hidden" class="form-control" name="country" id="country" value="101">
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="state">State:</label>
              <select class="form-control" name="state" id="state-dropdown">
                <option value="">Select State</option>
              </select>
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="district">District:</label>
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
            </tr>
            <tr>  
                <td><input type="text" name="addmore[0][course]" placeholder="Enter your Course" class="form-control" /></td>  
                <td><input type="text" name="addmore[0][college_university]" placeholder="Enter your College/University" class="form-control" /></td>  
                <td><input type="text" name="addmore[0][year_of_passing]" placeholder="Enter your Year of passing" class="form-control" /></td>  
                <td><input type="text" name="addmore[0][percentage_or_CGPA]" placeholder="Enter your Percentage or CGPA" class="form-control" /></td> 
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
            </tr>  
        </table> 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>

</html>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
   
    var i = 0;
       
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
            firstname: {
                required: true
            },
            lastname: {
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
$("#state-dropdown").append('<option value="'+value.state_id+'">'+value.state_name+'</option>');
});
$('#district-dropdown').html('<option value="">Select State First</option>'); 
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
}
});
});
});

</script> 
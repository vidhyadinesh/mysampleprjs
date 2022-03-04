 @extends('layouts.frontend')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registered Students</h2>
            </div>
            <div class="pull-right">
                <!--<a class="btn btn-success" href="{{ route('students.create') }}"> Create New User</a>-->
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Gender</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $uData)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $uData->firstname }} {{ $uData->lastname }}</td>
            <td>{{ $uData->gender }}</td>
            <td>
                <form action="{{ route('students.destroy',$uData->id) }}" method="POST">
                   
                    <a class="btn btn-info" href="{{ route('students.show',$uData->id) }}">Show</a>

 
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$uData->id) }}">Edit</a>
                    <!-- SUPPORT ABOVE VERSION 5.5 -->
                    {{-- @csrf
                    @method('DELETE') --}} 
                    
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $students->links() !!}
      
@endsection 
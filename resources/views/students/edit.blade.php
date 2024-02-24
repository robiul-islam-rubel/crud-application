@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Update Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$student->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PUT")
        <input type="hidden" name="id" id="id" value="{{$student->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$student->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="phone" id="mobile" value="{{$student->phone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
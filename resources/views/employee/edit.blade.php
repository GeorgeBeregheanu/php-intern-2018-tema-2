@extends('layouts.main')

@section('content')
<h2>Edit employee</h2>
<form method="post" action="{{action('EmployeeController@update', $id)}}">
	@csrf
	<input name="_method" type="hidden" value="PATCH">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" value="{{$employee->name}}">
  </div>
  <div class="form-group">
    <label for="company_id">Company:</label>
    <select class="form-control" id="company_id" name="company_id">
      <option value="{{$employee->company_id}}" selected disabled>{{$employee->company->name}}</option>
      @foreach($companies as $company)
      <option value="{{$company->id}}">{{$company->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Update</button>
  </div>
</form>
@endsection
@extends('layouts.main')

@section('content')
<h2>Add employee</h2>
<form method="post" action="{{url('employees')}}" >
	@csrf
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="name">Company:</label>
    <select class="form-control" id="company_id" name="company_id">
      @foreach($companies as $company)
      <option value="{{$company->id}}">{{$company->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success">Add</button>
  </div>
</form>
@endsection
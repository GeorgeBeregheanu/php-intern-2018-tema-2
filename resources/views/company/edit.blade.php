@extends('layouts.main')

@section('content')
<h2>Edit company</h2>
<form method="post" action="{{action('CompanyController@update', $id)}}">
	@csrf
	<input name="_method" type="hidden" value="PATCH">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$company->name}}">
          </div>
          <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" value="{{$company->description}}">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
</form>
@endsection
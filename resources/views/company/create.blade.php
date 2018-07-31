@extends('layouts.main')

@section('content')
<h2>Add company</h2>
<form method="post" action="{{url('companies')}}" >
	@csrf
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="name">Description:</label>
            <input type="text" class="form-control" name="description">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Add</button>
          </div>
</form>
@endsection
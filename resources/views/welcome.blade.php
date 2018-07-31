@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Companies</h5>
        <p class="card-text">See the companies stored in the database.</p>
        <a href="companies" class="btn btn-primary">Companies</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Employees</h5>
        <p class="card-text">See the employees stored in the database.</p>
        <a href="employees" class="btn btn-primary">Employees</a>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.main')

@section('content')

<h2>Employees</h2>
<div class="table-responsive bg-light">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Company</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $employee)
			<tr>
				<td>{{  $employee->id  }}</td>
				<td>{{  $employee->name  }} </td>
				<td>{{  $employee->company->name  }}</td>
				<td><a href="{{action('EmployeeController@edit', $employee->id)}}" class="btn btn-warning">Edit</a></td>
				<td><form action="{{action('EmployeeController@destroy', $employee->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form></td>

			</tr>
			@endforeach
		</tbody>
	</table>
</div></div>



@endsection
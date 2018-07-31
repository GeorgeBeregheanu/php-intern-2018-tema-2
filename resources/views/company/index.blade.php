@extends('layouts.main')

@section('content')

<h2>Companies</h2>
<div class="table-responsive bg-light">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Description</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($companies as $company)
			<tr>
				<td>{{  $company->id  }}</td>
				<td>{{  $company->name  }} </td>
				<td>{{  $company->description  }}</td>
				<td><a href="{{action('CompanyController@edit', $company->id)}}" class="btn btn-warning">Edit</a></td>
				<td><form action="{{action('CompanyController@destroy', $company->id)}}" method="post">
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
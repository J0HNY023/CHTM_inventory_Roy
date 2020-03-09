
@extends('layouts.master')

@include('dashboard.index')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial #</th>
      <th scope="col">Brand</th>
      <th scope="col">Date Bought</th>
      <th scope="col">Equipment Category Id</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($equipments as $equipment)
    <tr>
      <th scope="row">{{$equipment->serial_number}}</th>
      <td>{{$equipment->brand}}</td>
      <td>{{$equipment->date_bought}}</td>
      <td>{{$equipment->equipment_category_id}}</td>
      <td>
      	<a href="/dashboard/equipment/edit/{{$equipment->id}}">Edit</a>
      	<a href="/dashboard/equipment/delete/{{$equipment->id}}">Delete</a>

      </td>

    </tr>
	@endforeach

  </tbody>
</table>

<a href="/dashboard/equipment/create">Add Equipment</a>


@endsection
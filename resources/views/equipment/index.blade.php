
@extends('layouts.master')


{{-- {{dd($equipments[1]->equipment_category)}} --}}
@section('content')

{{-- @foreach ($equipments->equipment_category as $cat) --}}
{{-- {{$equipment->equipment_category}} --}}
{{-- {{$cat}} --}}
{{-- @endforeach --}}

{{-- {{$equipments[0]->equipment_category->name}} --}}

<h3>Equipments</h3>
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
      <th scope="row">{{$equipment->serial_number}}&nbsp;{{$equipment->id}}</th>
      <td>{{$equipment->brand}}</td>
      <td>{{$equipment->date_bought}}</td>
      <td>{{$equipment->equipment_category->name}}</td>
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
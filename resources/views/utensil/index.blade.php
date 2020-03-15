
@extends('layouts.master')


{{-- {{dd($utensils[1]->utensil_category)}} --}}
@section('content')

{{-- @foreach ($utensils->utensil_category as $cat) --}}
{{-- {{$utensil->utensil_category}} --}}
{{-- {{$cat}} --}}
{{-- @endforeach --}}

{{-- {{$utensils[0]->utensil_category->name}} --}}

<h3>Utensils</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Unit</th>
      <th scope="col">Quantity</th>
      <th scope="col">Utensil Category </th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>


  	@foreach($utensils as $utensil)


    <tr>
      <th scope="row">{{$utensil->name}}</th>
      <td>{{$utensil->unit}}</td>
      <td>{{$utensil->quantity}}</td>
      <td>{{$utensil->utensil_category->name}}</td>
      <td>
      	<a href="/dashboard/utensil/edit/{{$utensil->id}}">Edit</a>
      	<a href="/dashboard/utensil/delete/{{$utensil->id}}">Delete</a>

      </td>

    </tr>
	@endforeach

  </tbody>
</table>

<a href="/dashboard/utensil/create">Add Utensil</a>


@endsection
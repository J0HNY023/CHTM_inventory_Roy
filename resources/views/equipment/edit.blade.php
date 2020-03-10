
@extends('layouts.master')

{{-- @include('dashboard.index') --}}
{{-- {{dd($equipments->date_bought)}} --}}

@section('content')
<h3>Edit Equipments</h3>
<form action="/dashboard/equipment/update" method="POST">

  @csrf
<input type="number" name="id" value="{{$id}}" hidden="hidden">

  <div class="form-row align-items-center">
     <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Serial Number</label>
      <input type="number" class="form-control mb-2" id="inlineFormInput" placeholder="{{$equipments->serial_number}}" name="serial_number" required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Brand</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="{{$equipments->brand}}" name="brand"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Date Bought</label>
      <input type="date" class="form-control mb-2" id="inlineFormInput" value="{{$equipments->date_bought}}" name="date_bought"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Equipment Category Id</label>
         <select class="form-control mb-2" id="inlineFormInput" name="equipment_category_id"   required="required">
          @foreach($equipment_categories as $equipment_category)
          <option value="{{$equipment_category->id}}">{{$equipment_category->name}}</option>
          @endforeach
    </select>

    </div>

    <div class="col-auto">
      
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Update</button>
    </div>
  </div>
</form>

@endsection

@extends('layouts.master')

{{-- @include('dashboard.index') --}}

@section('content')
{{-- {{dd($equipment_categories)}} --}}
{{-- asdfasdf --}}
<form action="/dashboard/equipment/store" method="POST">

  @csrf

  <div class="form-row align-items-center">
     <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Serial Number</label>
      <input type="number" class="form-control mb-2" id="inlineFormInput"  name="serial_number" placeholder="Serial Number" required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Brand</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Brand" name="brand"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Date Bought</label>
      <input type="date" class="form-control mb-2" id="inlineFormInput" name="date_bought"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Equipment Category Id</label>
         <select class="form-control mb-2" id="inlineFormInput" name="equipment_category_id"   required="required">
          @foreach($equipment_categories as $equipment_category)
          <option value="{{$equipment_category->id}}">{{$equipment_category->name}}</option>
          @endforeach
    </select>

    </div>

      <div class="form-group">
    
  </div>
    <div class="col-auto">
      
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Add</button>
    </div>
  </div>
</form>

@endsection

@extends('layouts.master')

{{-- @include('dashboard.index') --}}

@section('content')
{{-- {{dd($utensil_categories)}} --}}
{{-- asdfasdf --}}
<form action="/dashboard/utensil/store" method="POST">

  @csrf

  <div class="form-row align-items-center">
     <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput"  name="serial_number" placeholder="Serial Number" required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Unit</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Brand" name="brand"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">quantity</label>
      <input type="date" class="form-control mb-2" id="inlineFormInput" name="date_bought"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Utensil Category Id</label>
         <select class="form-control mb-2" id="inlineFormInput" name="utensil_category_id"   required="required">
          @foreach($utensil_categories as $utensil_category)
          <option value="{{$utensil_category->id}}">{{$utensil_category->name}}</option>
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
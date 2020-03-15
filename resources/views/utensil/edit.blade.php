
@extends('layouts.master')

{{-- @include('dashboard.index') --}}
{{-- {{dd($utensil->date_bought)}} --}}

@section('content')

{{-- {{dd($utensils->name)}} --}}
<h3>Edit Utensil</h3>
<form action="/dashboard/utensil/update" method="POST">

  @csrf
<input type="number" name="id" value="{{$id}}" hidden="hidden">

  <div class="form-row align-items-center">
     <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="{{$utensils->name}}" name="name" required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Unit</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="{{$utensils->unit}}" name="unit"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Quantity</label>
      <input type="number" class="form-control mb-2" id="inlineFormInput" value="{{$utensils->quantity}}" name="quantity"  required="required">
    </div>

    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Utensil Category</label>
         <select class="form-control mb-2" id="inlineFormInput" name="utensil_category_id"   required="required">
          @foreach($utensil_categories as $utensil_category)
          <option value="{{$utensil_category->id}}">{{$utensil_category->name}}</option>
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
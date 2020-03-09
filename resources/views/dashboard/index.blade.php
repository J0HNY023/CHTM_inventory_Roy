


@extends('layouts.master')

@section('title', 'Chtm Inventory')

{{-- @section('navbar')
    @parent --}}

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/dashboard">CHTM Inventory</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard/equipment">Equipments <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
   </ul>
 </div>

  <div class="nav-item dropdown" style="margin-right: 10%;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{$user->username}}
        </a>


        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
          <a class="dropdown-item" href="#"></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/changepassword">Change password</a>
        </div>


      </div>
      
</nav>

    {{-- <p>This is appended to the master sidebar.</p> --}}
{{-- @stop --}}

{{-- @section('content') --}}
    {{-- <p>This is my body content.</p> --}}
    {{-- <h3>Equipments</h3> --}}
    {{-- @include('equipment.index') --}}
{{-- @stop --}}
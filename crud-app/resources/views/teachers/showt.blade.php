@extends('teachers.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teachers->name ?? 'none' }}</h5>
        <p class="card-text">Age : {{ $teachers->age ?? 'none' }}</p>
        <p class="card-text">Address : {{ $teachers->address ?? 'none' }}</p>
        <p class="card-text">Department : {{ $teachers->department ?? 'none' }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
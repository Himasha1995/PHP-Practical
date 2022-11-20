<x-app-layout>
    <h1></h1>
</x-app-layout>
@extends('prescriptions.layout')
@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Add Prescription</div>
  <div class="card-body">
       
      <form action="{{ url('prescriptions') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Note</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Delivery Address</label></br>
        <input type="text" name="delivery_address" id="delivery_address" class="form-control"></br>
        <label>Delivery Time</label></br>
        <input type="text" name="delivery_time" id="delivery_time" class="form-control"></br>
        <input class="form-control" name="photo" type="file" id="photo">
 
         
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop
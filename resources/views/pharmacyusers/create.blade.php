<x-app-layout>
    
</x-app-layout>
@extends('pharmacyusers.layout')
@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Add Prescription</div>
  <div class="card-body">
       
      <form action="{{ url('pharmacyusers') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Drug</label>
        <input type="text" name="drug" id="drug" class="form-control">
        <label>Quantity</label>
        <input type="text" name="quantity" id="quantity" class="form-control">
        <label>Amount</label>
        <input type="text" name="amount" id="amount" class="form-control">
        <label>Total</label>
        <input type="text" name="total" id="total" class="form-control">
    
 
         <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop
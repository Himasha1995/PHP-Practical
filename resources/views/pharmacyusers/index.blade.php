<x-app-layout>
   
    
</x-app-layout>

@extends('pharmacyusers.layout')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                    <a href="{{ url('/pharmacyusers/create') }}" class="btn btn-success btn-sm" title="Add New prescriptions">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Drug</th>
                                        <th>Quantity</th>
                                        <th>Amount</th> 
                                        <th>Total</th> 
                                        <th>Photo</th> 
                                    </tr>
                                </thead>
                                </thead>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
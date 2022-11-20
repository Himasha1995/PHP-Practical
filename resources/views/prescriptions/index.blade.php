<x-app-layout>
    <h1>This is user Dashboard</h1>
</x-app-layout>
@extends('prescriptions.layout')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-12" style="padding:20px;">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <a href="{{ url('/prescriptions/create') }}" class="btn btn-success btn-sm" title="Add New prescriptions">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Note</th>
                                        <th>Delivery Address</th>
                                        <th>Delivery Time</th> 
                                        <th>Photo</th> 
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
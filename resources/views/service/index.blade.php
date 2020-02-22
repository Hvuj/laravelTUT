@extends('app')

@section('title', 'Services')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/services/create">Add New Service</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        @forelse($noobs as $noob)
        <div class="">
            <div class="table table-hover table-success">
                {{$noob->noob}}
            </div>
        </div>
        @empty
        <li>No Customers available</li>
        @endforelse
        <hr>
        @forelse($services as $service)
        <div class="">
            <div class="table table-hover table-success">
                {{$service->name}}
            </div>
        </div>
        @empty
        <li>No Customers available</li>
        @endforelse
    </div>
</div>
@endsection
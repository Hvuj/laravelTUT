@extends('app')

@section('title', 'Customers')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/customers/create">Create new customer</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        @forelse($customers as $customer)
        <div class="">
            <div class="table table-hover table-success">
                <a href="/customers/{{$customer->id}}">{{$customer->name}}</a>
            </div>
            <hr>
        </div>
        @empty
        <li>No Customers available</li>
        @endforelse
    </div>
</div>
@endsection
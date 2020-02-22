@extends('app')

@section('title', 'Customers')

@section('content')
<h1>Edit Customer</h1>
<a class="btn btn-primary" href="/customers/{{$customer->id}}">Cancel</a>
<a class="btn btn-primary" href="/customers">Customers Page</a>
<hr>
<div class="container card card-header">
    <form action="/customers/{{$customer->id}}" method="post">
        @method('PUT')
        @include('customer.form')
        <button type="submit" class="btn btn-primary">Save Customer</button>
    </form>
</div>
<hr>
@endsection
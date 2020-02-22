@extends('app')

@section('title', 'Customers')

@section('content')
<h1>customers page</h1>
<a class="btn btn-primary" href="/customers">Go Back</a>
<hr>
<div class="container card card-header">
    <form action="/customers" method="post">
        @include('customer.form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<hr>
@endsection
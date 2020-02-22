@extends('app')

@section('title', 'Phones')

@section('content')
<h1>Phones page</h1>
<hr>
<div class="container">
    <a class="btn btn-primary" href="/phones/create">Add New Phone</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        @forelse($phones as $phone)
        <div class="">
            <div class="table table-hover table-success">
                <a href="/phones/{{$phone->id}}">{{$phone->name}}</a>
            </div>
        </div>
        @empty
        <li>No phones available</li>
        @endforelse
    </div>
</div>

@endsection
@extends('app')

@section('title', 'Sukis')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="/sukis/create">Add New Suki</a>
    <a class="btn btn-primary float-right" href="/UserPage">Go Back</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        @forelse($sukis as $suki)
        <div class="">
            <div class="table table-hover">
                <p>User: <a class="btn btn-outline-primary" href="/sukis/{{$suki->id}}">{{$suki->name}}</a></p>
            </div>
        </div>
        @empty
        <li>No Sukis available</li>
        @endforelse
        <hr>
    </div>
</div>
@endsection
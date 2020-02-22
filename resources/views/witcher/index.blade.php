@extends('app')

@section('title', 'Witchers')

@section('content')
<h1>Witchers page</h1>
<hr>
<div class="container">
    <a class="btn btn-primary" href="/witchers/create">Add New Witcher</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        @forelse($witchers as $witcher)
        <div class="">
            <div class="table table-hover table-success">
                <a href="/witchers/{{$witcher->id}}">{{$witcher->name}}</a>
            </div>
            <hr>
        </div>
        @empty
        <li>No Witchers available</li>
        @endforelse
    </div>
</div>
@endsection
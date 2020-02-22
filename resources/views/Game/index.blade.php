@extends('app')

@section('title', 'Games')

@section('content')
<h1>Games page</h1>
<hr>
<div class="container">
    <a class="btn btn-primary" href="/games/create">Add New Game</a>
</div>
<hr>
<div class="container">
    <div class="card card-header">
        @forelse($games as $game)
        <div class="">
            <div class="table table-hover table-success">
                <a href="/games/{{$game->id}}">{{$game->name}}</a>
            </div>
            <hr>
        </div>
        @empty
        <li>No Games available</li>
        @endforelse
    </div>
</div>
@endsection
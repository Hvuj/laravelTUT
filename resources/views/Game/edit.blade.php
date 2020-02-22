@extends('app')

@section('title', 'Games')

@section('content')
<h1>Edit Game</h1>
<a class="btn btn-primary" href="/games">Cancel</a>
<a class="btn btn-primary" href="/games">Games Page</a>
<hr>
<div class="container card card-header">
    <form action="/games/{{$game->id}}" method="post">

        @method('PUT')
        @include('Game.form')
        <button type="submit" class="btn btn-primary">Save Game</button>
    </form>
</div>
<hr>
@endsection
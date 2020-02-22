@extends('app')

@section('title', 'Games')

@section('content')
<h1>games page</h1>
<a class="btn btn-primary" href="/games">Go Back</a>
<hr>
<div class="container card card-header">
    <form action="/games" method="post">
        @include('Game.form')
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<hr>
@endsection
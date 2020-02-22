@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/laravel/users" class="btn btn-primary">Users</a>
        </div>
        <div class="col">
            <a href="/games" class="btn btn-primary">Games</a>
        </div>
        <div class="col">
            <a href="/witchers" class="btn btn-primary">Witchers</a>
        </div>
        <div class="col">
            <a href="/sukis" class="btn btn-primary">Sukis</a>
        </div>
    </div>
</div>
<hr>
@endsection